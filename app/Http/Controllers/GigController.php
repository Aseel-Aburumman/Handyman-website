<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gig;
use App\Models\Handyman;
use App\Models\Category;
use App\Models\Status;
use App\Models\Message;
use App\Models\Review;

class GigController extends Controller
{

    public function index()
    {

        $recentGigs = Gig::with('status')->orderBy('created_at', 'desc')->get();
        return view('admin.gigs_overview', compact('recentGigs'));
    }

    public function view($id)
    {
        $gig = Gig::with('status', 'category', 'handyman')->findOrFail($id);
        return view('admin.view_gig', compact('gig'));
    }

    public function edit($id)
    {
        $gig = Gig::with('status', 'category', 'handyman')->findOrFail($id);
        $statuses = Status::where('status_category', 'gig')->get();
        return view('admin.edit_gig', compact('gig', 'statuses'));
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
        $gig = Gig::findOrFail($id);
        $gig->status_id = 9; // Assuming '9' is the ID for 'Completed' or 'Resolved'
        $gig->save();

        return redirect()->route('admin.reported_gigs')->with('success', 'Gig has been resolved.');
    }

    public function cancelGig($id)
    {
        $gig = Gig::findOrFail($id);
        $gig->status_id = 10; // Assuming '10' is the ID for 'Canceled'
        $gig->save();

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
        return view('admin.gigs_overview', compact('gigCounts', 'recentGigs'));
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

        return view('admin.all_gigs', compact('gigs', 'statuses', 'handymen'));
    }

    // Reported Gigs
    public function reportedGigs()
    {
        $reportedGigs = Gig::where('status_id', 11)->get(); // Assuming '7' is the 'reported' 
        return view('admin.reported_gigs', compact('reportedGigs'));
    }

    // Gig Categories and Types
    public function gigCategories()
    {
        $categories = Category::all();
        return view('admin.gig_categories', compact('categories'));
    }

    // Handyman Performance Monitoring
    public function handymanPerformance()
    {
        $handymen = Handyman::with(['gigs', 'reviews'])->get();
        return view('admin.handyman_performance', compact('handymen'));
    }

    // Gig Policy and Terms Management
    public function gigPolicy()
    {
        // Placeholder for policy management logic
        return view('admin.gig_policy');
    }

    // Customer and Handyman Communication Center
    public function communicationCenter()
    {
        $messages = Message::with(['sender', 'receiver'])->get();
        return view('admin.communication_center', compact('messages'));
    }


    
}
