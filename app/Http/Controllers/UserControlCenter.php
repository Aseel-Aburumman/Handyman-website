<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\DB;

use Carbon\Carbon;
use App\Models\Notification;
use App\Models\StoreOwner;

use Illuminate\Support\Facades\Auth;
use App\Models\Message;
use App\Models\Gig;
use App\Models\Sale;
use App\Models\User;
use App\Models\Product;
use App\Models\DeliveryInfo;
use App\Models\Store;
use App\Models\Ticket;
use App\Models\Status;
use App\Models\Handyman;
use Illuminate\Http\Request;

class UserControlCenter extends Controller
{
    public function showCustomers(Request $request)
    {
        $search = $request->input('search');

        $users = User::where('role_id', 2) // Assuming role_id 2 is for customers
            ->when($search, function ($query, $search) {
                return $query->where('name', 'like', '%' . $search . '%');
            })
            ->get();

        return view('admin.customers.manage_customers', compact('users'));
    }


    public function editCustomer($id)
    {
        $customer = User::findOrFail($id);
        $deliveryInfo = DeliveryInfo::where('user_id', $id)->first();

        return view('admin.customers.edit_customer', compact('customer', 'deliveryInfo'));
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

        return view('admin.customers.view_customer', compact('customer', 'deliveryInfo'));
    }

    public function createCustomer()
    {
        return view('admin.customers.create_customer');
    }


