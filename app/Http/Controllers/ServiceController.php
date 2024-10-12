<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Store;
use App\Models\Service;
use App\Models\Handyman;
use App\Models\Gig;
use App\Models\HandymanAvailability;
use Carbon\Carbon;

class ServiceController extends Controller
{
    //
    public function search(Request $request)
    {
        $query = $request->get('query');
        $services = Service::where('name', 'LIKE', "%{$query}%")
            ->orWhere('name_ar', 'LIKE', "%{$query}%")
            ->get();

        $output = '';
        if ($services->count() > 0) {
            foreach ($services as $service) {
                $output .= '<a href="#" class="dropdown-item suggestion-item" data-service-id="' . $service->id . '" data-category-id="' . $service->category_id . '">' . $service->name . '</a>';
            }
        } else {
            $output .= '<p class="dropdown-item">No services found</p>';
        }

        return response()->json($output);
    }


    public function stepOne($categoryId, $serviceId)
    {
        $category = Category::findOrFail($categoryId);
        $service = Service::findOrFail($serviceId);
        return view('gig_proccess.step-one', compact('category', 'service'));
    }

    public function storeStep1(Request $request)
    {
        // dd($request);
        // Validate inputs
        $request->validate([
            'category_id' => 'required',
            'service_id' => 'required',
            'title' => 'required',
            'car_req' => 'nullable|boolean',
            'location' => 'required|string',
            'end_address' => 'nullable|string',
            'estimated_time' => 'required|string',
            'description' => 'required|string',
        ]);

        // Save the gig data temporarily in session
        session([
            'title' => $request->title,
            'category_id' => $request->category_id,
            'service_id' => $request->service_id,
            'car_req' => $request->car_req,
            'location' => $request->location,
            'end_address' => $request->end_address,
            'estimated_time' => $request->estimated_time,
            'description' => $request->description,
        ]);

        return redirect()->route('gig.step2');
    }



    public function showStep2(Request $request)
    {
        $categoryId = session('category_id'); // Get the category ID from the session
        $category = Category::findOrFail($categoryId);

        $service_id = session('service_id'); // Get the service ID from the session
        $service = Service::findOrFail($service_id);

        // Initial query for handymen, with counts for reviews and gigs in category
        $handymenQuery = Handyman::with('latest_review', 'user')
            ->withCount('reviews', 'gigs')
            ->withCount(['gigs as gigs_in_category' => function ($query) use ($categoryId) {
                $query->where('category_id', $categoryId); // Count gigs in the specific category
            }]);

        // Apply date filters if provided
        if ($request->has('date_filter')) {
            $dateFilter = $request->input('date_filter');

            switch ($dateFilter) {
                case 'today':
                    $handymenQuery->whereDoesntHave('availability', function ($query) {
                        $query->whereDate('start_time', now()->toDateString());
                    });
                    break;

                case 'within_3_days':
                    $handymenQuery->whereDoesntHave('availability', function ($query) {
                        $query->whereBetween('start_time', [now(), now()->addDays(3)]);
                    });
                    break;

                case 'within_a_week':
                    $handymenQuery->whereDoesntHave('availability', function ($query) {
                        $query->whereBetween('start_time', [now(), now()->addWeek()]);
                    });
                    break;
            }
        }

        // Handle date filtering
        if ($request->has('choose_dates')) {
            $dates = explode(' to ', $request->input('choose_dates')); // Get the date range

            if (count($dates) === 2) {
                $startDate = $dates[0]; // First selected date
                $endDate = $dates[1]; // Second selected date

                // Now filter the handymen based on availability in this date range
                $handymenQuery->whereDoesntHave('availability', function ($query) use ($startDate, $endDate) {
                    $query->whereBetween('start_time', [$startDate, $endDate])
                        ->orWhereBetween('end_time', [$startDate, $endDate]);
                });
            }
        }


        if ($request->has('time_of_day')) {
            $timeOfDay = $request->input('time_of_day'); // Get selected time of day values

            $handymenQuery->whereHas('availability', function ($query) use ($timeOfDay) {
                if (in_array('morning', $timeOfDay)) {
                    $query->orWhereBetween('start_time', ['08:00:00', '12:00:00']);
                }
                if (in_array('afternoon', $timeOfDay)) {
                    $query->orWhereBetween('start_time', ['12:00:00', '17:00:00']);
                }
                if (in_array('evening', $timeOfDay)) {
                    $query->orWhereBetween('start_time', ['17:00:00', '21:30:00']);
                }
            });
        }
        // Handle Price Range filter
        if ($request->has('price_range')) {
            $priceRange = $request->input('price_range');
            $handymenQuery->where('price_per_hour', '<=', $priceRange);
        }

        $handymen = $handymenQuery->get();



        return view('gig_proccess.step2', compact('handymen', 'category', 'service'));
    }



    public function storeStep2(Request $request)
    {
        // dd($request);
        // If the user selects a handyman, store it in session
        if ($request->has('selected_tasker')) {
            session(['handyman_id' => $request->selected_tasker]);
            return redirect()->route('gig.step3');
        }

        // If a filter request is made, reapply the filters
        return redirect()->route('gig.step3')->withInput($request->all());
    }

