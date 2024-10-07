<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use App\Models\Store;
use App\Models\Product;
use App\Models\Review;
use App\Models\ShoppingCart;

use Illuminate\Http\Request;

class ShopsController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        // If there's a search query, filter the stores based on the name
        if ($search) {
            $stores = Store::with('image')->where('name', 'like', '%' . $search . '%')->paginate(12);
        } else {
            // If no search query, just fetch all stores
            $stores = Store::with('image')->paginate(12);
        }

        // Return view with the stores (filtered or not)
        return view('shops.allshops', compact('stores'));
    }

    public function indexProducts(Request $request)
    {
        $search = $request->input('search');

        // If there's a search query, filter the stores based on the name
        if ($search) {
            $products = Product::with('image')->where('name', 'like', '%' . $search . '%')->paginate(12);
        } else {
            // If no search query, just fetch all stores
            $products = Product::with('image')->paginate(12);
        }

        // Return view with the stores (filtered or not)
        return view('shops.allproducts', compact('products'));
    }


    public function getOne(Request $request, $shopId)
    {
        $store = Store::findOrFail($shopId);

        // Count the number of reviews for this store
        $reviewCount = $store->reviews()->count();

        // Sum the total sales for this store
        $totalSales = $store->sales()->sum('quantity_sold'); // or 'total_amount' if you prefer to sum the amount

        $search = $request->input('search');

        if ($search) {
            // If there's a search query, filter the products by store ID and name
            $products = $store->products()->with('image')->where('name', 'like', '%' . $search . '%')->paginate(12);
        } else {
            // If no search query, fetch all products for this store
            $products = $store->products()->with('image')->paginate(12);
        }
        return view('shops.shop_detail', compact('store', 'products', 'reviewCount', 'totalSales'));
    }


    public function getOneproduct($productId)
    {
        $userId = auth()->id();
        // $userId = 2;

        $product = Product::findOrFail($productId);
        $reviewCount = $product->reviews()->count();

        $allreviews = $product->reviews()->get();

        $relatedProducts = Product::where('store_id', $product->store_id)
            ->where('id', '!=', $productId) // Exclude the current product
            ->get();
        return view('shops.product_detail', compact('product', 'reviewCount', 'allreviews', 'userId', 'relatedProducts'));
    }

    public function storeReview(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'review' => 'required|string|max:255',
            'product_id' => 'required|integer',
            'store_id' => 'required|integer',


        ]);

        // Create a new review
        $review = new Review();
        $review->user_id = Auth::id(); // Assuming the user is logged in
        // $review->user_id = 2; // Assuming the user is logged in

        $review->handyman_id = null; // Or set this based on the context (e.g., handyman, store, product, etc.)
        $review->store_id = $request->input('store_id'); // Set this depending on what you're reviewing
        $review->product_id = $request->input('product_id'); // Set this if you're reviewing a product
        $review->client_id = null; // Set this if you're reviewing a client
        $review->review = $request->input('review');
        $review->rating = $request->input('rating');

        // Save the review to the database
        $review->save();

        // Redirect or return a response
        return redirect()->back()->with('success', 'Review added successfully!');
    }


    public function addToCart(Request $request)
    {
        $userId = Auth::id();
        // $userId = 2; // Get the authenticated user's ID
        // Get the authenticated user's ID

        // Get the store_id of the new product
        $newStoreId = $request->input('store_id');

        // Check if the user already has items in their cart from another store
        $existingCartItem = ShoppingCart::where('user_id', $userId)
            ->where('store_id', '!=', $newStoreId)
            ->first();

        // If there is an item from another store, ask for confirmation
        if ($existingCartItem) {
            return response()->json([
                'status' => 'error',
                'message' => 'You already have items from another store in your cart. Do you want to start fresh?'
            ], 400);
        }

        $cartItem = new ShoppingCart();
        $cartItem->user_id = Auth::id(); // Assuming the user is logged in
        // $cartItem->user_id = 2; // Assuming the user is logged in
        $cartItem->product_id = $request->input('product_id');
        $cartItem->store_id = $newStoreId;
        $cartItem->quantity = $request->input('quantity', 1);


        $cartItem->save();


        return response()->json([
            'status' => 'success',
            'message' => 'Product added to cart successfully!',
            'cartItem' => $cartItem,
        ]);
    }

    // Method to reset the cart if user confirms they want to start fresh
    public function resetCartAndAdd(Request $request)
    {
        $userId = Auth::id();
        // $userId = 2; // Get the authenticated user's ID
        // Get the authenticated user's ID

        // Delete all the existing cart items for this user
        ShoppingCart::where('user_id', $userId)->delete();

        // Now add the new item to the cart
        $cartItem = ShoppingCart::create([
            'user_id' => $userId,
            'product_id' => $request->input('product_id'),
            'store_id' => $request->input('store_id'),
            'quantity' => $request->input('quantity', 1),
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Cart cleared and product added successfully!',
            'cartItem' => $cartItem,
        ]);
    }
}
