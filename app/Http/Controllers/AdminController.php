<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Carbon\Carbon;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;
use App\Models\Message;
use App\Models\Gig;
use App\Models\Sale;
use App\Models\User;
use App\Models\Product;


use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        // $user_id = Auth::id();
        $user_id = 1;

        // $notifications = Notification::where('user_id', $user_id)
        //     ->orderBy('created_at', 'desc')
        //     ->get();

        // $messages = Message::where('receiver_id', $user_id)
        //     ->with('sender') // Eager load the sender
        //     ->orderBy('created_at', 'desc')
        //     ->get();




        $currentWeek = Carbon::now()->startOfWeek();
        $lastWeek = Carbon::now()->subWeek()->startOfWeek();

        // Calculate transactions for current week

        $currentWeekSales = Sale::where('sale_date', '>=', $currentWeek)->count();
        $currentWeekTransactions =  $currentWeekSales;

        // Calculate transactions for last week
        $lastWeekSales = Sale::where('sale_date', '>=', $lastWeek)->where('sale_date', '<', $currentWeek)->count();
        $lastWeekTransactions =  +$lastWeekSales;

        // Calculate percentage change
        if ($lastWeekTransactions == 0) {
            $percentageChange = $currentWeekTransactions > 0 ? 100 : 0;
        } else {
            $percentageChange = (($currentWeekTransactions - $lastWeekTransactions) / $lastWeekTransactions) * 100;
        }


        // Get the start of the current month and last month
        $currentMonth = Carbon::now()->startOfMonth();
        $lastMonth = Carbon::now()->subMonth()->startOfMonth();

        // Calculate revenue for the current month
        $currentMonthSalesRevenue = Sale::where('sale_date', '>=', $currentMonth)->sum('total_amount');
        $currentMonthGigsRevenue = Gig::where('created_at', '>=', $currentMonth)->sum('price');
        $currentMonthRevenue = $currentMonthSalesRevenue + $currentMonthGigsRevenue;

        // Calculate revenue for the last month
        $lastMonthSalesRevenue = Sale::where('sale_date', '>=', $lastMonth)->where('sale_date', '<', $currentMonth)->sum('total_amount');
        $lastMonthGigsRevenue = Gig::where('created_at', '>=', $lastMonth)->where('created_at', '<', $currentMonth)->sum('price');
        $lastMonthRevenue = $lastMonthSalesRevenue + $lastMonthGigsRevenue;

        // Calculate percentage change
        if ($lastMonthRevenue == 0) {
            $percentageChange = $currentMonthRevenue > 0 ? 100 : 0;
        } else {
            $percentageChange = (($currentMonthRevenue - $lastMonthRevenue) / $lastMonthRevenue) * 100;
        }


        // Get the start of the current year and last year
        $currentYear = Carbon::now()->startOfYear();
        $lastYear = Carbon::now()->subYear()->startOfYear();

        // Calculate the number of users registered in the current year
        $currentYearUsers = User::where('created_at', '>=', $currentYear)->count();

        // Calculate the number of users registered in the last year
        $lastYearUsers = User::where('created_at', '>=', $lastYear)->where('created_at', '<', $currentYear)->count();

        // Calculate percentage change
        if ($lastYearUsers == 0) {
            $percentageChange = $currentYearUsers > 0 ? 100 : 0;
        } else {
            $percentageChange = (($currentYearUsers - $lastYearUsers) / $lastYearUsers) * 100;
        }

        $startOfMonth = Carbon::now()->startOfMonth();
        $endOfMonth = Carbon::now()->endOfMonth();

        // Get daily count of gigs for the current month
        $gigsPerDay = Gig::whereBetween('created_at', [$startOfMonth, $endOfMonth])
            ->selectRaw('DATE(created_at) as date, COUNT(*) as count')
            ->groupBy('date')
            ->pluck('count', 'date');

        // Get daily count of sales for the current month
        $salesPerDay = Sale::whereBetween('created_at', [$startOfMonth, $endOfMonth])
            ->selectRaw('DATE(created_at) as date, COUNT(*) as count')
            ->groupBy('date')
            ->pluck('count', 'date');

        // Get daily count of new users for the current month
        $usersPerDay = User::whereBetween('created_at', [$startOfMonth, $endOfMonth])
            ->selectRaw('DATE(created_at) as date, COUNT(*) as count')
            ->groupBy('date')
            ->pluck('count', 'date');

        // Format the data for the chart
        $dates = [];
        $gigsData = [];
        $salesData = [];
        $usersData = [];

        foreach ($startOfMonth->daysUntil($endOfMonth) as $date) {
            $formattedDate = $date->format('Y-m-d');
            $dates[] = $formattedDate;
            $gigsData[] = $gigsPerDay->get($formattedDate, 0);
            $salesData[] = $salesPerDay->get($formattedDate, 0);
            $usersData[] = $usersPerDay->get($formattedDate, 0);
        }



        $startOfWeek = Carbon::now()->startOfWeek();
        $endOfWeek = Carbon::now()->endOfWeek();

        $recentSales = Sale::whereBetween('sale_date', [$startOfWeek, $endOfWeek])
            ->orderBy('sale_date', 'desc')
            ->get();
        // $sales = DB::table('sales')
        //     ->whereBetween('sale_date', [$startOfWeek, $endOfWeek])
        //     ->get();
        // dd($sales);
        $topSellingProducts = Sale::select('product_id', DB::raw('SUM(quantity_sold) as total_sold'), DB::raw('SUM(total_amount) as total_revenue'))
            ->whereBetween('sale_date', [$startOfMonth, $endOfMonth])
            ->groupBy('product_id')
            ->orderByDesc('total_sold')
            ->take(5)
            ->get();

        // Get the product details
        $products = Product::whereIn('id', $topSellingProducts->pluck('product_id'))->get()->keyBy('id');




        return view('admin.dashboard', compact('topSellingProducts', 'products', 'recentSales', 'dates', 'gigsData', 'salesData', 'usersData', 'currentYearUsers', 'percentageChange', 'currentMonthRevenue', 'percentageChange',  'currentWeekTransactions', 'percentageChange'));
    }

    public function navbar()
    {



        // $user_id = Auth::id();
        $user_id = 1;

        $notifications = Notification::where('user_id', $user_id)
            ->orderBy('created_at', 'desc')
            ->get();

        $messages = Message::where('receiver_id', $user_id)
            ->with('sender') // Eager load the sender
            ->orderBy('created_at', 'desc')
            ->get();


        return view('admin.dashboard', compact('notifications', 'messages'));
    }

    public function notification()
    {
        // $user_id = Auth::id();
        $user_id = 1;

        Notification::where('user_id', $user_id)
            ->where('is_read', 0)
            ->update(['is_read' => 1]);


        $notifications = Notification::where('user_id', $user_id)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('admin.notification', compact('notifications'));
    }


    public function showCustomers()
    {
        // Fetch users with role_id = 2
        $users = User::where('role_id', 2)->get();

        // Pass the users to the view
        return view('admin.manage_customers', compact('users'));
    }
}