    public function storeCustomer(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'phone' => 'nullable|string|max:20',
        ]);



        // Create the customer
        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'role_id' => 2, // Assuming role_id 2 is for customers
            'date_created' => now(), // Set the current timestamp

        ]);



        return redirect()->route('admin.manage_customers')->with('success', 'Customer created successfully.');
    }

    public function showHandymans(Request $request)
    {
        $search = $request->input('search');

        $users = User::where('role_id', 4)
            ->when($search, function ($query, $search) {
                return $query->where('name', 'like', '%' . $search . '%');
            })
            ->get();

        return view('admin.handymans.manage_handymans', compact('users'));
    }


    public function editHandyman($id)
    {
        $handyman = User::with('handyman')->findOrFail($id);
        $deliveryInfo = DeliveryInfo::where('user_id', $id)->first();

        return view('admin.handymans.edit_handyman', compact('handyman', 'deliveryInfo'));
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
            'experience' => 'nullable|integer',
            'bio' => 'nullable|string|max:255',
            'store_location' => 'nullable|string|max:255',
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

        // Update Handyman information in the `users` table
        $handyman->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'image' => $handyman->image, // Save the image name in the database
        ]);

        // Update or create handyman-specific information in the `handymans` table
        Handyman::updateOrCreate(
            ['user_id' => $handyman->id],
            [
                'experience' => $request->input('experience'),
                'bio' => $request->input('bio'),
                'store_location' => $request->input('store_location'),
            ]
        );

        // Update or create delivery information in the `delivery_infos` table
        DeliveryInfo::updateOrCreate(
            ['user_id' => $handyman->id],
            [
                'phone' => $request->input('phone'),
                'location' => $request->input('location'),
                'building_no' => $request->input('building_no'),
                'city' => $request->input('city'),
            ]
        );

        return redirect()->route('admin.manage_handymans')->with('success', 'Handyman information updated successfully.');
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
        // Fetch the handyman's user details, along with their associated gigs and purchases
        $handyman = User::with(['purchases.product', 'handyman.gigs'])->findOrFail($id);

        // Fetch the delivery info associated with the handyman
        $deliveryInfo = DeliveryInfo::where('user_id', $id)->first();

        return view('admin.handymans.view_handyman', compact('handyman', 'deliveryInfo'));
    }


    public function createHandyman()
    {
        return view('admin.handymans.create_handyman');
    }

    public function suspendHandyman(Request $request, $id)
    {
        $handyman = Handyman::findOrFail($id);
        $handyman->suspended = true;  // Assuming you have a 'suspended' column in the 'handymans' table
        $handyman->save();
        session()->flash('success', 'Handyman ' . $handyman->user->name . ' with ID #' . $handyman->id . ' is now suspended.');

        // Create a notification for the user
        $notification = new Notification();
        $notification->user_id = $handyman->user_id; // Assign the notification to the user
        $notification->message = 'Your account has been supended due a TOS violation ';
        $notification->category = 'danger'; // Set the notification category as 'primary'
        $notification->is_read = 0; // Mark the notification as unread
        $notification->save();

        return redirect()->route('admin.handyman_performance');
    }
    public function unsuspendHandyman(Request $request, $id)
    {
        $handyman = Handyman::findOrFail($id);
        $handyman->suspended = false;  // Unsuspend the handyman
        $handyman->save();

        // Create a notification for the user
        $notification = new Notification();
        $notification->user_id = $handyman->user_id; // Assign the notification to the user
        $notification->message = 'Your account has been unsupended!';
        $notification->category = 'success'; // Set the notification category as 'primary'
        $notification->is_read = 0; // Mark the notification as unread
        $notification->save();

        return redirect()->route('admin.handyman_performance')->with('success', 'Handyman "' . $handyman->user->name . '" with ID #' . $handyman->id . ' is now unsuspended.');
    }
    public function storeHandyman(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'phone' => 'nullable|string|max:20',
        ]);



        // Create the customer
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'role_id' => 4,
            'date_created' => now(), // Set the current timestamp

        ]);

        Handyman::create([
            'user_id' => $user->id,  // Link to the newly created user
            'experience' => 0,
            'bio' => null,
            'rating' => 0,
        ]);




        return redirect()->route('admin.manage_handymans')->with('success', 'handyman created successfully.');
    }


    public function showStoreOwners(Request $request)
    {
        $search = $request->input('search');

        $users = User::where('role_id', 3)
            ->when($search, function ($query, $search) {
                return $query->where('name', 'like', '%' . $search . '%');
            })
            ->get();

        return view('admin.storeowner.manage_store_owners', compact('users'));
    }


    public function editStoreOwner($id)
    {
        $store_owner = User::with('storeOwner', 'deliveryInfo', 'storeOwner.store')->findOrFail($id);
        $deliveryInfo = $store_owner->deliveryInfo;
        $storeOwnerDetails = $store_owner->storeOwner;
        $storeDetails = $storeOwnerDetails->store ?? null;

        return view('admin.storeowner.edit_store_owner', compact('store_owner', 'deliveryInfo', 'storeOwnerDetails', 'storeDetails'));
    }


    public function updateStoreOwner(Request $request, $id)
    {
        $store_owner = User::findOrFail($id);

        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'nullable|string|max:20',
            'image' => 'nullable|image',
            'location' => 'nullable|string|max:255',
            'building_no' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'store_name' => 'nullable|string|max:255',
            'contact_number' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
            'certificate_id' => 'nullable|integer',
            'store_location' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'status_id' => 'nullable|integer',
            'rating' => 'nullable|numeric',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if exists and it's not the default
            if ($store_owner->image && $store_owner->image !== 'default.png') {
                Storage::delete('/user_images/' . $store_owner->image);
            }

            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('user_images'), $imageName);
            $store_owner->image = $imageName;
        }

        // Update store owner information
        $store_owner->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'image' => $store_owner->image, // Save the image name in the database
        ]);

        // Update or create store owner details
        StoreOwner::updateOrCreate(
            ['user_id' => $store_owner->id],
            [
                'store_name' => $request->input('store_name'),
                'contact_number' => $request->input('contact_number'),
                'address' => $request->input('address'),
                'certificate_id' => $request->input('certificate_id'),
                'rating' => $request->input('rating'),
            ]
        );

        // Update or create store details
        Store::updateOrCreate(
            ['store_owner_id' => $store_owner->storeOwner->id],
            [
                'name' => $request->input('store_name'),
                'location' => $request->input('store_location'),
                'description' => $request->input('description'),
                'status_id' => $request->input('status_id'),
                'rating' => $request->input('rating'),
            ]
        );

        // Update or create delivery info
        DeliveryInfo::updateOrCreate(
            ['user_id' => $store_owner->id],
            [
                'phone' => $request->input('phone'),
                'location' => $request->input('location'),
                'building_no' => $request->input('building_no'),
                'city' => $request->input('city'),
            ]
        );

        return redirect()->route('admin.manage_store_owners')->with('success', 'Store owner information updated successfully.');
    }



    public function deleteStoreOwner($id)
    {
        $store_owner = User::findOrFail($id);

        // Optionally, delete any associated records
        DeliveryInfo::where('user_id', $id)->delete();

        // Delete the customer
        $store_owner->delete();

        return redirect()->route('admin.manage_store_owners')->with('success', 'store_owner deleted successfully.');
    }

    public function viewStoreOwner($id)
    {
        // Fetch the store owner user record with related data
        $store_owner = User::with([
            'storeOwner.store.sales.product', // Fetch the store and its purchases along with the product details
            'deliveryInfo' // Fetch delivery information
        ])->findOrFail($id);

        // Fetch related data
        $deliveryInfo = $store_owner->deliveryInfo;
        $store = $store_owner->storeOwner->store ?? null;
        $storePurchases = $store ? $store->sales : collect(); // Fetch the store's purchases or return an empty collection

        return view('admin.storeowner.view_store_owner', compact('store_owner', 'deliveryInfo', 'store', 'storePurchases'));
    }



    public function createStoreOwner()
    {
        return view('admin.storeowner.create_store_owner');
    }


    public function storeStoreOwner(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'phone' => 'nullable|string|max:20',
        ]);



        // Create the user
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'role_id' => 3, // Assuming role_id 3 is for store owners
            'date_created' => now(), // Set the current timestamp
        ]);

        // Create the store owner record associated with the user
        StoreOwner::create([
            'user_id' => $user->id,  // Link to the newly created user
            'store_name' => null,
            'contact_number' => null,
            'address' => null,
            'rating' => 0,
            'certificate_id' => null,
        ]);


        return redirect()->route('admin.manage_store_owners')->with('success', 'store_owner created successfully.');
    }
}
