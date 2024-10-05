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

            'car_req' => 'nullable|boolean',
            'location' => 'required|string',
            'end_address' => 'nullable|string',
            'estimated_time' => 'required|string',
            'description' => 'required|string',
        ]);

        // Save the gig data temporarily in session
        session([
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

    // Step 2: Handyman Selection
    // public function showStep2()
    // {
    //     $categoryId = session('category_id'); // Get the category ID from the session
    //     $category = Category::findOrFail($categoryId);

    //     $service_id = session('service_id'); // Get the category ID from the session
    //     $service = Service::findOrFail($service_id);

    //     $handymen = Handyman::with('latest_review', 'user')
    //         ->withCount('reviews', 'gigs') // Count all gigs normally
    //         ->withCount(['gigs as gigs_in_category' => function ($query) use ($categoryId) {
    //             $query->where('category_id', $categoryId); // Count gigs with specific category_id
    //         }])
    //         ->get();
    //     return view('gig_proccess.step2', compact('handymen', 'category', 'service'));
    // }

    // public function storeStep2(Request $request)
    // {
    //     // If the user selects a handyman, store it in session
    //     if ($request->has('selected_tasker')) {
    //         session(['handyman_id' => $request->selected_tasker]);
    //     }
    //     return redirect()->route('gig.step3');
    // }

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

        // dd(session('handyman_id'));
        return view('gig_proccess.step3', compact('handyman'));
    }

    public function storeStep3(Request $request)
    {
        // Validate the time/date
        $request->validate([
            'date' => 'required|date|after_or_equal:today',
            'time' => 'required|date_format:H:i',
        ]);

        // Store the date and time in the session
        session([
            'task_date' => $request->date,
            'task_time' => $request->time,
            'budget' => $request->budget ?? null,
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


        $handyman = session('handyman_id') ? Handyman::find(session('handyman_id')) : null;
        $total = 0;

        if ($handyman) {
            // Calculate the total price
            $hourlyRate = $handyman->price_per_hour;
            $estimatedTime = session('estimated_time');
            $total = ($hourlyRate * $estimatedTime) + ($hourlyRate * $estimatedTime * 0.16); // Trust fee 16%
        } else {
            $total = session('budget') + (session('budget') * 0.16); // Trust fee 16%
        }



        return view('gig_proccess.step4', compact('total', 'handyman'));
    }

    public function storeStep4(Request $request)
    {
        // Here you can handle the payment logic

        // Validate the payment form inputs (e.g., card number)
        $request->validate([
            'card_number' => 'required|string',
            // You can also add validation for the promo code or any other fields
        ]);

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
        // $gig->user_id = auth()->id();
        $gig->user_id = 2;

        $gig->handyman_id = session('handyman_id') ?? null;
        $gig->category_id = session('category_id');
        $gig->location = session('location');
        $gig->end_address = session('end_address');
        $gig->car_req = session('car_req');
        $gig->estimated_time = session('estimated_time');
        $gig->description = session('description');
        $gig->task_date = session('task_date');
        $gig->task_time = session('task_time');


        $gig->price = session('budget') ?? 0;
        $gig->total = $total;

        $gig->status_id = 7; // Default status ( open)
        $gig->save();

        return redirect()->route('dashboard')->with('success', 'Gig successfully created!');
    }
}
