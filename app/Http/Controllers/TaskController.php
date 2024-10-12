<?php

namespace App\Http\Controllers;

use App\Models\Gig;
use App\Models\Proposal;
use App\Models\Report;
use App\Models\Notification;
use App\Models\Payment;
use App\Models\HandymanAvailability;
use Carbon\Carbon;

use App\Models\Review;




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

    public function award($proposalId)
    {
        // Find the proposal by ID or fail
        $proposal = Proposal::findOrFail($proposalId);

        // Update the proposal status to "won"
        $proposal->update(['status_id' => 22]);

        // Fetch the associated gig
        $gig = Gig::findOrFail($proposal->gig_id);

        // Update the gig data with the new handyman, price, estimated time, and total
        $gig->update([
            'handyman_id' => $proposal->handyman_id,
            'price' => $proposal->price_per_hour,
            'estimated_time' => $proposal->time,
            'total' => $proposal->price_per_hour * $proposal->time, // Total is price per hour * estimated time
        ]);


        // Create a new HandymanAvailability record
        // HandymanAvailability::create([
        //     'handyman_id' => $proposal->handyman_id,
        //     'start_time' => $gig->task_date . ' ' . $gig->task_time, // Assuming task_date and task_time provide start time
        //     'end_time' => $this->calculateEndTime($gig->task_date, $gig->task_time, $gig->estimated_time), // Calculate end time
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);


        // Send notification to the winning handyman
        $notification = new Notification();
        $notification->user_id = $proposal->handyman->user->id; // Assign the notification to the handyman
        $notification->message = 'Your proposal has been Won!';
        $notification->category = 'success'; // Notification category
        $notification->is_read = 0; // Mark the notification as unread
        $notification->save();




        // Redirect back with a success message and a chat link
        return redirect()->back()->with('success', 'You successfully selected a handyman. Let\'s chat with him <a href="' . route('chat', ['receiverId' => $proposal->handyman->user->id]) . '">here</a>');
    }

    // Helper function to calculate the end time based on start time and estimated time
    private function calculateEndTime($taskDate, $taskTime, $estimatedHours)
    {
        $start = Carbon::parse($taskDate . ' ' . $taskTime); // Parse the start time
        return $start->addHours($estimatedHours); // Add the estimated time to get the end time
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



    public function showAssignedGig($gigId)
    {
        // Retrieve the gig along with its associated handyman and proposal details
        $gig = Gig::with('handyman.user', 'handyman')->findOrFail($gigId);
        // Retrieve the assigned proposal

        $userId = Auth::id();

        $paymentRepotr = Payment::where('gig_id', $gigId)->get();
        $reviews = Review::where('user_id', $userId)
            ->where('gig_id', $gigId)
            ->with(['user', 'handyman.user'])
            ->get();
        // dd($reviews);

        // Get all items in the shopping cart for the current user
        $payment = Payment::where('status_id', 25)->where('gig_id', $gigId)->get();
        if ($payment) {   // Calculate subtotal
            $subtotal = $payment->sum('amount');
            $all_total = $subtotal * 0.16 + $subtotal;
            // dd($reviews);

            return view('gigs.task_detail', compact('gig', 'paymentRepotr', 'subtotal', 'all_total', 'reviews'));
            // dd($total);
        }
        // dd($reviews);
        $all_total = 0;

        return view('gigs.task_detail', compact('gig', 'paymentRepotr', 'subtotal', 'all_total', 'reviews'));
    }

    public function storeReview(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'review' => 'required|string|max:255',
            'gig_id' => 'required|integer',
            'handyman_id' => 'required|integer',


        ]);

        // Create a new review
        $review = new Review();
        $review->user_id = Auth::id(); // Assuming the user is logged in
        // $review->user_id = 2; // Assuming the user is logged in

        $review->handyman_id = $request->input('handyman_id'); // Set this depending on what you're reviewing
        $review->gig_id = $request->input('gig_id'); // Set this if you're reviewing a product
        $review->review = $request->input('review');
        $review->rating = $request->input('rating');

        // Save the review to the database
        $review->save();

        // Redirect or return a response
        return redirect()->back()->with('success', 'Review added successfully!');
    }


    public function updateGigStatus($gigId, $status)
    {
        $gig = Gig::findOrFail($gigId);
        $gig->update(['status_id' => $status]);

        return redirect()->back()->with('success', 'Task status updated successfully.');
    }
    public function cancelPayment(Request $request, $paymentId)
    {
        $payment = Payment::findOrFail($paymentId);
        $payment->update(['status_id' => 26]);

        return redirect()->back()->with('success', 'Payment process canceled.');
    }


    public function processPayment(Request $request, $gigId)
    {
        // Fetch the gig
        $gig = Gig::where('id', $gigId)->first();

        if (!$gig) {
            return redirect()->back()->with('error', 'Gig not found.');
        }

        // Update all payments where 'status_id' is 25 and for the specific gig
        $updatedRows = Payment::where('gig_id', $gigId) // Assuming Payment has a gig_id column
            ->where('status_id', 25)
            ->update(['status_id' => 27]);

        if ($updatedRows > 0) {
            // Update gig's total if payments were successfully updated
            $total1 = $gig->total;
            $total2 = $request->input('all_total');
            $alltotal = $total1 + $total2;
            // dd($alltotal);
            $gig->total = $alltotal;
            $gig->save(); // Save the updated total

            return redirect()->back()->with('success', 'Payment process initiated and related records updated.');
        } else {
            $alltotal = 0;

            return redirect()->back()->with('error', 'No payments found to update for this gig.');
        }
    }

    public function createPayment(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'gig_id' => 'required|integer',
            'handyman_id' => 'required|integer',

            'amount' => 'required|numeric',
            'description' => 'required|string',
        ]);

        $gig = Gig::where('id', $request->gig_id)->first();
        $total1 = $gig->total;
        $total2 = $request->input('amount');
        $alltotal = $total1 + $total2;
        // dd($alltotal);
        $gig->total = $alltotal;
        $gig->save(); // Save the updated total

        // Create new payment record with status_id = 27
        Payment::create([
            'gig_id' => $request->gig_id,
            'handyman_id' => $request->handyman_id,
            'amount' => $request->amount,
            'description' => $request->description,
            'status_id' => 27,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->back()->with('success', 'New payment record added successfully.');
    }


    // public function processPayment(Request $request, $gigId)
    // {
    //     $gig = Gig::findOrFail($gigId);
    //     $payment = Payment::create([
    //         'handyman_id' => $gig->handyman->id,
    //         'gig_id' => $gigId,
    //         'amount' => $gig->total,
    //         'status_id' => 25 // Pending payment
    //     ]);

    //     return redirect()->back()->with('success', 'Payment process initiated.');
    // }

    public function storeReportGig(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'handyman_id' => 'required|exists:handymans,id',
            'gig_id' => 'required|exists:gigs,id',
            // 'message' => 'required|string|max:255',
        ]);

        // Create a new report record
        Report::create([
            'user_id' => Auth::id(),
            'handyman_id' => $request->input('handyman_id'),
            'gig_id' => $request->input('gig_id'),
            // 'message' => $request->input('message'),
            'message' => 'testttttttttttttttttt',

        ]);


        $gig = Gig::findOrFail($request->input('gig_id'));
        $gig->update(['status_id' => 11]);


        // Redirect or return a success message
        return redirect()->back()->with('success', 'Your report has been submitted.');
    }
}
