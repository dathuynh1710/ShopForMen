<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\DonHang;
use Illuminate\Http\Request;

class DonHangController extends Controller
{

    public function index()
    {
        $status = request('trangthai', 1); // Mặc định trạng thái là 1
        $dsDonHang = DonHang::with('TrangThai') // Eager loading để lấy trạng thái

            ->orderBy('id', 'DESC')
            ->where('trangthai_id', $status) // Sử dụng trangthai_id thay vì trangthai
            ->get();



        return view('backend.donhang.index', compact('dsDonHang'));
    }

    public function show(DonHang $order)
    {
        $auth = $order->nguoidung;
        $diachi = $order->diachi;
        return view('backend.donhang.detail', compact('auth', 'order', 'diachi'));
    }
    public function update(DonHang $order)
    {
        $trangthai_id = request('status', 1);
        if ($order->trangthai_id != 3) {
            $order->update(['trangthai_id' => $trangthai_id]);
            return redirect()->route('backend.donhang.index')->with('ok', 'Cập nhật trạng thái thành công');
        }
        return redirect()->route('backend.donhang.index')->with('no', 'Không thể cập nhật đơn hàng đã giao');
    }
}
