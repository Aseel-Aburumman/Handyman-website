<?php

namespace App\Http\Controllers;

use App\Models\DeliveryInfo;
use App\Models\Sale;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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


    public function addToCartSmaller(Request $request)
    {
        // Get the current authenticated user
        $user = Auth::user();

        // Retrieve the cart items for this user
        $existingCartItems = ShoppingCart::where('user_id', $user->id)->get();

        // Check if the user already has items from a different store
        $differentStoreItems = $existingCartItems->where('store_id', '!=', $request->store_id);

        if ($differentStoreItems->isNotEmpty()) {
            // If the cart contains items from another store, return a response that indicates this
            return response()->json([
                'status' => 'warning',
                'message' => 'Your cart contains items from another store. Do you want to clear your cart and add this item?',
            ]);
        }

        // Otherwise, add the product to the cart
        ShoppingCart::create([
            'user_id' => $user->id,
            'product_id' => $request->product_id,
            'store_id' => $request->store_id,
            'quantity' => 1,
        ]);

        return response()->json(['status' => 'success', 'message' => 'Item added to cart']);
    }

    public function clearCart(Request $request)
    {
        // Clear the cart for the current user
        ShoppingCart::where('user_id', Auth::id())->delete();

        return response()->json(['status' => 'success', 'message' => 'Cart cleared']);
    }




    public function getCart()
    {
        $userId = Auth::id();

        // Get all shopping cart items for the logged-in user
        $shoppingCarts = ShoppingCart::with('product')->where('user_id', $userId)->get();

        // Calculate the total amount for the cart
        $totalCartAmount = $shoppingCarts->sum(function ($cartItem) {
            return $cartItem->product->price * $cartItem->quantity;
        });

        // Pass the shopping cart items and total cart amount to the view
        return view('shops.cart', compact('shoppingCarts', 'totalCartAmount'));
    }

    public function updateCart(Request $request)
    {
        $userId = Auth::id();
        $productId = $request->productId;
        $quantity = $request->quantity;

        // Find the shopping cart item
        $cartItem = ShoppingCart::where('user_id', $userId)
            ->where('product_id', $productId)
            ->first();

        if ($cartItem) {
            // Update quantity
            $cartItem->quantity = $quantity;
            $cartItem->save();

            // Recalculate the total for the item
            $newTotal = $cartItem->product->price * $cartItem->quantity;

            // Recalculate the overall cart total
            $cartTotal = ShoppingCart::where('user_id', $userId)
                ->with('product')
                ->get()
                ->sum(function ($item) {
                    return $item->product->price * $item->quantity;
                });

            return response()->json([
                'newTotal' => $newTotal,
                'cartTotal' => $cartTotal

            ]);
        }

        return response()->json(['error' => 'Cart item not found'], 404);
    }


    public function removeFromCart(Request $request)
    {
        $userId = Auth::id();
        $productId = $request->productId;

        // Find the shopping cart item
        $cartItem = ShoppingCart::where('user_id', $userId)
            ->where('product_id', $productId)
            ->first();

        if ($cartItem) {
            $cartItem->delete();

            // Recalculate the overall cart total
            $cartTotal = ShoppingCart::where('user_id', $userId)
                ->with('product')
                ->get()
                ->sum(function ($item) {
                    return $item->product->price * $item->quantity;
                });

            return response()->json([
                'cartTotal' => $cartTotal
            ]);
        }

        return response()->json(['error' => 'Cart item not found'], 404);
    }


    public function checkout()
    {
        $userId = Auth::id();

        // Get delivery information for the current user
        $deliveryInfo = DeliveryInfo::where('user_id', $userId)->first();

        // Get all items in the shopping cart for the current user
        $shoppingCartItems = ShoppingCart::with('product')->where('user_id', $userId)->get();

        // Calculate subtotal
        $subtotal = $shoppingCartItems->sum(function ($item) {
            return $item->product->price * $item->quantity;
        });

        return view('shops.checkout', compact('deliveryInfo', 'shoppingCartItems', 'subtotal'));
    }

    public function saveDeliveryInfo(Request $request)
    {
        $userId = Auth::id();

        // Find or create delivery info for the user
        $deliveryInfo = DeliveryInfo::updateOrCreate(
            ['user_id' => $userId],
            [
                'building_no' => $request->input('building_no'),
                'city' => $request->input('city'),
                'location' => $request->input('location'),
                'phone' => $request->input('phone')
            ]
        );

        return back()->with('success', 'Delivery info saved successfully!');
    }

    // public function placeOrder(Request $request)
    // {
    //     $userId = Auth::id();

    //     // Get shopping cart items
    //     $shoppingCartItems = ShoppingCart::with('product')->where('user_id', $userId)->get();

    //     DB::transaction(function () use ($shoppingCartItems, $userId) {
    //         foreach ($shoppingCartItems as $item) {
    //             // Insert into the sales table
    //             Sale::create([
    //                 'store_id' => $item->store_id,
    //                 'product_id' => $item->product_id,
    //                 'user_id' => $userId,
    //                 'quantity_sold' => $item->quantity,
    //                 'total_amount' => $item->product->price * $item->quantity,
    //                 'sale_date' => now(),
    //                 'status_id' => 16 // Pending status, you can adjust it as necessary
    //             ]);

    //             // Remove from the shopping cart
    //             $item->delete();
    //         }
    //     });

    //     return redirect()->route('home')->with('success', 'Order placed successfully!');
    // }

    public function placeOrder(Request $request)
    {
        $userId = Auth::id();
        $userRole = Auth::user()->role_id;

        // Get shopping cart items
        $shoppingCartItems = ShoppingCart::with('product')->where('user_id', $userId)->get();

        DB::transaction(function () use ($shoppingCartItems, $userId) {
            foreach ($shoppingCartItems as $item) {
                // Insert into the sales table
                Sale::create([
                    'store_id' => $item->store_id,
                    'product_id' => $item->product_id,
                    'user_id' => $userId,
                    'quantity_sold' => $item->quantity,
                    'total_amount' => $item->product->price * $item->quantity,
                    'sale_date' => now(),
                    'status_id' => 16, // Pending status
                ]);

                // Remove from the shopping cart
                $item->delete();
            }
        });

        // Flash success message and role to the session
        if (Auth::user()->role_id == 3) {
            return redirect()->route('storeowner.dashboard')->with('success', 'Order placed successfully!');
        } elseif (Auth::user()->role_id == 2) {
            return redirect()->route('customer.dashboard')->with('success', 'Order placed successfully!');
        } elseif (Auth::user()->role_id == 4) {
            return redirect()->route('handyman.dashboard')->with('success', 'Order placed successfully!');
        }
    }
}
