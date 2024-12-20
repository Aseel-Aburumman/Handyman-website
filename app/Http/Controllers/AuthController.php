<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            // if (session()->has('redirect_after_login')) {
            if (session()->has('from_step_3')) {

                // Remove the session flag after redirection
                // $redirectUrl = session('redirect_after_login');
                // $redirectUrl = session('redirect_after_login');

                // session()->forget('redirect_after_login');
                // session()->forget('from_step_3');
                // return redirect($redirectUrl);
                return redirect()->route('gig.step4');
            } else {
                $request->session()->regenerate();

                // Check the role and redirect accordingly
                $user = Auth::user();

                switch ($user->role_id) {
                    case 4: // handyman role
                        return redirect()->route('handyman.Home');
                    case 2: // Regular User role
                        return redirect()->route('customer.dashboard');
                    case 3: // storeowner role
                        return redirect()->route('storeowner.Home');

                    default:
                        return redirect()->route('home'); // Default redirect for undefined roles
                }
            }
        }

        throw ValidationException::withMessages([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role_id' => 2,
            'rating' => 0,  // Default rating
            'date_created' => now(),
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect('/login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
