<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Models\Category;
use App\Models\Store;
use App\Models\Service;
use App\Models\Handyman;
use App\Models\Notification;
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
        $search = $request->input('search');

        // If there's a search query, filter the stores based on the name
        if ($search) {
            $handymans = Handyman::with('image')->where('name', 'like', '%' . $search . '%')->paginate(12);
        } else {
            // If no search query, just fetch all stores
            $handymans = Handyman::with('image')->paginate(12);
        }

        // Return view with the stores (filtered or not)
        return view('main_strc.allhandymans', compact('handymans'));
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
