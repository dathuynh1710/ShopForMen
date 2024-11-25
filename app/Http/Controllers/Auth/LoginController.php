<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function show_login()
    {
        return view('auth.login.index');
    }

    public function dashboard()
    {
        return view('backend.dashboard.index');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate(
            [
                'email' => ['required', 'email'],
                'password' => ['required'],
            ],
            [
                'email.required' => 'Email is required',
                'email.email' => 'Email is not valid',
                'password.required' => 'Password is required',
            ]
        );

        // Attempt to log in the user
        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // Check if the user's account is inactive
            if ($user->trangthai === 0) {
                Auth::logout(); // Log out if the user is inactive
                $request->session()->flash('error', 'Your account is inactive!');
                return redirect()->route('auth.login.show'); // Redirect to the login page
            }

            $request->session()->flash('success', 'Đăng nhập thành công!');
            $request->session()->regenerate();

            return redirect()->intended(route('auth.login.dashboard'));
        }

        return back()->withErrors([
            'email' => 'Wrong email or password',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $request->session()->flash('success', 'Đăng xuất thành công!');
        return redirect(route('auth.login.show'));
    }
}
