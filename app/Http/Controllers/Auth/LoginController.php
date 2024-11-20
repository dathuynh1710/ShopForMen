<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    //Sau khi đăng nhập thành công, sẽ tự động trỏ về trang /admin/
    protected $redirectTo = 'backend/danhmuc';

    public function index()
    {
        return view('auth.login.index');
    }

    public function username()
    {
        return 'email';
    }

    protected function credentials(Request $request)
    {
        $cred = $request->only($this->username(), 'matkhau');
        return $cred;
    }

    protected function validateLogin(Request $request)
    {
        $request->validate([
            $this->username() => 'required|string', // tên tài khoản bắt buộc nhập
            'matkhau' => 'required|string',       // mật khẩu bắt buộc nhập
        ]);
    }

    protected function attemptLogin(Request $request)
    {
        return $this->guard()->attempt(
            $this->credentials($request),
            $request->filled('remember')
        );
    }
}
