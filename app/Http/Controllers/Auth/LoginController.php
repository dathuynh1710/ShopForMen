<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\MatHang;
use App\Models\User;
use App\Models\DonHang;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    public function show_login()
    {
        return view('auth.login.index');
    }

    public function dashboard()
    {
        $totalMH = MatHang::count();
        $totalDH = DonHang::count();
        $totalUser = User::where('loai', 3)->count();
        $totalRevenue = DonHang::sum('tongtien');
        return view('backend.dashboard.index', compact('totalMH', 'totalDH', 'totalUser', 'totalRevenue'));
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate(
            [
                'email' => ['required', 'email'],
                'password' => ['required'],
            ],
            [
                'email.required' => 'Email bắt buộc nhập',
                'email.email' => 'Email không hợp lệ',
                'password.required' => 'Password bắt buộc nhập',
            ]
        );

        // Attempt to log in the user
        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // Check if the user's account is inactive
            if ($user->trangthai === 0) {
                Auth::logout(); // Log out if the user is inactive
                return back()->with('error', 'Tài khoản của bạn đã bị vô hiệu hóa');
            }
            $request->session()->flash('success', 'Đăng nhập thành công!');
            $request->session()->regenerate();
            return redirect()->intended(route('auth.login.dashboard'))->with('success', 'Đăng nhập thành công!');
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
        return redirect(route('auth.login.show'))->with('success', 'Đăng xuất thành công!');
    }
}
