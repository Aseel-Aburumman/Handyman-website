<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\View;
use App\Models\Notification;
use App\Models\Message;


class ShareNavbar
{
    public function handle($request, Closure $next)
    {
        // $userId = auth()->id(); // Get the currently authenticated user's ID
        $userId = 1; // Get the currently authenticated user's ID

        if ($userId) {
            $notifications = Notification::where('user_id', $userId)
                ->orderBy('created_at', 'desc')
                ->get();


            $messages = Message::where('receiver_id', $userId)
                ->where('is_read', 0)

                ->with('sender') // Eager load the sender
                ->orderBy('created_at', 'desc')
                ->get();
            View::share('notifications', $notifications);
            View::share('messages', $messages);
        }

        return $next($request);
    }
}
