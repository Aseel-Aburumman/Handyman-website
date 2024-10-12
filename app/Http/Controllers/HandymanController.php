<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Handyman;
use App\Models\Gig;
use App\Models\HandymanAvailability;
use App\Models\Notification;
use App\Models\User;
use App\Models\Skill;
use App\Models\Certificate;
use App\Models\Sale;


use App\Models\DeliveryInfo;
use Illuminate\Support\Facades\Storage;

use App\Models\SkillCertificate;
use App\Models\Proposal;


use Carbon\Carbon;

use Illuminate\Support\Facades\Auth;

class HandymanController extends Controller
{
    public function getOne_Client($handymanId)
    {
        $handyman = Handyman::findOrFail($handymanId);

        // Count the number of reviews for this store
        // Get the handyman along with the count of related reviews and gigs
        $handyman = Handyman::withCount(['reviews', 'gigs'])
            ->with(['skillCertificates.skill', 'skillCertificates.status'])
            ->findOrFail($handymanId);

        // Now you can access the counts like this:
        $reviewCount = $handyman->reviews_count;  // This gives the number of reviews
        $gigCount = $handyman->gigs_count;        // This gives the number of gigs
        $allreviews = $handyman->reviews()->get();

        return view('handyman.clinent_perspective', compact('allreviews', 'handyman', 'reviewCount', 'gigCount'));
    }


    public function dashboard(Request $request)
    {
        $userId = Auth::id();
        $user = User::with('delivery_info')->find($userId); // Get the currently authenticated user
        $user = User::with('delivery_info')->where('id', $userId)->first(); // Get the authenticated user with delivery_info
        $delivery = DeliveryInfo::where('id', $userId)->first();

        // $handyman = Handyman::where('user_id', $userId)->first();
        $handyman = Handyman::withCount(['reviews', 'gigs'])
            ->with(['skillCertificates.skill', 'skillCertificates.status'])
            ->where('user_id', $userId)
            ->firstOrFail();


        $awardedgig = Gig::where('handyman_id', $handyman->id)
            ->where('status_id', 28)
            ->get();

        $mygigs = Gig::where('handyman_id', $handyman->id)
            ->whereIn('status_id', [7, 8, 9, 10, 11, 24])
            ->get();


        $skills = Skill::all(); // Fetch all available skills for the dropdown

        $gigs_i_created = Gig::where('user_id', $userId)->with('handyman', 'status')->get();
        $firstgigs = Gig::where('handyman_id', $handyman->id)->first();
        // dd($firstgigs->handyman->user->id);
        // Fetch sales data for the user, grouped by sale_date
        $sales = Sale::where('user_id', $userId)
            ->with(['store', 'product', 'status']) // Load related store, product, and status
            ->orderBy('sale_date', 'desc')
            ->get()
            ->groupBy('sale_date'); // Group by the sale date

        if ($request->isMethod('post') && !$request->has('skill_id')) {
            // Validate the form data
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'required|string|max:20',
                'city' => 'required|string|max:255',
                'building_no' => 'required|string|max:255',
                'bio' => 'required|string',
                'store_location' => 'required|string',

                'price_per_hour' => 'required|integer|max:20',
                'experience' => 'required|integer|max:20',
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

            $handyman->experience = $request->experience;
            $handyman->price_per_hour = $request->price_per_hour;
            $handyman->bio = $request->bio;
            $handyman->store_location = $request->store_location;



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
            $handyman->save();
            $delivery->save();
            return redirect()->route('handyman.dashboard')->with('status', 'Profile updated successfully!');
        }

        return view('handyman.dashboard', compact('gigs_i_created', 'firstgigs', 'sales', 'skills', 'handyman', 'user', 'awardedgig', 'mygigs'));
    }

    public function addSkill(Request $request)
    {
        $userId = Auth::id();
        $handyman = Handyman::where('user_id', $userId)->firstOrFail();

        // Validate the form data
        $request->validate([
            'skill_id' => 'required|exists:skills,id',
            'certificate_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required|string',
        ]);

        // Handle the certificate image upload
        $imageName = time() . '.' . $request->certificate_image->extension();
        $request->certificate_image->storeAs('public/certificate_images', $imageName);

        // Create a new certificate record
        $certificate = new Certificate();
        $certificate->name = $imageName;
        $certificate->description = $request->description;
        $certificate->save();

        // Create a new skill certificate record
        SkillCertificate::create([
            'skill_id' => $request->skill_id,
            'handyman_id' => $handyman->id,
            'certificate_id' => $certificate->id,
            'status_id' => 3, // Set status to 3 by default
        ]);

        return redirect()->route('handyman.dashboard')->with('status', 'New skill added successfully!');
    }


