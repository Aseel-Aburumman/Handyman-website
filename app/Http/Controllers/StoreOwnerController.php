<?php

namespace App\Http\Controllers;


use App\Models\Sale;
use Carbon\Carbon;
use App\Models\Category;
use App\Models\Store;
use App\Models\Product;
use App\Models\User;
use App\Models\DeliveryInfo;
use App\Models\Image;

use App\Models\StoreOwner;
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

    public function dashboard(Request $request)
    {
        $userId = Auth::id();
        $user = User::with('delivery_info')->find($userId); // Get the currently authenticated user
        $user = User::with('delivery_info')->where('id', $userId)->first(); // Get the authenticated user with delivery_info
        $delivery = DeliveryInfo::where('id', $userId)->first();
        $categories = Category::with('services')->get(); // Assuming you have a relationship set up

        $admin = User::where('id', 1)->first();

        $storeowner = StoreOwner::where('user_id', $userId)->first();
        $store = Store::where('store_owner_id', $storeowner->id)->first();
        $products = Product::where('store_id', $store->id)
            ->with('image')
            ->paginate(12); // 12 products per page
        // dd($storeowner);
        // Fetch sales for the store, grouped by sale date and user
        $sales = Sale::where('store_id', $store->id)
            ->with(['product', 'user', 'status']) // Fetch related product, user, and status
            ->orderBy('sale_date', 'desc')
            ->get()
            ->groupBy(function ($sale) {
                return $sale->sale_date . '-' . $sale->user_id; // Group by both sale date and user
            });


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
                'store_name' => 'required|string|max:255',
                'store_name_ar' => 'required|string|max:255',
                'address' => 'required|string|max:255',
                'address_ar' => 'required|string|max:255',
                'contact_number' => 'required|string|max:255',
                'location_sotre' => 'required|string|max:255',
                'description' => 'required|string|max:255',
                'description_ar' => 'required|string|max:255',

                // 'certificate_id' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate image upload
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

            $storeowner->store_name = $request->store_name;
            $storeowner->store_name_ar = $request->store_name_ar;
            $storeowner->address = $request->address;
            $storeowner->address_ar = $request->address_ar;
            $storeowner->contact_number = $request->contact_number;

            $store->name = $request->store_name;
            $store->name_ar = $request->store_name_ar;
            $store->location = $request->location_sotre;
            $store->description = $request->description;
            $store->description_ar = $request->description_ar;




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
        return view('shops.dashboard', compact('admin', 'categories', 'user',  'storeowner', 'store', 'products', 'sales'));
    }

    public function updateSaleStatus(Request $request, $saleId)
    {
        $sale = Sale::findOrFail($saleId);

        // Update the status based on the request
        $sale->status_id = $request->status_id;
        $sale->save();

        return redirect()->back()->with('status', 'Sale status updated successfully!');
    }

    public function storeProduct(Request $request)
    {
        $userId = Auth::id();
        $storeowner = StoreOwner::where('user_id', $userId)->first();
        $store = Store::where('store_owner_id', $storeowner->id)->first();

        // Validation
        $request->validate([
            'name' => 'required|string|max:255',
            'name_ar' => 'required|string|max:255',
            'description' => 'required|string',
            'description_ar' => 'required|string',
            'price' => 'required|numeric',
            'stock_quantity' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048'
        ]);

        // Create a new product
        $product = Product::create([
            'store_id' => $store->id,
            'name' => $request->name,
            'name_ar' => $request->name_ar,
            'description' => $request->description,
            'description_ar' => $request->description_ar,
            'price' => $request->price,
            'stock_quantity' => $request->stock_quantity,
            'rating' => 0,

        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/products', $imageName);

            // Save image in the `images` table
            Image::create([
                'product_id' => $product->id,
                'name' => $imageName,
            ]);
        }

        return redirect()->route('storeowner.dashboard')->with('status', 'Product added successfully!');
    }

    // Delete a product
    public function destroyProduct($id)
    {
        $product = Product::findOrFail($id);

        // Delete associated image
        if ($product->image) {
            Storage::delete('public/products/' . $product->image->name);
            $product->image->delete();
        }

        $product->delete();

        return redirect()->route('storeowner.dashboard')->with('status', 'Product deleted successfully!');
    }


    public function editProduct($id)
    {
        $product = Product::findOrFail($id);

        return response()->json($product);
    }

    // Update an existing product (Edit)
    public function updateProduct(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        // Validation
        $request->validate([
            'name' => 'required|string|max:255',
            'name_ar' => 'required|string|max:255',
            'description' => 'required|string',
            'description_ar' => 'required|string',
            'price' => 'required|numeric',
            'stock_quantity' => 'required|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048'
        ]);

        // Update product details
        $product->update([
            'name' => $request->name,
            'name_ar' => $request->name_ar,
            'description' => $request->description,
            'description_ar' => $request->description_ar,
            'price' => $request->price,
            'stock_quantity' => $request->stock_quantity,

        ]);

        // Handle image upload (optional)
        if ($request->hasFile('image')) {
            // Delete old image
            if ($product->image) {
                Storage::delete('public/product_images/' . $product->image->name);
                $product->image->delete();
            }

            // Store new image
            $imageName = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/product_images', $imageName);

            // Save new image
            Image::create([
                'product_id' => $product->id,
                'name' => $imageName,
            ]);
        }

        return redirect()->route('storeowner.dashboard')->with('status', 'Product updated successfully!');
    }
}
