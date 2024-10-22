<?php

namespace App\Http\Controllers;


use App\Models\Sale;
use Carbon\Carbon;
use App\Models\Category;
use App\Models\Gig;
use App\Models\User;
use App\Models\DeliveryInfo;
 

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

 use Illuminate\Http\Request;

class StoreOwnerController extends Controller
{
    public function index()
    {
        $customerCount = Sale::distinct('user_id')->count('user_id');

        // Number of total transactions
        $transactionCount = Sale::count();

        // Total quantity ordered
        $totalQuantityOrdered = Sale::sum('quantity_sold');

        // Top customer by total amount ordered
        $topCustomer = Sale::with('user')
            ->selectRaw('user_id, SUM(total_amount) as total_spent')
            ->groupBy('user_id')
            ->orderByDesc('total_spent')
            ->first()
            ->user->name ?? 'N/A';

        // Customers to Target: Customers with the most number of orders
        $customersToTarget = Sale::with('user')
            ->selectRaw('user_id, COUNT(*) as order_count')
            ->groupBy('user_id')
            ->orderByDesc('order_count')
            ->take(5)
            ->get()
            ->pluck('order_count', 'user.name');

        // Customers with last purchase date and days since last purchase
        $customersWithLastPurchase = Sale::with('user')
            ->selectRaw('user_id, MAX(sale_date) as last_purchase_date')
            ->groupBy('user_id')
            ->orderByDesc('last_purchase_date')
            ->get()
            ->map(function ($sale) {
                return [
                    'name' => $sale->user->name ?? 'Unknown',
                    'last_purchase_date' => Carbon::parse($sale->last_purchase_date)->format('d-m-Y'),
                    'days_since_last_purchase' => Carbon::parse($sale->last_purchase_date)->diffInDays(now()),
                ];
            });

        // Trend by Customer Visits & Quantity Ordered (Group by Month)
        $salesByMonth = Sale::selectRaw('MONTH(sale_date) as month, SUM(quantity_sold) as total_quantity')
            ->groupBy('month')
            ->get();
        $months = $salesByMonth->pluck('month')->map(function ($month) {
            return Carbon::createFromDate(null, $month, 1)->format('F');
        });
        $quantities = $salesByMonth->pluck('total_quantity');

        return view('shops.index', compact(
            'customerCount',
            'transactionCount',
            'totalQuantityOrdered',
            'topCustomer',
            'customersToTarget',
            'customersWithLastPurchase',
            'months',
            'quantities'
        ));
    }

    public function dashboard(Request $request){
        $userId = Auth::id();
        $user = User::with('delivery_info')->find($userId); // Get the currently authenticated user
        $user = User::with('delivery_info')->where('id', $userId)->first(); // Get the authenticated user with delivery_info
        $delivery = DeliveryInfo::where('id', $userId)->first();
        $categories = Category::with('services')->get(); // Assuming you have a relationship set up
        $gigs = Gig::where('user_id', $userId)->with('handyman', 'status')->get();
        $firstgigs = Gig::where('user_id', $userId)->first();
        // dd($firstgigs->handyman->user->id);
        // Fetch sales data for the user, grouped by sale_date
        $sales = Sale::where('user_id', $userId)
            ->with(['store', 'product', 'status']) // Load related store, product, and status
            ->orderBy('sale_date', 'desc')
            ->get()
            ->groupBy('sale_date'); // Group by the sale date

        if ($request->isMethod('post')) {
            // Validate the form data
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'required|string|max:20',
                'city' => 'required|string|max:255',
                'building_no' => 'required|string|max:255',

                'location' => 'required|string|max:255',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate image upload
            ]);
            // dd($request);
            // Update user information
            $user->name = $request->name;
            $user->email = $request->email;

            if (!$delivery) {
                $delivery = new DeliveryInfo();
                $delivery->user_id = $userId; // Assuming you have a user_id in DeliveryInfo
            }

            $delivery->building_no = $request->building_no;

            $delivery->phone = $request->phone;
            $delivery->city = $request->city;
            $delivery->location = $request->location;

            // Handle profile picture upload
            if ($request->hasFile('image')) {
                // Delete old image if exists
                if ($user->image && Storage::exists('public/profile_images/' . $user->image)) {
                    Storage::delete('public/profile_images/' . $user->image);
                }

                // Store new image
                $imageName = time() . '.' . $request->image->extension();
                $request->image->storeAs('public/profile_images', $imageName);

                // Save image name to the database
                $user->image = $imageName;
            }

            $user->save();
            $delivery->save();
            return redirect()->route('storeowner.dashboard')->with('status', 'Profile updated successfully!');
        }
        return view('shops.dashboard', compact('categories', 'gigs', 'user', 'sales', 'firstgigs'));
    }
}
