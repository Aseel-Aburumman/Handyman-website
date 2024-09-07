<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Carbon\Carbon;
use App\Models\Sale;
use App\Models\Store;
use App\Models\User;
use App\Models\Status;
use App\Models\StoreOwner;
use App\Models\Notification;
use App\Models\Report;
use App\Models\Review;





use Illuminate\Http\Request;

class StoresController extends Controller
{
    public function dashboard()
    {
        // Total stores and active stores
        $totalStores = Store::count();
        $activeStores = Store::where('status_id', 4)->count();  // Assuming '1' is the status for active stores

        // Total sales this month and revenue
        $currentMonth = Carbon::now()->startOfMonth();
        $totalMonthlySales = Sale::where('sale_date', '>=', $currentMonth)->count();
        $monthlyRevenue = Sale::where('sale_date', '>=', $currentMonth)->sum('total_amount');

        // Total sales this week and revenue
        $currentWeek = Carbon::now()->startOfWeek();
        $totalWeeklySales = Sale::where('sale_date', '>=', $currentWeek)->count();
        $weeklyRevenue = Sale::where('sale_date', '>=', $currentWeek)->sum('total_amount');

        // Total new customers this month
        $newCustomersThisMonth = User::where('created_at', '>=', $currentMonth)->count();

        // Total products
        $totalProducts = Product::count();

        // Top rated products
        $topRatedProducts = Product::orderBy('rating', 'desc')->take(5)->get();

        // Dynamic sales data for the line chart (from the database)
        $salesData = Sale::selectRaw('MONTH(sale_date) as month, COUNT(*) as sales_count')
            ->whereYear('sale_date', Carbon::now()->year)
            ->groupBy('month')
            ->orderBy('month', 'asc')
            ->get();

        // Prepare sales data for chart
        $salesMonths = [];
        $monthlySalesData = [];

        // Create arrays for the months and sales counts
        foreach (range(1, 12) as $month) {
            // Format month names for x-axis
            $salesMonths[] = Carbon::create()->month($month)->format('M');

            // Get sales count for each month (if exists), otherwise use 0
            $monthlySalesData[] = $salesData->where('month', $month)->first()->sales_count ?? 0;
        }

        return view('admin.store_control_center.dashboard', compact(
            'totalStores',
            'activeStores',
            'totalMonthlySales',
            'monthlyRevenue',
            'totalWeeklySales',
            'weeklyRevenue',
            'newCustomersThisMonth',
            'totalProducts',
            'topRatedProducts',
            'salesMonths',
            'monthlySalesData'
        ));
    }


    public function allStores(Request $request)
    {
        // Apply filters if needed (by status, store owner, location)
        $query = Store::with(['storeOwner.user', 'status'])  // Use 'storeOwner.user' to fetch user details
            ->withCount('products');  // Count number of products in the store

        if ($request->status) {
            $query->where('status_id', $request->status);
        }

        if ($request->store_owner) {
            $query->where('store_owner_id', $request->store_owner);
        }

        if ($request->location) {
            $query->where('location', 'LIKE', '%' . $request->location . '%');
        }

        $stores = $query->paginate(10);  // Paginate the results

        // Pass data to the view
        return view('admin.store_control_center.all_stores', [
            'stores' => $stores,
            'statuses' => Status::where('status_category', 'store')->get(),
            'storeOwners' => StoreOwner::all(),
        ]);
    }

    public function viewStore($id)
    {
        // Fetch the store owner user record with related data
        $store_owner = User::with([
            'storeOwner.store.sales.product', // Fetch the store and its purchases along with the product details
            'deliveryInfo' // Fetch delivery information
        ])->findOrFail($id);

        // Fetch related data
        $deliveryInfo = $store_owner->deliveryInfo;
        $store = Store::findOrFail($id);
        $storePurchases = $store ? $store->sales : collect(); // Fetch the store's purchases or return an empty collection

        return view('admin.store_control_center.view_store', compact('store_owner', 'deliveryInfo', 'store', 'storePurchases'));
    }

    public function suspendStore($id)
    {
        $store = Store::findOrFail($id);
        $store->status_id = 20;  // Assuming '2' represents the 'Suspended' status
        $store->save();

        $notification = new Notification();
        $notification->user_id = $store->storeOwner->user->id; // Assign the notification to the user
        $notification->message = 'Your Store has been supended due a TOS violation ';
        $notification->category = 'danger'; // Set the notification category as 'primary'
        $notification->is_read = 0; // Mark the notification as unread
        $notification->save();

        return redirect()->route('store_control_center.reported_stores')->with('success', 'Store has been suspended.');
    }

    public function unsuspendStore($id)
    {
        $store = Store::findOrFail($id);
        $store->status_id = 4;  // Assuming '2' represents the 'Suspended' status
        $store->save();

        $notification = new Notification();
        $notification->user_id = $store->storeOwner->user->id; // Assign the notification to the user
        $notification->message = 'Your Store has been unsupended! ';
        $notification->category = 'danger'; // Set the notification category as 'primary'
        $notification->is_read = 0; // Mark the notification as unread
        $notification->save();

        return redirect()->route('store_control_center.all_stores')->with('success', 'Store has been unsuspended.');
    }

    public function reportedStores()
    {
        $reportedStores = Report::whereNotNull('store_id')
            ->with('store.storeOwner.user', 'store.status')

            ->get();

        return view('admin.store_control_center.reported_stores', compact('reportedStores'));
    }



    public function resolveStore($storeId)
    {
        $store = Store::with('products', 'storeOwner')->findOrFail($storeId);
        $storeReport = Report::where('store_id', $storeId)->latest()->first();
        $storeReviews = Review::where('store_id', $storeId)->orderBy('created_at', 'desc')->take(15)->get();



        return view('admin.store_control_center.resolve_store', compact('store', 'storeReport', 'storeReviews'));
    }

    public function clearReportStore($storeId)
    {
        // Find the report for the store
        $storeReport = Report::where('store_id', $storeId)->first();

        if ($storeReport) {
            // Delete the report
            $storeReport->delete();

            // Redirect back with a success message
            return  redirect()->route('store_control_center.reported_stores')->with('success', 'Store report has been cleared.');
        }

        // If no report found, redirect back with an error message
        return redirect()->back()->with('error', 'No report found for this store.');
    }
}
