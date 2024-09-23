<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Models\Category;
use App\Models\Store;
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


    public function service()
    {
        return view('main_strc.service');
    }

    public function aboutUs()
    {
        return view('main_strc.about');
    }
}
