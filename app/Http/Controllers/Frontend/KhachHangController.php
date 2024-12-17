<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;

use App\Models\DonHang;
use App\Models\ChiTietDonHang;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;

class KhachHangController extends Controller
{
    public function getHome()
    {
        if (Auth::check()) {
            $nguoidung = User::find(Auth::user()->id);
            return view('user.home', compact('nguoidung'));
        } else
            return redirect()->route('user.dangnhap');
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
        // $this->validate($request, [
        //     'diachi_id' => ['required', 'string', 'max:255'],
        //     'sodienthoai' => ['required', 'string', 'max:255'],
        // ]);

        // Lưu vào đơn hàng
        $dh = new DonHang();
        $dh->nguoidung_id = Auth::user()->id;
        $dh->tinhtrang_id = 1; // Đơn hàng mới
        $dh->diachigiaohang = $request->diachigiaohang;
        $dh->dienthoaigiaohang = $request->dienthoaigiaohang;
        $dh->save();

        // Lưu vào đơn hàng chi tiết
        foreach (Cart::content() as $value) {
            $ct = new ChiTietDonHang();
            $ct->donhang_id = $dh->id;
            $ct->sanpham_id = $value->id;
            $ct->soluongban = $value->qty;
            $ct->dongiaban = $value->price;
            $ct->save();
        }

        return redirect()->route('user.dathangthanhcong');
    }

    public function getDatHangThanhCong()
    {
        // Xóa giỏ hàng khi hoàn tất đặt hàng?
        Cart::destroy();

        return view('user.dathangthanhcong');
    }
}
