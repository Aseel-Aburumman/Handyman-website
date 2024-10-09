<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    // public function index($receiverId)
    // {
    //     $userId = Auth::id();

    //     // Fetch the messages between the logged-in user and the receiver
    //     $messages = Message::where(function ($query) use ($userId, $receiverId) {
    //         $query->where('sender_id', $userId)
    //             ->where('receiver_id', $receiverId);
    //     })
    //         ->orWhere(function ($query) use ($userId, $receiverId) {
    //             $query->where('sender_id', $receiverId)
    //                 ->where('receiver_id', $userId);
    //         })
    //         ->orderBy('created_at', 'asc')
    //         ->get();

    //     return view('chat.index', compact('messages', 'receiverId'));
    // }

    public function index($receiverId = null)
    {
        $userId = Auth::id();

        // Fetch all chat partners (users that the current user has chatted with)
        $chatPartners = Message::where('sender_id', $userId)
            ->orWhere('receiver_id', $userId)
            ->with('sender', 'receiver')
            ->get()
            ->map(function ($message) use ($userId) {
                return $message->sender_id == $userId ? $message->receiver : $message->sender;
            })
            ->unique('id'); // Prevent duplicates

        $messages = collect();

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
        }

        return view('chat.index', compact('messages', 'receiverId', 'chatPartners'));
    }


    public function sendMessage(Request $request)
    {
        $request->validate([
            'message_content' => 'required|string',
            'receiver_id' => 'required|integer'
        ]);

        Message::create([
            'sender_id' => Auth::id(),
            'receiver_id' => $request->receiver_id,
            'message_content' => $request->message_content,
            'is_read' => 0,
        ]);

        return redirect()->back();
    }
}
