<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;

class CommunicationController extends Controller
{
    // Communication Center: Display conversations and handle pagination, search, etc.
    public function communicationCenter()
    {
        $groupedMessages = Message::with(['sender', 'receiver'])
            ->select('sender_id', 'receiver_id', DB::raw('MAX(created_at) as last_message_time'))
            ->groupBy('sender_id', 'receiver_id')
            ->orderBy('last_message_time', 'desc')
            ->get();



        return view('admin.communication_center', compact('groupedMessages'));
    }

    // Get the conversation between the sender and receiver
    public function getConversation($senderId, $receiverId)
    {
        $conversation = Message::with(['sender', 'receiver'])
            ->where(function ($query) use ($senderId, $receiverId) {
                $query->where('sender_id', $senderId)
                    ->where('receiver_id', $receiverId);
            })
            ->orWhere(function ($query) use ($senderId, $receiverId) {
                $query->where('sender_id', $receiverId)
                    ->where('receiver_id', $senderId);
            })
            ->orderBy('created_at', 'asc')
            ->get();

        return response()->json($conversation);
    }

    // // Fetch conversation between two users
    // public function chatConversation($userId)
    // {
    //     $messages = Message::with(['sender', 'receiver'])
    //         ->where(function ($q) use ($userId) {
    //             $q->where('sender_id', $userId)
    //                 ->orWhere('receiver_id', $userId);
    //         })
    //         ->orderBy('created_at', 'asc')
    //         ->get();

    //     return view('admin.chat_conversation', compact('messages'));
    // }
}
