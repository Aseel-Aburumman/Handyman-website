<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\DB;

use Carbon\Carbon;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;
use App\Models\Message;
use App\Models\Gig;
use App\Models\Sale;
use App\Models\User;
use App\Models\Product;
use App\Models\DeliveryInfo;


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


    public function showCustomers(Request $request)
    {
        $search = $request->input('search');

        $users = User::where('role_id', 2) // Assuming role_id 2 is for customers
            ->when($search, function ($query, $search) {
                return $query->where('name', 'like', '%' . $search . '%');
            })
            ->get();

        return view('admin.manage_customers', compact('users'));
    }


    public function editCustomer($id)
    {
        $customer = User::findOrFail($id);
        $deliveryInfo = DeliveryInfo::where('user_id', $id)->first();

        return view('admin.edit_customer', compact('customer', 'deliveryInfo'));
    }

    public function updateCustomer(Request $request, $id)
    {
        $customer = User::findOrFail($id);

        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'nullable|string|max:20',
            'image' => 'nullable|image',
            'location' => 'nullable|string|max:255',
            'building_no' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if exists and it's not the default
            if ($customer->image && $customer->image !== 'default.png') {
                Storage::delete('/user_images/' . $customer->image);
            }

            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('user_images'), $imageName);
            $customer->image = $imageName;
        }

        // Update customer information
        $customer->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'image' => $customer->image, // Save the image name in the database
        ]);

        // Update or create delivery info
        DeliveryInfo::updateOrCreate(
            ['user_id' => $customer->id],
            [
                'phone' => $request->input('phone'),
                'location' => $request->input('location'),
                'building_no' => $request->input('building_no'),
                'city' => $request->input('city'),
            ]
        );

        return redirect()->route('admin.manage_customers')->with('success', 'Customer information updated successfully.');
    }


    public function deleteCustomer($id)
    {
        $customer = User::findOrFail($id);

        // Optionally, delete any associated records
        DeliveryInfo::where('user_id', $id)->delete();

        // Delete the customer
        $customer->delete();

        return redirect()->route('admin.manage_customers')->with('success', 'Customer deleted successfully.');
    }

    public function viewCustomer($id)
    {
        $customer = User::with('purchases.product', 'gigs')->findOrFail($id);
        $deliveryInfo = DeliveryInfo::where('user_id', $id)->first();

        return view('admin.view_customer', compact('customer', 'deliveryInfo'));
    }

    public function showHandymans(Request $request)
    {
        $search = $request->input('search');

        $users = User::where('role_id', 4)
            ->when($search, function ($query, $search) {
                return $query->where('name', 'like', '%' . $search . '%');
            })
            ->get();

        return view('admin.manage_handymans', compact('users'));
    }


    public function editHandyman($id)
    {
        $handyman = User::findOrFail($id);
        $deliveryInfo = DeliveryInfo::where('user_id', $id)->first();

        return view('admin.edit_handyman', compact('handyman', 'deliveryInfo'));
    }

    public function updateHandyman(Request $request, $id)
    {
        $handyman = User::findOrFail($id);

        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'nullable|string|max:20',
            'image' => 'nullable|image',
            'location' => 'nullable|string|max:255',
            'building_no' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if exists and it's not the default
            if ($handyman->image && $handyman->image !== 'default.png') {
                Storage::delete('/user_images/' . $handyman->image);
            }

            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('user_images'), $imageName);
            $handyman->image = $imageName;
        }

        // Update customer information
        $handyman->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'image' => $handyman->image, // Save the image name in the database
        ]);

        // Update or create delivery info
        DeliveryInfo::updateOrCreate(
            ['user_id' => $handyman->id],
            [
                'phone' => $request->input('phone'),
                'location' => $request->input('location'),
                'building_no' => $request->input('building_no'),
                'city' => $request->input('city'),
            ]
        );

        return redirect()->route('admin.manage_handymans')->with('success', 'handyman information updated successfully.');
    }


    public function deleteHandyman($id)
    {
        $handyman = User::findOrFail($id);

        // Optionally, delete any associated records
        DeliveryInfo::where('user_id', $id)->delete();

        // Delete the customer
        $handyman->delete();

        return redirect()->route('admin.manage_handymans')->with('success', 'handyman deleted successfully.');
    }

    public function viewHandyman($id)
    {
        $handyman = User::with('purchases.product', 'gigs')->findOrFail($id);
        $deliveryInfo = DeliveryInfo::where('user_id', $id)->first();

        return view('admin.view_handyman', compact('handyman', 'deliveryInfo'));
    }
}
