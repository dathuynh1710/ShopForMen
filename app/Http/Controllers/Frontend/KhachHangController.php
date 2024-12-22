<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use Illuminate\Auth\Events\Validated;
use App\Models\DonHang;
use App\Models\ChiTietDonHang;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\DiaChi;
use App\Models\MatHang;
use Illuminate\Support\Facades\Hash;

class KhachHangController extends Controller
{
    public function getHome()
    {
        if (Auth::check()) {
            $nguoidung = User::find(Auth::user()->id);
            return view('clients.user.home', compact('nguoidung'));
        } else
            return redirect()->route('clients.user.dangnhap');
    }

    public function getDatHang()
    {
        if (Auth::check())
            return view('clients.user.dathang');
        else
            return redirect()->route('user.dangnhap');
    }

    public function postDatHang(Request $request)
    {
        // Kiểm tra
        $total = Cart::total(0, '', '') + config('cart.shipping_fee');
        $diachiGiaoHang = Auth::user()->diachi()->where('macdinh', 1)->first();
        // Lưu vào đơn hàng
        $dh = new DonHang();
        $dh->nguoidung_id = Auth::user()->id;
        $dh->diachi_id = $diachiGiaoHang->id;
        $dh->ngay = date('Y-m-d H:i:s');
        $dh->tongtien = $total;
        $dh->trangthai_id = 1;
        $dh->save();

        // Lưu vào đơn hàng chi tiết
        foreach (Cart::content() as $value) {
            $ct = new ChiTietDonHang();
            $ct->donhang_id = $dh->id;
            $ct->mathang_id = $value->id;
            $ct->soluong = $value->qty;
            $ct->dongia = $value->price;
            $ct->thanhtien = $value->total;
            $ct->save();
        }

        return redirect()->route('user.dathangthanhcong');
    }

    public function getDatHangThanhCong()
    {
        // Xóa giỏ hàng khi hoàn tất đặt hàng?
        Cart::destroy();

        return view('clients.user.dathangthanhcong');
    }

    public function getDonHang()
    {
        if (Auth::check()) {
            $nguoidung = Auth::user();
            $donhangs = DonHang::where('nguoidung_id', $nguoidung->id)
                ->with(['ctdonhang.mathang']) // Load chi tiết đơn hàng và thông tin mặt hàng
                ->get();
            return view('clients.user.donhang', compact('nguoidung', 'donhangs'));
        } else {
            return redirect()->route('user.dangnhap');
        }
    }

    public function postDonHang(Request $request, $id)
    {
        // Bổ sung code tại đây
    }

    public function getHoSoCaNhan()
    {
        return redirect()->route('user.home');
    }

    public function postHoSoCaNhan(Request $request)
    {
        $id = Auth::user()->id;

        $request->validate([
            'hoten' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $id],
            'password' => ['confirmed'],
        ]);

        $ngdung = User::find($id);
        $ngdung->hoten = $request->hoten;
        $ngdung->email = $request->email;
        $ngdung->sodienthoai = $request->sodienthoai;
        if (!empty($request->password)) $ngdung->password = Hash::make($request->password);
        $ngdung->save();

        return redirect()->route('user.home')->with('success', 'Đã cập nhật thông tin thành công.');
    }

    public function getDoiMatKhau()
    {
        if (Auth::check()) {
            $nguoidung = Auth::user();
        } else {
            return redirect()->route('user.dangnhap');
        }
        return view('clients.user.doimatkhau', compact('nguoidung'));
    }

    public function postDoiMatKhau(Request $request)
    {
        $request->validate(
            [
                'old_password' => 'required',
                'new_password' => 'required|min:6|confirmed',
                'new_password_confirmation' => 'required',
            ],
            [
                'old_password.required' => 'Bắt buộc nhập mật khẩu cũ',
                'new_password.required' => 'Bắt buộc nhập mật khẩu mới',
                'new_password.min' => 'Mật khẩu mới phải có ít nhất 6 ký tự',
                'new_password.confirmed' => 'Xác nhận mật khẩu mới không khớp',
                'new_password_confirmation.required' => 'Bắt nhập nhập xác nhận mật khẩu',
            ]
        );

        $user = Auth::user();
        $user = User::find($user->id);

        if (!Hash::check($request->old_password, $user->password)) {
            return back()->withErrors([
                'old_password' => 'Mật khẩu cũ không đúng',
            ])->withInput();
        }

        $user->password = Hash::make($request->new_password);
        $user->save();

        return redirect()->route('user.home')->with('success', 'Cập nhật mật khẩu thành công!');
    }


    public function postDangXuat(Request $request)
    {
        Auth::logout();
        // Bổ sung code tại đây
        return redirect()->route('home')->with('success', 'Đăng xuất thành công');
    }
}
