<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Gig;
use App\Models\User;
use App\Models\DeliveryInfo;
use App\Models\Sale;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function index()
    {
        $user = Auth::user();

        $categories = Category::with('services')->get(); // Assuming you have a relationship set up

        return view('customers.index', compact('categories', 'user'));
    }

    // public function dashboard(Request $request)
    // {
    //     $userId = Auth::id();
    //     $user = Auth::user(); // Get the currently authenticated user

    //     $categories = Category::with('services')->get(); // Assuming you have a relationship set up
    //     $gigs = Gig::where('user_id', $userId)->with('handyman', 'status')->get();



    //     if ($request) {
    //         $user = User::find($userId);

    //         // Validate the form data
    //         $request->validate([
    //             'name' => 'required|string|max:255',
    //             'email' => 'required|email|max:255',
    //             'phone' => 'required|string|max:20',
    //             'city' => 'required|string|max:255',
    //             'location' => 'required|string|max:255',
    //             'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate image upload
    //         ]);

    //         // Update user information
    //         $user->name = $request->name;
    //         $user->email = $request->email;
    //         $user->phone = $request->phone;
    //         $user->city = $request->city;
    //         $user->location = $request->location;

    //         // Handle profile picture upload
    //         if ($request->hasFile('image')) {
    //             // Delete old image if exists
    //             if ($user->image && Storage::exists('public/profile_images/' . $user->image)) {
    //                 Storage::delete('public/profile_images/' . $user->image);
    //             }

    //             // Store new image
    //             $imageName = time() . '.' . $request->image->extension();
    //             $request->image->storeAs('public/profile_images', $imageName);

    //             // Save image name to the database
    //             $user->image = $imageName;
    //         }

    //         $user->save();

    //         return response()->json([
    //             'status' => 'success',
    //             'message' => 'Profile updated successfully!'
    //         ]);
    //     }



    //     return view('customers.dashboard', compact('categories', 'gigs', 'user'));
    // }

    public function dashboard(Request $request)
    {
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
            return redirect()->route('customer.dashboard')->with('status', 'Profile updated successfully!');
        }

        return view('customers.dashboard', compact('categories', 'gigs', 'user', 'sales', 'firstgigs'));
    }



    // public function updateProfile(Request $request)
    // {
    //     $userId = Auth::id();
    //     $user = User::findorfall($userId);

    //     // Validate the form data
    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|email|max:255',
    //         'phone' => 'required|string|max:20',
    //         'city' => 'required|string|max:255',
    //         'location' => 'required|string|max:255',
    //         'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate image upload
    //     ]);

    //     // Update user information
    //     $user->name = $request->name;
    //     $user->email = $request->email;
    //     $user->phone = $request->phone;
    //     $user->city = $request->city;
    //     $user->location = $request->location;

    //     // Handle profile picture upload
    //     if ($request->hasFile('image')) {
    //         // Delete old image if exists
    //         if ($user->image && Storage::exists('public/profile_images/' . $user->image)) {
    //             Storage::delete('public/profile_images/' . $user->image);
    //         }

    //         // Store new image
    //         $imageName = time() . '.' . $request->image->extension();
    //         $request->image->storeAs('public/profile_images', $imageName);

    //         // Save image name to the database
    //         $user->image = $imageName;
    //     }

    //     $user->save();

    //     return response()->json([
    //         'status' => 'success',
    //         'message' => 'Profile updated successfully!'
    //     ]);
    // }
}
