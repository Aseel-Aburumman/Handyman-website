<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Support\Facades\Auth;
use App\Models\Message;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function navbar()
    {
        // $user_id = Auth::id();
        $user_id = 1;

        $notifications = Notification::where('user_id', $user_id)
            ->orderBy('created_at', 'desc')
            ->get();

        $messages = Message::where('receiver_id', $user_id)
            ->with('sender') // Eager load the sender
            ->orderBy('created_at', 'desc')
            ->get();

        return view('admin.dashboard', compact('notifications', 'messages'));
    }

    public function notification()
    {
        // $user_id = Auth::id();
        $user_id = 1;

        Notification::where('user_id', $user_id)
            ->where('is_read', 0)
            ->update(['is_read' => 1]);


        $notifications = Notification::where('user_id', $user_id)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('admin.notification', compact('notifications'));
    }
}
