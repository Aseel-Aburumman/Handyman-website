<?php

namespace App\Http\Controllers;

use App\Models\Gig;
use App\Models\Proposal;
use App\Models\Report;
use App\Models\Notification;


use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function getOne($gigId)
    {
        // Retrieve the gig by its ID
        $gig = Gig::with(['proposals.handyman.user', 'category'])->findOrFail($gigId);

        // Get the proposals for the gig
        $proposals = Proposal::with(['handyman.user', 'status'])
            ->where('gig_id', $gigId)
            ->get();



        return view('gigs.gigdetail', compact('gig', 'proposals'));
    }


    public function storeReport(Request $request)
    {
        $request->validate([
            'handyman_id' => 'required|exists:handymans,id',
            'gig_id' => 'required|exists:gigs,id',
            'message' => 'required|string|max:255',
        ]);

        // Create the report
        Report::create([
            'user_id' => Auth::id(),
            'handyman_id' => $request->handyman_id,
            'gig_id' => $request->gig_id,
            'message' => $request->message,
        ]);

        return redirect()->back()->with('success', 'Report submitted successfully.');
    }
    public function reject($proposalId)
    {
        $proposal = Proposal::findOrFail($proposalId);
        $proposal->update(['status_id' => 21]); // Reject status

        $notification = new Notification();
        $notification->user_id = $proposal->handyman->user->id; // Assign the notification to the user
        $notification->message = 'Your proposal has been rejected ';
        $notification->category = 'warning'; // Set the notification category as 'primary'
        $notification->is_read = 0; // Mark the notification as unread
        $notification->save();





        return redirect()->back()->with('success', 'Proposal rejected successfully.');
    }

    public function unreject($proposalId)
    {
        $proposal = Proposal::findOrFail($proposalId);
        $proposal->update(['status_id' => 23]); // unReject status

        $notification = new Notification();
        $notification->user_id = $proposal->handyman->user->id; // Assign the notification to the user
        $notification->message = 'Your proposal has been reconsidered! ';
        $notification->category = 'warning'; // Set the notification category as 'primary'
        $notification->is_read = 0; // Mark the notification as unread
        $notification->save();


        return redirect()->back()->with('success', 'Proposal unrejected successfully.');
    }


    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'handyman_id' => 'required|exists:handymans,id',
            'gig_id' => 'required|exists:gigs,id',
            'message' => 'required|string|max:255',
        ]);

        // Create a new report record
        Report::create([
            'user_id' => Auth::id(),
            'handyman_id' => $request->input('handyman_id'),
            'gig_id' => $request->input('gig_id'),
            'message' => $request->input('message'),
        ]);

        // Redirect or return a success message
        return redirect()->back()->with('success', 'Your report has been submitted.');
    }
}
