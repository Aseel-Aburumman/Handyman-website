<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gig;
use App\Models\Handyman;
use App\Models\Category;
use App\Models\Status;
use App\Models\Message;
use App\Models\Review;
use App\Models\User;
use App\Models\GigPolicy;
use App\Models\Report;
use App\Models\Notification;





class GigController extends Controller
{

    public function index()
    {

        $recentGigs = Gig::with('status')->orderBy('created_at', 'desc')->get();
        return view('admin.gigs.gigs_overview', compact('recentGigs'));
    }

    public function view($id)
    {
        $gig = Gig::with('status', 'category', 'handyman')->findOrFail($id);
        return view('admin.gigs.view_gig', compact('gig'));
    }

    public function edit($id)
    {
        $gig = Gig::with('status', 'category', 'handyman')->findOrFail($id);
        $statuses = Status::where('status_category', 'gig')->get();
        return view('admin.gigs.edit_gig', compact('gig', 'statuses'));
    }

    public function update(Request $request, $id)
    {
        $gig = Gig::findOrFail($id);
        $gig->update($request->all());

        return redirect()->route('admin.view_gig', $id)->with('success', 'Gig updated successfully');
    }

    public function destroy($id)
    {
        $gig = Gig::findOrFail($id);
        $gig->delete();

        return redirect()->route('admin.manage_gigs')->with('success', 'Gig deleted successfully');
    }

    public function resolveGig($id)
    {
        // Fetch the reported gig along with related handyman and client info
        $gig = Gig::with(['user', 'handyman'])->findOrFail($id);

        // Fetch the report message
        $report = Report::where('gig_id', $gig->id)->latest()->first();

        // Fetch the last 5 reviews for the handyman (who was awarded the gig)
        $handymanReviews = Review::where('handyman_id', $gig->handyman_id)->latest()->take(5)->get();

        // Fetch the last 5 reviews for the client who created the gig
        $clientReviews = Review::where('client_id', $gig->user_id)
            ->orderBy('created_at', 'desc')
            ->limit(5)
            ->get();

        // Fetch the chat history between the handyman and the client
        $chatHistory = Message::where(function ($query) use ($gig) {
            $query->where('sender_id', $gig->user_id)
                ->orWhere('receiver_id', $gig->user_id);
        })
            ->where('created_at', '>', $gig->created_at)  // Fetch only messages sent after the gig was created
            ->get();

        // dd($gig->user_id);
        return view('admin.gigs.resolve_gig', compact('gig', 'report', 'handymanReviews', 'clientReviews', 'chatHistory'))->with('success', 'The Gig report has been resolved.');;
    }

    public function resolve($id)
    {
        $gig = Gig::findOrFail($id);
        $gig->status_id = 7; // Assuming '10' is the ID for 'Canceled'
        $gig->save();



        return redirect()->route('admin.reported_gigs')->with('success', 'Gig has been Reopend.');
    }


    public function cancelGig($id)
    {
        $gig = Gig::findOrFail($id);
        $gig->status_id = 10; // Assuming '10' is the ID for 'Canceled'
        $gig->save();

        $notification = new Notification();
        $notification->user_id = $gig->user_id; // Assign the notification to the user
        $notification->message = 'Your gig has been canceled due a TOS violation ';
        $notification->category = 'danger'; // Set the notification category as 'primary'
        $notification->is_read = 0; // Mark the notification as unread
        $notification->save();

        return redirect()->route('admin.reported_gigs')->with('success', 'Gig has been canceled.');
    }


    // Gigs Overview Dashboard
    public function gigsOverview()
    {
        $gigCounts = [
            'open' => Gig::where('status_id', 7)->count(),
            'in_progress' => Gig::where('status_id', 8)->count(),
            'completed' => Gig::where('status_id', 9)->count(),
            'canceled' => Gig::where('status_id', 10)->count(),
            'canceled' => Gig::where('status_id', 11)->count(),

        ];

        $recentGigs = Gig::orderBy('created_at', 'desc')->take(5)->get();
        return view('admin.gigs.gigs_overview', compact('gigCounts', 'recentGigs'));
    }

    // All Gigs List
    public function allGigs(Request $request)
    {
        $query = Gig::query();

        if ($request->filled('status')) {
            $query->where('status_id', $request->status);
        }

        if ($request->filled('handyman')) {
            $query->where('handyman_id', $request->handyman);
        }

        if ($request->filled('location')) {
            $query->where('location', 'like', '%' . $request->location . '%');
        }

        $gigs = $query->paginate(10);
        $statuses = Status::where('status_category', 'gig')->get();
        $handymen = Handyman::all();

        return view('admin.gigs.all_gigs', compact('gigs', 'statuses', 'handymen'));
    }

    // Reported Gigs
    public function reportedGigs()
    {
        $reportedGigs = Gig::where('status_id', 11)->get(); // Assuming '7' is the 'reported'
        return view('admin.gigs.reported_gigs', compact('reportedGigs'));
    }

    // Gig Categories and Types
    public function gigCategories()
    {
        $categories = Category::all();
        return view('admin.gigs.gig_categories', compact('categories'));
    }

    // Handyman Performance Monitoring
    public function handymanPerformance()
    {
        $handymen = Handyman::with(['gigs', 'reviews'])->get();
        $Rhandymen = User::with(['gigs', 'reviews'])
            ->where('reported', 1)
            ->where('role_id', 4)
            ->get();



        return view('admin.gigs.handyman_performance', compact('Rhandymen', 'handymen'));
    }

    public function indexPolicy(Request $request)
    {
        $policies = GigPolicy::query()
            ->when($request->search, function ($query) use ($request) {
                $query->where('content', 'like', "%{$request->search}%");
            })
            ->get();

        return view('admin.gigs.gig_policy', compact('policies'));
    }

    // Show the form for creating a new policy
    public function createPolicy()
    {
        return view('admin.gigs.gig_policy_create');
    }

    // Store a newly created policy in the database
    public function storePolicy(Request $request)
    {
        $request->validate([
            'content' => 'required',
            'visible' => 'boolean',
        ]);

        GigPolicy::create($request->all());

        return redirect()->route('gig-policies.index')->with('success', 'Gig policy created successfully.');
    }

    // Show the form for editing the specified policy
    public function editPolicy($id)
    {
        $policy = GigPolicy::findOrFail($id);
        return view('admin.gigs.gig_policy_edit', compact('policy'));
    }

    // Update the specified policy in the database
    public function updatePolicy(Request $request, $id)
    {
        $request->validate([
            'content' => 'required',
        ]);

        // Find the gig policy by id
        $policy = GigPolicy::findOrFail($id);

        // If visible is not in the request, set it to false
        $visible = $request->has('visible') ? true : false;

        // Update the policy
        $policy->update([
            'content' => $request->input('content'),
            'visible' => $visible,
        ]);

        return redirect()->route('gig-policies.index')->with('success', 'Gig policy updated successfully.');
    }

    // Remove the specified policy from the database
    public function destroyPolicy($id)
    {
        $policy = GigPolicy::findOrFail($id);
        $policy->delete();

        return redirect()->route('gig-policies.index')->with('success', 'Gig policy deleted successfully.');
    }

    // Search policies
    public function searchPolicy(Request $request)
    {
        $search = $request->input('search');
        return redirect()->route('gig-policies.index', ['search' => $search]);
    }
}