    public function index()
    {

        $userId = Auth::id();
        $handyman = Handyman::where('user_id', $userId)->first();

        $awardedgig = Gig::where('handyman_id', $handyman->id)
            ->where('status_id', 28)
            ->take(2)
            ->get();
        // dd($awardedgig);

        // $totalawardedgig =count( Gig::where('handyman_id', $handyman->id)->get());
        $totalawardedgig = Gig::where('handyman_id', $handyman->id)->count();
        $totalappliedgig = Proposal::where('handyman_id', $handyman->id)->count();
        $totalawardedgig_profit = Gig::where('handyman_id', $handyman->id)->cursor();

        $totalawardedgig_profit_thismonth = Gig::where('handyman_id', $handyman->id)
            ->whereMonth('created_at', Carbon::now()->month)
            ->whereYear('created_at', Carbon::now()->year)
            ->sum('total');

        $categoryIds = SkillCertificate::where('handyman_id', $handyman->id)
            ->join('skills', 'skill_certificates.skill_id', '=', 'skills.id')
            ->join('skilltocategories', 'skills.id', '=', 'skilltocategories.skill_id')
            ->pluck('skilltocategories.category_id');

        $gigtoaply = Gig::whereIn('category_id', $categoryIds)
            ->where('handyman_id', null)
            ->take(2)
            ->get();

        return view('handyman.home', compact('totalawardedgig_profit_thismonth', 'totalawardedgig_profit', 'awardedgig', 'gigtoaply', 'totalawardedgig', 'totalappliedgig'));
    }


    public function accept($gigId)
    {
        $userId = Auth::id();
        $handyman = Handyman::where('user_id', $userId)->first();
        // Fetch the associated gig
        $gig = Gig::findOrFail($gigId);
        // Update the gig data with the new handyman, price, estimated time, and total
        $gig->update([
            'handyman_id' => $handyman->id,
            'status_id' => 7,
        ]);


        // Create a new HandymanAvailability record
        HandymanAvailability::create([
            'handyman_id' =>  $handyman->id,
            'start_time' => $gig->task_date . ' ' . $gig->task_time, // Assuming task_date and task_time provide start time
            'end_time' => $this->calculateEndTime($gig->task_date, $gig->task_time, $gig->estimated_time), // Calculate end time
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        // Send notification to the winning handyman
        $notification = new Notification();
        $notification->user_id = $gig->user->id; // Assign the notification to the handyman
        $notification->message = 'YourHandyman has accepted your offer!';
        $notification->category = 'success'; // Notification category
        $notification->is_read = 0; // Mark the notification as unread
        $notification->save();




        // Redirect back with a success message and a chat link
        return redirect()->back()->with('success', 'You successfully won a gig a handyman.  Chat with you client <a href="' . route('chat', ['receiverId' => $gig->user->id]) . '">Now</a>');
    }

    // Helper function to calculate the end time based on start time and estimated time
    private function calculateEndTime($taskDate, $taskTime, $estimatedHours)
    {
        $start = Carbon::parse($taskDate . ' ' . $taskTime); // Parse the start time
        return $start->addHours($estimatedHours); // Add the estimated time to get the end time
    }

    public function showOpenGig($gigId)
    {
        $gig = Gig::findOrFail($gigId);
        $userId = Auth::id();
        $handyman = Handyman::where('user_id', $userId)->first();
        $existingProposal = Proposal::where('handyman_id', $handyman->id)->where('gig_id', $gigId)->first();

        return view('handyman.showOpenGig', compact('gig', 'existingProposal'));
    }

    public function submitProposal(Request $request, $gigId)
    {
        $userId = Auth::id();
        $handyman = Handyman::where('user_id', $userId)->first();
        // Validate request data
        $request->validate([
            'proposal' => 'required|string|max:500',
            'price_per_hour' => 'required|numeric',
            'total_time' => 'required|numeric',
        ]);

        // Check if proposal already exists for the handyman and gig
        $existingProposal = Proposal::where('handyman_id', $handyman->id)->where('gig_id', $gigId)->first();
        if ($existingProposal) {
            return redirect()->back()->with('error', 'You have already submitted a proposal for this task.');
        }
        $totalCost = $request->total_time * $request->price_per_hour;

        // Create a new proposal
        Proposal::create([
            'handyman_id' => $handyman->id,
            'gig_id' => $gigId,
            'proposal' => $request->proposal,
            'price_per_hour' => $request->price_per_hour,
            'time' => $request->total_time,
            'total' => $totalCost,  // Calculate the total based on time and price per hour
            'status_id' => 23, // or whatever initial status you want
        ]);

        return redirect()->back()->with('success', 'Proposal submitted successfully.');
    }



    public function updateProposal(Request $request, $proposalId)
    {
        // Validate request data
        $request->validate([
            'proposal' => 'required|string|max:500',
            'price_per_hour' => 'required|numeric',
            'total_time' => 'required|numeric',
        ]);

        // Find the proposal
        $proposal = Proposal::findOrFail($proposalId);

        // Ensure the authenticated handyman is the owner of the proposal
        if ($proposal->handyman_id != auth()->id()) {
            return redirect()->back()->with('error', 'You do not have permission to update this proposal.');
        }
        $totalCost = $request->total_time * $request->price_per_hour;
        dd($request);
        // Update the proposal with the new details
        $proposal->update([
            'proposal' => $request->proposal,
            'price_per_hour' => $request->price_per_hour,
            'time' => $request->total_time,
            'total' => $totalCost,
        ]);

        return redirect()->route('handyman.opengig', $proposal->gig_id)->with('success', 'Proposal updated successfully.');
    }
}
