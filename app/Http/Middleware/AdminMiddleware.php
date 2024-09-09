<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Check if the user is authenticated
        if (!Auth::check()) {
            return redirect('admin/b4login');
        }

        // Check if the authenticated user has the 'admin' role
        if (Auth::user()->role->name !== 'Admin') {
            // dd(Auth::user()->role);
            abort(403, 'Unauthorized access.');
        }

        return $next($request);
    }
}
