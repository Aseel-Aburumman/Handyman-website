<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Ticket;

use App\Models\Category;
use App\Models\Store;
use App\Models\Service;
use App\Models\Handyman;
use App\Models\Notification;
use App\Models\Skill;
use App\Models\Certificate;
use App\Models\SkillCertificate;
use App\Models\Agreement;
use App\Models\HandymanApplication;
use App\Models\StoreOwnerApplication;



use Illuminate\Support\Facades\Auth;


use App\Models\Gig;


use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function index()
    {
        $categories = Category::with('services')->get(); // Assuming you have a relationship set up
        // dd($categories);  // This will dump and die the data, helping you see if it's being fetched correctly.

        $topStores = Store::select('stores.id', 'stores.name', 'stores.store_owner_id', 'stores.rating', DB::raw('SUM(sales.quantity_sold) as total_sales'))
            ->join('sales', 'stores.id', '=', 'sales.store_id')
            ->whereNull('stores.deleted_at')
            ->groupBy('stores.id', 'stores.name', 'stores.store_owner_id', 'stores.rating') // Include all non-aggregated columns in GROUP BY
            ->orderByRaw('SUM(sales.quantity_sold) DESC')
            ->with('image') // Assuming you have a relationship for store images
            ->take(5)
            ->get();

        $topHandymen = Gig::select('handyman_id', DB::raw('COUNT(*) as gig_count'))
            ->whereNotNull('handyman_id')  // Exclude records where handyman_id is null
            ->groupBy('handyman_id')
            ->orderBy('gig_count', 'DESC')
            ->take(6)
            ->with(['handyman.user'])  // Assuming the relationships are set up correctly
            ->get();

        // dd($topHandymen->toArray()); // Dump the entire array to check if relationships are present
        $totalGigs = DB::table('gigs')->count();
        $totalUsers = DB::table('users')->count();
        $totalHandymen = DB::table('handymans')->count();
        $totalStores = DB::table('stores')->count();

        return view('index', compact('categories', 'topStores', 'topHandymen', 'totalGigs', 'totalUsers', 'totalHandymen', 'totalStores'));
    }

    public function notification()
    {
        $user_id = Auth::id();
        // $user_id = 1;

        Notification::where('user_id', $user_id)
            ->where('is_read', 0)
            ->update(['is_read' => 1]);


        $notifications = Notification::where('user_id', $user_id)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('main_strc.notification', compact('notifications'));
    }


    public function indexHandymen(Request $request)
    {
        // Initial query for handymen, with counts for reviews and gigs in category
        $handymenQuery = Handyman::with('latest_review', 'user')
            ->withCount('reviews', 'gigs');



        // Handle Date Filter
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


        // Handle date range filtering
        if ($request->has('choose_dates')) {
            $dates = explode(' to ', $request->input('choose_dates'));

            if (count($dates) === 2) {
                $startDate = $dates[0];
                $endDate = $dates[1];

                // Filter handymen based on availability in the date range
                $handymenQuery->whereDoesntHave('availability', function ($query) use ($startDate, $endDate) {
                    $query->whereBetween('start_time', [$startDate, $endDate])
                        ->orWhereBetween('end_time', [$startDate, $endDate]);
                });
            }
        }

        // Handle Time of Day filter
        if ($request->has('time_of_day')) {
            $timeOfDay = $request->input('time_of_day');

            $handymenQuery->whereHas('availability', function ($query) use ($timeOfDay) {
                foreach ($timeOfDay as $time) {
                    switch ($time) {
                        case 'morning':
                            $query->orWhereBetween('start_time', ['08:00:00', '12:00:00']);
                            break;
                        case 'afternoon':
                            $query->orWhereBetween('start_time', ['12:00:00', '17:00:00']);
                            break;
                        case 'evening':
                            $query->orWhereBetween('start_time', ['17:00:00', '21:30:00']);
                            break;
                    }
                }
            });
        }

        // Handle Price Range filter
        if ($request->has('price_range')) {
            $priceRange = $request->input('price_range');
            $handymenQuery->where('price_per_hour', '<=', $priceRange);
        }



        // Handle Rating Filter
        if ($request->has('rating') && !empty($request->input('rating'))) {
            $rating = $request->input('rating');

            // Assuming the rating is part of the 'user' relationship
            $handymenQuery->whereHas('user', function ($query) use ($rating) {
                $query->where('rating', '>=', $rating); // Filter handymen with rating >= selected rating
            });
        }


        if ($request->has('gig_count') && !empty($request->input('gig_count'))) {
            $gigCount = $request->input('gig_count');

            // Assuming the rating is part of the 'user' relationship
            // $handymenQuery->whereHas('user', function ($query) use ($gigCount) {
            //     $query->where('gigs_count', '>=', $gigCount); // Filter handymen with rating >= selected rating
            // });
            $handymenQuery->having('gigs_count', '>=', $gigCount);
        }

        // Handle Gig Count Filter
        // if ($request->has('gig_count')) {
        //     $gigCount = $request->input('gig_count');
        //     // This is the fix: Use having after the withCount
        //     $handymenQuery->having('gigs_count', '>=', $gigCount); // Filter handymen with gigs >= selected gig count
        // }


        // Handle Skill Filter
        if ($request->has('skills')) {
            $selectedSkills = $request->input('skills');

            // Filter handymen based on selected skills using the skill_certificates table
            $handymenQuery->whereHas('skills', function ($query) use ($selectedSkills) {
                $query->whereIn('skills.id', $selectedSkills); // Match handymen with selected skills
            });
        }

        // Get the filtered handymen
        $handymen = $handymenQuery->get();
        $skills = Skill::all();

        // Return the view with the filtered handymen
        return view('main_strc.allhandymans', compact('handymen', 'skills'));
    }


    public function service()
    {
        $categories = Category::with('services')->get();

        return view('main_strc.service', compact('categories'));
    }

    public function btasker()
    {
        $agreement = Agreement::where('agreement_type', 'handyman')->first();
        return view('main_strc.b_tasker', compact('agreement'));
    }
    public function confirmAgreement()
    {
        return redirect()->route('handyman.apply');
    }
    public function showApplicationForm()
    {
        return view('main_strc.handyman_apply');
    }

    public function storeApplication(Request $request)
    {
        $request->validate([
            'price_per_hour' => 'required|integer|min:1',
            'experience' => 'required|integer|min:1',
            'bio' => 'nullable|string|max:1000',
        ]);

        HandymanApplication::create([
            'user_id' => Auth::id(),
            'price_per_hour' => $request->price_per_hour,
            'experience' => $request->experience,
            'bio' => $request->bio,
            'status' => 'pending', // Initial status is pending
        ]);

        return redirect()->route('home')->with('success', 'Your handyman application has been submitted and is pending approval.');
    }



    public function bstoreowner()
    {
        $agreement = Agreement::where('agreement_type', 'store_owner')->first();

        return view('main_strc.b_storeowner', compact('agreement'));
    }
    public function confirmAgreement_storeowner()
    {
        return redirect()->route('storeowner.apply');
    }

    // Show the store owner application form
    public function showApplicationForm_storeowner()
    {
        return view('main_strc.storeowner_apply');
    }

    // Store the store owner application
    public function storeApplication_storeowner(Request $request)
    {
        // Validate the form input and file upload
        $request->validate([
            'store_name' => 'required|string|max:255',
            'store_name_ar' => 'required|string|max:255',
            'contact_number' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'address_ar' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'description' => 'required|string',
            'description_ar' => 'required|string',
            'certificate_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle the certificate image upload
        if ($request->hasFile('certificate_image')) {
            $imageName = time() . '_' . $request->file('certificate_image')->getClientOriginalName();
            $request->file('certificate_image')->storeAs('certificate_images', $imageName, 'public');

            // Create a new certificate record
            $certificate = Certificate::create([
                'name' => $imageName,
                'description' => 'Certificate for Store Owner Application',
            ]);

            // Create a new store owner application
            StoreOwnerApplication::create([
                'user_id' => Auth::id(),
                'store_name' => $request->store_name,
                'store_name_ar' => $request->store_name_ar,
                'contact_number' => $request->contact_number,
                'address' => $request->address,
                'address_ar' => $request->address_ar,
                'location' => $request->location,
                'description' => $request->description,
                'description_ar' => $request->description_ar,
                'certificate_id' => $certificate->id,
                'status' => 'pending',
            ]);

            return redirect()->route('home')->with('success', 'Your store owner application has been submitted and is pending approval.');
        }

        return back()->withErrors(['certificate_image' => 'Please upload a valid certificate image.']);
    }

    public function contact()
    {
        return view('main_strc.contact');
    }

    public function storeTicket(Request $request)
    {
        // Validate the required fields
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'number' => 'required|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Determine the user ID
        $userId = Auth::check() ? Auth::id() : 29;

        // Create a new ticket
        Ticket::create([
            'user_id' => $userId,
            'subject' => $request->subject,
            'description' => $request->message,
            'status_id' => 13, // Set an initial status ID or adjust as needed
        ]);
        return redirect()->back()->with('success', 'Ticket submitted successfully.');
    }


    public function aboutUs()
    {
        $categories = Category::with('services')->get();

        return view('main_strc.about', compact('categories'));
    }

    public function terms()
    {
        return view('main_strc.tos');
    }

    public function allgigs(Request $request)
    {
        // Initial query for gigs
        $handymenQuery = Gig::with('user')->where('handyman_id', null);

        // Handle Task Date Filter
        // if ($request->has('date_filter')) {
        //     // dd($request->all());
        //     $dateFilter = $request->input('date_filter');
        //     // dd([now(), now()->addDays(3)]);
        //     switch ($dateFilter) {
        //         case 'today':
        //             // $handymenQuery->where('task_date', now()->toDateString());
        //             $handymenQuery->whereDate('task_date', now()->toDateString());


        //             break;

        //         case 'within_3_days':
        //             $handymenQuery->whereDate('task_date', [now(), now()->addDays(3)]);
        //             // dd($handymenQuery->toSql(), $handymenQuery->getBindings());

        //             break;

        //         case 'within_a_week':
        //             $handymenQuery->whereBetween('task_date', [now(), now()->addWeek()]);
        //             break;
        //     }
        // }

        // // Handle Date Range filtering
        // if ($request->has('choose_dates')) {
        //     $dates = explode(' to ', $request->input('choose_dates'));

        //     if (count($dates) === 2) {
        //         $startDate = $dates[0];
        //         $endDate = $dates[1];

        //         // Filter handymen based on the task date range
        //         $handymenQuery->whereBetween('task_date', [$startDate, $endDate]);
        //     }
        // }

        // // Handle Time of Day Filter (based on task_time)
        // if ($request->has('time_of_day')) {
        //     $timeOfDay = $request->input('time_of_day');

        //     $handymenQuery->where(function ($query) use ($timeOfDay) {
        //         foreach ($timeOfDay as $time) {
        //             switch ($time) {
        //                 case 'morning':
        //                     $query->orWhereBetween('task_time', ['08:00:00', '12:00:00']);
        //                     break;
        //                 case 'afternoon':
        //                     $query->orWhereBetween('task_time', ['12:00:00', '17:00:00']);
        //                     break;
        //                 case 'evening':
        //                     $query->orWhereBetween('task_time', ['17:00:00', '21:30:00']);
        //                     break;
        //             }
        //         }
        //     });
        // }

        // Handle Price Range Filter
        if ($request->has('price_range')) {
            $priceRange = $request->input('price_range');
            $handymenQuery->where('price', '<=', $priceRange);
        }

        // Handle Rating Filter
        if ($request->has('rating') && !empty($request->input('rating'))) {
            $rating = $request->input('rating');

            // Assuming the rating is part of the 'user' relationship
            $handymenQuery->whereHas('user', function ($query) use ($rating) {
                $query->where('rating', '>=', $rating); // Filter handymen with rating >= selected rating
            });
        }

        // Handle Skill Filter
        if ($request->has('skills')) {
            $selectedSkills = $request->input('skills');

            // Find category IDs that are linked to the selected skills
            $categoryIds = DB::table('skilltocategories')
                ->whereIn('skill_id', $selectedSkills)
                ->pluck('category_id');

            // Query gigs that belong to the matched categories
            $handymenQuery = Gig::whereIn('category_id', $categoryIds);
        }


        // Get the filtered handymen
        $handymen = $handymenQuery->get();
        // dd($handymenQuery);

        $skills = Skill::all();

        // Return the view with the filtered handymen
        return view('main_strc.allgigs', compact('handymen', 'skills'));
    }


    public function search(Request $request)
    {
        $query = $request->input('query');
        $services = Service::where('name', 'LIKE', "%{$query}%")->orWhere('name_ar', 'LIKE', "%{$query}%")->get();

        return response()->json($services);
    }
}
