<?php


namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;

class AuthAdminController extends Controller
{
    // Display the login form
    public function showLoginForm()
    {
        return view('authAdmin.login'); // assuming your blade file is at resources/views/auth/login.blade.php
    }

    // Handle login
    public function login(Request $request)
    {
        // Validate the input data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        // Attempt to log the user in using email and password
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            return redirect()->intended('admin/dashboard');
        }


        // If authentication fails, throw an error
        throw ValidationException::withMessages([
            'email' => [trans('auth.failed')],
        ]);
    }

    public function showRegistrationForm()
    {
        return view('authAdmin.register'); // Assuming your blade file is named 'register.blade.php'
    }

    public function register(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Create the user
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Hash the password
            'role_id' => 1, // Admin role
            'rating' => 0,  // Default rating
            'date_created' => now(),
        ]);

        // Optionally, you can log the user in automatically
        // auth()->login($user);

        // Redirect to a specific page, e.g. dashboard
        return redirect()->route('admin.login')->with('success', 'Account created successfully!');
    }

    // Logout function
    public function logout(Request $request)
    {
        // Log out the user
        Auth::logout();

        // Invalidate the session
        $request->session()->invalidate();

        // Regenerate the session token to prevent session fixation attacks
        $request->session()->regenerateToken();

        // Redirect to login page
        return redirect()->route('admin.main')->with('success', 'You have successfully logged out.');
    }
}
