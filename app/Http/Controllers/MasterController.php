<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Models\Category;
use App\Models\Store;
use App\Models\Service;
use App\Models\Handyman;
use App\Models\Notification;
use App\Models\Skill;

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
            ->groupBy('handyman_id')
            ->orderBy('gig_count', 'DESC')
            ->take(6)
            ->with(['handyman.user']) // Assuming you have the relationship between handymen and users set up
            ->get();

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

        // Apply date filters if provided
        // if ($request->has('date_filter')) {
        //     $dateFilter = $request->input('date_filter');

        //     switch ($dateFilter) {
        //         case 'today':
        //             $handymenQuery->whereDoesntHave('availability', function ($query) {
        //                 $query->whereDate('start_time', now()->toDateString());
        //             });
        //             break;

        //         case 'within_3_days':
        //             $handymenQuery->whereDoesntHave('availability', function ($query) {
        //                 $query->whereBetween('start_time', [now(), now()->addDays(3)]);
        //             });
        //             break;

        //         case 'within_a_week':
        //             $handymenQuery->whereDoesntHave('availability', function ($query) {
        //                 $query->whereBetween('start_time', [now(), now()->addWeek()]);
        //             });
        //             break;
        //     }
        // }

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
            $handymenQuery->whereHas('user', function ($query) use ($gigCount) {
                $query->where('gigs_count', '>=', $gigCount); // Filter handymen with rating >= selected rating
            });
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
        return view('main_strc.service');
    }

    public function faq()
    {
        return view('main_strc.faq');
    }

    public function contact()
    {
        return view('main_strc.contact');
    }

    public function aboutUs()
    {
        return view('main_strc.about');
    }


    public function search(Request $request)
    {
        $query = $request->input('query');
        $services = Service::where('name', 'LIKE', "%{$query}%")->orWhere('name_ar', 'LIKE', "%{$query}%")->get();

        return response()->json($services);
    }
}
