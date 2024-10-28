<?php

namespace App\Http\Controllers;

use App\Models\HandymanApplication;
use App\Models\StoreOwnerApplication;
use App\Models\Handyman;
use App\Models\StoreOwner;
use App\Models\Store;
use App\Models\User;
use App\Models\Notification; // Assuming you're  using this model
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdminApplicationController extends Controller
{
    // Display all applications
    public function index()
    {
        // Get all handyman and store owner applications
        $handymanApplications = HandymanApplication::all();
        $storeOwnerApplications = StoreOwnerApplication::all();

        return view('admin.applications.index', compact('handymanApplications', 'storeOwnerApplications'));
    }

    // Show individual handyman application
    public function showHandyman($id)
    {
        $application = HandymanApplication::findOrFail($id);
        return view('admin.applications.showHandyman', compact('application'));
    }
    // Show individual store owner application
    public function showStoreOwner($id)
    {
        $application = StoreOwnerApplication::findOrFail($id);
        return view('admin.applications.showStoreOwner', compact('application'));
    }


    // Approve a handyman application
    public function approveHandyman($id)
    {
        // Begin database transaction
        DB::beginTransaction();

        try {
            // Find the application
            $application = HandymanApplication::findOrFail($id);
            $application->status = 'approved';
            $application->save();

            // Add the handyman record
            Handyman::create([
                'user_id' => $application->user_id,
                'experience' => $application->experience,
                'price_per_hour' => $application->price_per_hour,
                'store_location' => $application->store_location ?? null,
                'bio' => $application->bio, // Or retrieve from the application if stored
            ]);

            // Update the user's role to Handyman (role id 4)
            $user = User::find($application->user_id);
            $user->role_id = 4; // Assuming role_id 4 is for Handyman
            $user->save();

            // Send notification to the user
            Notification::create([
                'user_id' => $user->id,
                'message' => 'Your handyman application has been approved! Start earning more by accepting jobs.',
                'category' => 'success', // Can be 'success', 'primary', 'warning', etc.
                'is_read' => 0
            ]);

            // Commit the transaction
            DB::commit();

            return redirect()->back()->with('success', 'Handyman application approved successfully.');
        } catch (\Exception $e) {
            // Rollback the transaction if something goes wrong
            DB::rollback();
            return redirect()->back()->with('error', 'An error occurred while approving the handyman application.');
        }
    }

    // Approve a store owner application
    public function approveStoreOwner($id)
    {
        // Begin database transaction
        DB::beginTransaction();

        try {
            // Find the application
            $application = StoreOwnerApplication::findOrFail($id);
            $application->status = 'approved';
            $application->save();

            // Add the store owner record
            $newStoreOwner = StoreOwner::create([
                'user_id' => $application->user_id,
                'store_name' => $application->store_name,
                'store_name_ar' => $application->store_name_ar,
                'contact_number' => $application->contact_number, // Assuming this is in the application
                'address' => $application->address, // Assuming this is in the application
                'address_ar' => $application->address_ar, // Assuming this is in the application
                'rating' => 0, // Default rating or retrieve from application
                'certificate_id' => $application->certificate_id, // Example certificate ID, modify based on your system
            ]);

            // Add the store record
            Store::create([
                'store_owner_id' => $newStoreOwner->id,
                'name' => $application->store_name,
                'name_ar' => $application->store_name_ar,
                'location' => $application->location,
                'description' => $application->description,
                'description_ar' => $application->description_ar,
                'status_id' => 4, // Assuming status_id 4 means approved or active
                'rating' => 0, // Default rating
            ]);

            // Update the user's role to Store Owner (role id 3)
            $user = User::find($application->user_id);
            $user->role_id = 3; // Assuming role_id 3 is for Store Owner
            $user->save();

            // Send notification to the user
            Notification::create([
                'user_id' => $user->id,
                'message' => 'Your store owner application has been approved! Start earning more by managing your store.',
                'category' => 'success',
                'is_read' => 0
            ]);

            // Commit the transaction
            DB::commit();

            return redirect()->back()->with('success', 'Store owner application approved successfully.');
        } catch (\Exception $e) {
            // Rollback the transaction if something goes wrong
            DB::rollback();
            return redirect()->back()->with('error', 'An error occurred while approving the store owner application.');
        }
    }
    public function showRejectHandymanForm($id)
    {
        $application = HandymanApplication::findOrFail($id);
        return view('admin.applications.handyman_reject', compact('application'));
    }

    // Reject a handyman application with flagged parts
    public function rejectHandyman(Request $request, $id)
    {
        // Validate the flagged parts
        $request->validate([
            'flagged_parts' => 'required|array',
            'flagged_parts.*' => 'string',
        ]);

        // Begin transaction
        DB::beginTransaction();

        try {
            // Find the application
            $application = HandymanApplication::findOrFail($id);
            $application->status = 'rejected';
            $application->flagged_parts = json_encode($request->flagged_parts); // Store flagged parts as JSON
            $application->save();

            // Find the user
            $user = User::find($application->user_id);

            // Convert flagged parts array to a readable list
            $flaggedPartsList = implode(', ', $request->flagged_parts);

            // Send notification to the user about rejection with flagged parts
            Notification::create([
                'user_id' => $user->id,
                'message' => "Your handyman application has been rejected. Please review the following parts: $flaggedPartsList.",
                'category' => 'danger',
                'is_read' => 0
            ]);

            // Commit the transaction
            DB::commit();

            return redirect()->route('admin.applications.index')->with('success', 'Handyman application rejected successfully.');
        } catch (\Exception $e) {
            // Rollback if something goes wrong
            DB::rollback();
            return redirect()->route('admin.applications.index')->with('error', 'An error occurred while rejecting the handyman application.');
        }
    }
    public function showRejectStoreOwnerForm($id)
    {
        $application = StoreOwnerApplication::findOrFail($id);
        return view('admin.applications.storeowner_reject', compact('application'));
    }

    // Reject a store owner application with flagged parts
    public function rejectStoreOwner(Request $request, $id)
    {
        // Validate the flagged parts
        $request->validate([
            'flagged_parts' => 'required|array',
            'flagged_parts.*' => 'string',
        ]);

        // Begin transaction
        DB::beginTransaction();

        try {
            // Find the application
            $application = StoreOwnerApplication::findOrFail($id);
            $application->status = 'rejected';
            $application->flagged_parts = json_encode($request->flagged_parts); // Store flagged parts as JSON
            $application->save();

            // Find the user
            $user = User::find($application->user_id);

            // Convert flagged parts array to a readable list
            $flaggedPartsList = implode(', ', $request->flagged_parts);

            // Send notification to the user about rejection with flagged parts
            Notification::create([
                'user_id' => $user->id,
                'message' => "Your store owner application has been rejected. Please review the following parts: $flaggedPartsList.",
                'category' => 'danger',
                'is_read' => 0
            ]);

            // Commit the transaction
            DB::commit();

            return redirect()->route('admin.applications.index')->with('success', 'Store owner application rejected successfully.');
        } catch (\Exception $e) {
            // Rollback if something goes wrong
            DB::rollback();
            return redirect()->route('admin.applications.index')->with('error', 'An error occurred while rejecting the store owner application.');
        }
    }
}