    // Step 3: Select Date/Time
    public function showStep3()
    {

        $handyman = session('handyman_id') ? Handyman::find(session('handyman_id')) : null;
        session()->put('from_step_3', true);


        // Check if a handyman is selected
        // if ($handyman) {
        //     // Retrieve handyman's availability
        //     $availableDates = HandymanAvailability::where('handyman_id', 1)
        //         ->whereDate('start_time', '>=', now()) // Only future dates
        //         ->get();

        //     // Retrieve handyman's booked gigs
        //     $bookedDates = Gig::where('handyman_id', 1)
        //         ->whereDate('task_date', '>=', now()) // Only future dates
        //         ->get();
        //     // dd($bookedDates);
        //     // Pass the available and booked dates to the view
        //     return view('gig_proccess.step3', compact('availableDates', 'bookedDates', 'handyman'));
        // }


        if ($handyman) {
            $handymanid = session('handyman_id'); // Get the service ID from the session
            $bookedDates = Gig::where('handyman_id', $handymanid)
                ->pluck('task_date')
                ->toArray(); // Fetch the booked dates as an array
            // dd($bookedDates);
            return view('gig_proccess.step3', compact('bookedDates', 'handyman'));
        } else {
            $bookedDates = [];
            return view('gig_proccess.step3', compact('bookedDates', 'handyman'));
        }


        // dd(session('handyman_id'));
        return view('gig_proccess.step3', compact('handyman'));
    }

    public function storeStep3(Request $request)
    {
        // Validate the time/date
        $request->validate([
            'date' => 'required|date|after_or_equal:today',
            'time' => 'required|date_format:H:i',
            'budget' => 'nullable|string', // Ensure that 'budget' is passed

        ]);

        // Capture the budget option from the form
        $budget = $request->input('budget');

        // Store the date and time in the session
        session([
            'task_date' => $request->date,
            'task_time' => $request->time,
            'budget' => $budget ?? null,
        ]);

        return redirect()->route('gig.step4');
    }

    // Step 4: Confirm and Payment
    public function showStep4(Request $request)
    {

        if (!auth()->check()) {
            // Store the redirect URL in the session only if coming from step 3
            if ($request->session()->has('from_step_3')) {
                session()->put('redirect_after_login', url()->current());
            }

            // Redirect to the login page
            return redirect()->route('login');
        }

        $categoryId = session('category_id'); // Get the category ID from the session
        $category = Category::findOrFail($categoryId);

        $service_id = session('service_id'); // Get the service ID from the session
        $service = Service::findOrFail($service_id);

        // {{ session('location') }}

        $handyman = session('handyman_id') ? Handyman::with('user')->find(session('handyman_id')) : null;
        $total = 0;

        if ($handyman) {
            // Calculate the total price
            $hourlyRate = $handyman->price_per_hour;
            $estimatedTime = session('estimated_time');
            $total = ($hourlyRate * $estimatedTime) + ($hourlyRate * $estimatedTime * 0.16); // Trust fee 16%
        } else {
            $hourlyRate = session('budget');
            $estimatedTime = session('estimated_time');
            $total = ($hourlyRate * $estimatedTime) + ($hourlyRate * $estimatedTime * 0.16); // Trust fee 16%
        }



        return view('gig_proccess.step4', compact('total', 'handyman', 'category', 'service', 'hourlyRate', 'estimatedTime'));
    }

    public function storeStep4(Request $request)
    {
        // Here you can handle the payment logic




        $paymentMethod = $request->input('payment_method');

        if ($paymentMethod === 'card') {
            // Validate card payment fields
            $request->validate([
                'card_number' => 'required|string|size:16',
                'card_expiry' => ['required', 'string', 'regex:/^(0[1-9]|1[0-2])\/?([0-9]{2})$/'], // Format MM/YY
                'card_cvc'    => 'required|string|size:3',
                'card_name'   => 'required|string|max:255',
            ]);
        }



        // Retrieve the handyman, if selected
        $handyman = session('handyman_id') ? Handyman::find(session('handyman_id')) : null;

        // Calculate total price
        $total = 0;

        if ($handyman) {
            // Calculate total for selected handyman
            $hourlyRate = $handyman->price_per_hour;
            $estimatedTime = session('estimated_time');
            $total = ($hourlyRate * $estimatedTime) + ($hourlyRate * $estimatedTime * 0.16); // Trust fee 16%
        } else {
            // Calculate total for skipped handyman (based on budget)
            $total = session('budget') + (session('budget') * 0.16); // Trust fee 16%
        }
        // Save gig to the database
        $gig = new Gig();
        $gig->user_id = auth()->id();
        // $gig->user_id = 2;

        $gig->handyman_id = session('handyman_id') ?? null;
        $gig->category_id = session('category_id');
        $gig->service_id = session('service_id');

        $gig->location = session('location');
        $gig->end_address = session('end_address');
        $gig->car_req = session('car_req');
        $gig->estimated_time = session('estimated_time');
        $gig->description = session('description');
        $gig->title = session('title');

        $gig->task_date = session('task_date');
        $gig->task_time = session('task_time');



        $gig->price = session('budget') ?? $hourlyRate;
        $gig->total = $total;

        // $gig->status_id = 7; // Default status ( open)
        $gig->status_id = 28; // Default status ( open)

        $gig->save();

        session()->forget([
            'task_time',
            'handyman_id',
            'category_id',
            'service_id',
            'location',
            'end_address',
            'car_req',
            'estimated_time',
            'description',
            'title',
            'task_date',
            'budget'
        ]);        // dd(session('Handyman_id'));
        return redirect()->route('customer.dashboard')->with('success', 'Gig successfully created!');
    }
}
