<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

use Illuminate\Support\Facades\DB;

use Carbon\Carbon;
use App\Models\Notification;
use App\Models\StoreOwner;

use Illuminate\Support\Facades\Auth;
use App\Models\Message;
use App\Models\Gig;
use App\Models\Category;

use App\Models\Sale;
use App\Models\User;
use App\Models\Product;
use App\Models\DeliveryInfo;
use App\Models\Store;
use App\Models\Ticket;
use App\Models\Status;
use App\Models\Handyman;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function main()
    {
        // echo 'ghjgj';

        return view('admin.b4login');
    }


    public function profileNavbar()
    {


        $user = Auth::user();
        $deliveryInfo = DeliveryInfo::where('user_id', $user->id)->first();

        // dd($user);
        return view('admin.profile', compact('user', 'deliveryInfo'));
    }
    public function dashboard()
    {
        $user_id = Auth::id();
        // $user_id = 1;

        // $notifications = Notification::where('user_id', $user_id)
        //     ->orderBy('created_at', 'desc')
        //     ->get();

        // $messages = Message::where('receiver_id', $user_id)
        //     ->with('sender') // Eager load the sender
        //     ->orderBy('created_at', 'desc')
        //     ->get();




        $currentWeek = Carbon::now()->startOfWeek();
        $lastWeek = Carbon::now()->subWeek()->startOfWeek();

        // Calculate transactions for current week

        $currentWeekSales = Sale::where('sale_date', '>=', $currentWeek)->count();
        $currentWeekTransactions =  $currentWeekSales;

        // Calculate transactions for last week
        $lastWeekSales = Sale::where('sale_date', '>=', $lastWeek)->where('sale_date', '<', $currentWeek)->count();
        $lastWeekTransactions =  +$lastWeekSales;

        // Calculate percentage change
        if ($lastWeekTransactions == 0) {
            $percentageChange = $currentWeekTransactions > 0 ? 100 : 0;
        } else {
            $percentageChange = (($currentWeekTransactions - $lastWeekTransactions) / $lastWeekTransactions) * 100;
        }


        // Get the start of the current month and last month
        $currentMonth = Carbon::now()->startOfMonth();
        $lastMonth = Carbon::now()->subMonth()->startOfMonth();

        // Calculate revenue for the current month
        $currentMonthSalesRevenue = Sale::where('sale_date', '>=', $currentMonth)->sum('total_amount');
        $currentMonthGigsRevenue = Gig::where('created_at', '>=', $currentMonth)->sum('price');
        $currentMonthRevenue = $currentMonthSalesRevenue + $currentMonthGigsRevenue;

        // Calculate revenue for the last month
        $lastMonthSalesRevenue = Sale::where('sale_date', '>=', $lastMonth)->where('sale_date', '<', $currentMonth)->sum('total_amount');
        $lastMonthGigsRevenue = Gig::where('created_at', '>=', $lastMonth)->where('created_at', '<', $currentMonth)->sum('price');
        $lastMonthRevenue = $lastMonthSalesRevenue + $lastMonthGigsRevenue;

        // Calculate percentage change
        if ($lastMonthRevenue == 0) {
            $percentageChange = $currentMonthRevenue > 0 ? 100 : 0;
        } else {
            $percentageChange = (($currentMonthRevenue - $lastMonthRevenue) / $lastMonthRevenue) * 100;
        }


        // Get the start of the current year and last year
        $currentYear = Carbon::now()->startOfYear();
        $lastYear = Carbon::now()->subYear()->startOfYear();

        // Calculate the number of users registered in the current year
        $currentYearUsers = User::where('created_at', '>=', $currentYear)->count();

        // Calculate the number of users registered in the last year
        $lastYearUsers = User::where('created_at', '>=', $lastYear)->where('created_at', '<', $currentYear)->count();

        // Calculate percentage change
        if ($lastYearUsers == 0) {
            $percentageChange = $currentYearUsers > 0 ? 100 : 0;
        } else {
            $percentageChange = (($currentYearUsers - $lastYearUsers) / $lastYearUsers) * 100;
        }

        $startOfMonth = Carbon::now()->startOfMonth();
        $endOfMonth = Carbon::now()->endOfMonth();

        // Get daily count of gigs for the current month
        $gigsPerDay = Gig::whereBetween('created_at', [$startOfMonth, $endOfMonth])
            ->selectRaw('DATE(created_at) as date, COUNT(*) as count')
            ->groupBy('date')
            ->pluck('count', 'date');

        // Get daily count of sales for the current month
        $salesPerDay = Sale::whereBetween('created_at', [$startOfMonth, $endOfMonth])
            ->selectRaw('DATE(created_at) as date, COUNT(*) as count')
            ->groupBy('date')
            ->pluck('count', 'date');

        // Get daily count of new users for the current month
        $usersPerDay = User::whereBetween('created_at', [$startOfMonth, $endOfMonth])
            ->selectRaw('DATE(created_at) as date, COUNT(*) as count')
            ->groupBy('date')
            ->pluck('count', 'date');

        // Format the data for the chart
        $dates = [];
        $gigsData = [];
        $salesData = [];
        $usersData = [];

        foreach ($startOfMonth->daysUntil($endOfMonth) as $date) {
            $formattedDate = $date->format('Y-m-d');
            $dates[] = $formattedDate;
            $gigsData[] = $gigsPerDay->get($formattedDate, 0);
            $salesData[] = $salesPerDay->get($formattedDate, 0);
            $usersData[] = $usersPerDay->get($formattedDate, 0);
        }



        $startOfWeek = Carbon::now()->startOfWeek();
        $endOfWeek = Carbon::now()->endOfWeek();

        $recentSales = Sale::whereBetween('sale_date', [$startOfWeek, $endOfWeek])
            ->orderBy('sale_date', 'desc')
            ->get();
        // $sales = DB::table('sales')
        //     ->whereBetween('sale_date', [$startOfWeek, $endOfWeek])
        //     ->get();
        // dd($sales);
        $topSellingProducts = Sale::select('product_id', DB::raw('SUM(quantity_sold) as total_sold'), DB::raw('SUM(total_amount) as total_revenue'))
            ->whereBetween('sale_date', [$startOfMonth, $endOfMonth])
            ->groupBy('product_id')
            ->orderByDesc('total_sold')
            ->take(15)
            ->get();

        // Get the product details
        $products = Product::whereIn('id', $topSellingProducts->pluck('product_id'))->get()->keyBy('id');




        return view('admin.dashboard', compact('topSellingProducts', 'products', 'recentSales', 'dates', 'gigsData', 'salesData', 'usersData', 'currentYearUsers', 'percentageChange', 'currentMonthRevenue', 'percentageChange',  'currentWeekTransactions', 'percentageChange'));
    }



    public function notification()
    {
        $user_id = Auth::id();
        // $user_id = 1;

        Notification::where('user_id', $user_id)
            ->where('is_read', 0)
            ->update(['is_read' => 1]);


        $notifications = Notification::where('user_id', $user_id)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('admin.notification', compact('notifications'));
    }



    public function manageTickets()
    {
        // Fetch all tickets
        $tickets = Ticket::with('status', 'user')->get();
        $statuses = Status::where('status_category', 'ticket')->get();

        return view('admin.ticket_manage', compact('tickets', 'statuses'));
    }


    public function updateTicketStatus(Request $request, $id)
    {
        // Find the ticket and update its status
        $ticket = Ticket::findOrFail($id);
        $ticket->status_id = $request->input('status_id');
        $ticket->save();

        return redirect()->route('admin.manage_tickets')->with('success', 'Ticket status updated successfully.');
    }

    public function viewTicket($id)
    {
        $ticket = Ticket::with('status', 'user')->findOrFail($id);

        return view('admin.view_ticket', compact('ticket'));
    }




    public function indexmessageUser($receiverId, $ticketId)
    {

        $userId = Auth::id();
        $ticket = Ticket::with('status', 'user')->findOrFail($ticketId);
        // Fetch all chat partners
        $chatPartners = Message::where('sender_id', $userId)
            ->orWhere('receiver_id', $userId)
            ->with('sender', 'receiver')
            ->get()
            ->map(function ($message) use ($userId) {
                return $message->sender_id == $userId ? $message->receiver : $message->sender;
            })
            ->unique('id'); // Prevent duplicates

        // Get the last message with each chat partner
        $chatPartners->map(function ($partner) use ($userId) {
            $lastMessage = Message::where(function ($query) use ($userId, $partner) {
                $query->where('sender_id', $userId)
                    ->where('receiver_id', $partner->id);
            })
                ->orWhere(function ($query) use ($userId, $partner) {
                    $query->where('sender_id', $partner->id)
                        ->where('receiver_id', $userId);
                })
                ->orderBy('created_at', 'desc')
                ->first();

            $partner->lastMessage = $lastMessage; // Attach last message to the partner
            return $partner;
        });

        $messages = collect();
        $receiver = null; // Default receiver to null

        if ($receiverId) {
            // Fetch the messages between the logged-in user and the selected receiver
            $messages = Message::where(function ($query) use ($userId, $receiverId) {
                $query->where('sender_id', $userId)
                    ->where('receiver_id', $receiverId);
            })
                ->orWhere(function ($query) use ($userId, $receiverId) {
                    $query->where('sender_id', $receiverId)
                        ->where('receiver_id', $userId);
                })
                ->orderBy('created_at', 'asc')
                ->get();

            // Update all messages sent to the logged-in user to mark them as read
            $unreadMessages = Message::where('receiver_id', $userId)
                ->where('sender_id', $receiverId)
                ->where('is_read', 0)
                ->update(['is_read' => 1]);

            $unreadMessages2 = Message::where('receiver_id', $receiverId)
                ->where('sender_id', $userId)
                ->where('is_read', 0)
                ->update(['is_read' => 1]);

            // Log::info('Unread messages marked as read', ['updatedRows' => $unreadMessages]);
            // Log::info('Unread messages marked as read', ['updatedRows' => $unreadMessages2]);


            // Fetch the user details of the receiver
            $receiver = User::find($receiverId);
        }

        return view('admin.message_center', compact('messages', 'receiverId', 'chatPartners', 'receiver', 'ticket'));
    }

    public function indexmessageUser2($receiverId)
    {

        $userId = Auth::id();
        // Fetch all chat partners
        $chatPartners = Message::where('sender_id', $userId)
            ->orWhere('receiver_id', $userId)
            ->with('sender', 'receiver')
            ->get()
            ->map(function ($message) use ($userId) {
                return $message->sender_id == $userId ? $message->receiver : $message->sender;
            })
            ->unique('id'); // Prevent duplicates

        // Get the last message with each chat partner
        $chatPartners->map(function ($partner) use ($userId) {
            $lastMessage = Message::where(function ($query) use ($userId, $partner) {
                $query->where('sender_id', $userId)
                    ->where('receiver_id', $partner->id);
            })
                ->orWhere(function ($query) use ($userId, $partner) {
                    $query->where('sender_id', $partner->id)
                        ->where('receiver_id', $userId);
                })
                ->orderBy('created_at', 'desc')
                ->first();

            $partner->lastMessage = $lastMessage; // Attach last message to the partner
            return $partner;
        });

        $messages = collect();
        $receiver = null; // Default receiver to null

        if ($receiverId) {
            // Fetch the messages between the logged-in user and the selected receiver
            $messages = Message::where(function ($query) use ($userId, $receiverId) {
                $query->where('sender_id', $userId)
                    ->where('receiver_id', $receiverId);
            })
                ->orWhere(function ($query) use ($userId, $receiverId) {
                    $query->where('sender_id', $receiverId)
                        ->where('receiver_id', $userId);
                })
                ->orderBy('created_at', 'asc')
                ->get();

            // Update all messages sent to the logged-in user to mark them as read
            $unreadMessages = Message::where('receiver_id', $userId)
                ->where('sender_id', $receiverId)
                ->where('is_read', 0)
                ->update(['is_read' => 1]);

            $unreadMessages2 = Message::where('receiver_id', $receiverId)
                ->where('sender_id', $userId)
                ->where('is_read', 0)
                ->update(['is_read' => 1]);

            // Log::info('Unread messages marked as read', ['updatedRows' => $unreadMessages]);
            // Log::info('Unread messages marked as read', ['updatedRows' => $unreadMessages2]);


            // Fetch the user details of the receiver
            $receiver = User::find($receiverId);
        }

        return view('admin.message_center2', compact('messages', 'receiverId', 'chatPartners', 'receiver'));
    }

    public function sendMessage2(Request $request)
    {
        $request->validate([
            'message_content' => 'required',
            'receiver_id' => 'required|exists:users,id',
        ]);

        Message::create([
            'sender_id' => Auth::id(),
            'receiver_id' => $request->receiver_id,
            'message_content' => $request->message_content,
            'is_read' => 0,
        ]);
        $userId = Auth::id();
        $user = User::where('id', $userId)->first();

        // $notification = new Notification();
        // $notification->user_id = $request->receiver_id; // Assign the notification to the user
        // $notification->message = 'Your received a new message from ' . $user->name;
        // $notification->message_ar = 'تلقيت رسالة جديدة من  ' . $user->name;

        // $notification->category = 'primary'; // Set the notification category as 'primary'
        // $notification->is_read = 0; // Mark the notification as unread
        // $notification->save();

        // Create a notification for the user
        $notification = new Notification();
        $notification->user_id =  $request->receiver_id; // Assign the notification to the user
        $notification->message = 'You have received a message from the support team regarding your ticket ';
        $notification->message_ar = 'تلقيت رسالة جديدة من فريق الدعم: ';

        $notification->category = 'primary'; // Set the notification category as 'primary'
        $notification->is_read = 0; // Mark the notification as unread
        $notification->save();



        return redirect()->route('chatadmin', ['receiverId' => $request->receiver_id]);
    }

    public function fetchMessages2($receiverId)
    {
        $userId = Auth::id();
        $messages = Message::where(function ($query) use ($userId, $receiverId) {
            $query->where('sender_id', $userId)
                ->where('receiver_id', $receiverId);
        })->orWhere(function ($query) use ($userId, $receiverId) {
            $query->where('sender_id', $receiverId)
                ->where('receiver_id', $userId);
        })
            ->orderBy('created_at', 'asc')
            ->get();

        return response()->json($messages);
    }



    public function sendMessage(Request $request)
    {
        $request->validate([
            'message_content' => 'required',
            'receiver_id' => 'required|exists:users,id',
        ]);

        Message::create([
            'sender_id' => Auth::id(),
            'receiver_id' => $request->receiver_id,
            'message_content' => $request->message_content,
            'is_read' => 0,
        ]);
        $userId = Auth::id();
        $user = User::where('id', $userId)->first();

        // $notification = new Notification();
        // $notification->user_id = $request->receiver_id; // Assign the notification to the user
        // $notification->message = 'Your received a new message from ' . $user->name;
        // $notification->message_ar = 'تلقيت رسالة جديدة من  ' . $user->name;

        // $notification->category = 'primary'; // Set the notification category as 'primary'
        // $notification->is_read = 0; // Mark the notification as unread
        // $notification->save();

        // Create a notification for the user
        $notification = new Notification();
        $notification->user_id =  $request->receiver_id; // Assign the notification to the user
        $notification->message = 'You have received a message from the support team regarding your ticket ';
        $notification->message_ar = 'تلقيت رسالة جديدة من فريق الدعم بما يتعلق بتذكرتك: ';

        $notification->category = 'primary'; // Set the notification category as 'primary'
        $notification->is_read = 0; // Mark the notification as unread
        $notification->save();



        return redirect()->route('chatadmin', ['receiverId' => $request->receiver_id, 'ticketId' => $request->ticket_id]);
    }

    public function fetchMessages($receiverId)
    {
        $userId = Auth::id();
        $messages = Message::where(function ($query) use ($userId, $receiverId) {
            $query->where('sender_id', $userId)
                ->where('receiver_id', $receiverId);
        })->orWhere(function ($query) use ($userId, $receiverId) {
            $query->where('sender_id', $receiverId)
                ->where('receiver_id', $userId);
        })
            ->orderBy('created_at', 'asc')
            ->get();

        return response()->json($messages);
    }




    public function manageGigs()
    {
        $gigs = Gig::with('status')->orderBy('created_at', 'desc')->get();
        $statuses = Status::where('status_category', 'gig')->get(); // Filter status for gigs

        return view('admin.gigs.gigs_manage', compact('gigs', 'statuses'));
    }

    public function updateGigStatus(Request $request, $id)
    {
        $gig = Gig::findOrFail($id);

        // Validate the status ID
        $request->validate([
            'status_id' => 'required|exists:statuses,id',
        ]);

        // Update the status
        $gig->status_id = $request->input('status_id');
        $gig->save();

        return redirect()->back()->with('success', 'Gig status updated successfully.');
    }

    public function editCategory($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.edit_category', compact('category'));
    }

    public function updateCategory(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->update($request->all());
        return redirect()->route('admin.gig_categories')->with('success', 'Category updated successfully.');
    }

    public function destroyCategory($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->route('admin.gig_categories')->with('success', 'Category deleted successfully.');
    }


    public function showProfile()
    {

        $user = Auth::user();
        // $user = User::find(1);
        // $deliveryInfo = DeliveryInfo::where('user_id', $user->id)->first();
        $deliveryInfo = DeliveryInfo::where('user_id', $user->id)->first();

        // dd($user);
        return view('admin.profile', compact('user', 'deliveryInfo'));
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'fullName' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:255',
            'location' => 'nullable|string',
            'city' => 'nullable|string',
            'building_no' => 'nullable|string',
            'profile_image' => 'nullable|image', // Validate image
        ]);

        // $user = Auth::user();
        $user = User::find(1);

        // Update User Info
        $user->name = $request->input('fullName');
        $user->email = $request->input('email');

        // Handle image upload
        if ($request->hasFile('profile_image')) {
            $image = $request->file('profile_image');
            $imagePath = $image->store('profile_images', 'public'); // Save image in storage/app/public/profile_images
            $user->image = $imagePath; // Save image path to the user
        }



        $user->save();

        // Update Delivery Info
        $deliveryInfo = DeliveryInfo::where('user_id', $user->id)->first();
        if ($deliveryInfo) {
            $deliveryInfo->phone = $request->input('phone');
            $deliveryInfo->city = $request->input('city');
            $deliveryInfo->location = $request->input('location');
            $deliveryInfo->building_no = $request->input('building_no');
            $deliveryInfo->save();
        } else {
            DeliveryInfo::create([
                'user_id' => $user->id,
                'phone' => $request->input('phone'),
                'city' => $request->input('city'),
                'location' => $request->input('location'),
                'building_no' => $request->input('building_no'),
            ]);
        }

        return redirect()->route('admin.profile')->with('success', 'Profile updated successfully');
    }
}
