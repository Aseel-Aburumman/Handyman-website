<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\Notification;

use App\Models\User;
use Illuminate\Support\Facades\Log;

use Illuminate\Support\Facades\Auth;


class ChatController extends Controller
{

    public function index($receiverId = null)
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

        return view('chat.index', compact('messages', 'receiverId', 'chatPartners', 'receiver'));
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

        $notification = new Notification();
        $notification->user_id = $request->receiver_id; // Assign the notification to the user
        $notification->message = 'Your received a new message from ' . $user->name;
        $notification->message_ar = 'تلقيت رسالة جديدة من  ' . $user->name;

        $notification->category = 'primary'; // Set the notification category as 'primary'
        $notification->is_read = 0; // Mark the notification as unread
        $notification->save();



        return redirect()->route('chat', ['receiverId' => $request->receiver_id]);
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

}
