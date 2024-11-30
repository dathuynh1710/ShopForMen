<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\DanhMuc;
use App\Models\MatHang;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('clients.index');
    }
    public function shop()
    {
        $dmsps = DanhMuc::all();
        $sanphams = MatHang::orderBy('created_at', 'DESC')->paginate(16);
        $totalMH = MatHang::count();
        return view('clients.shop', [
            'sanphams' => $sanphams,
            'totalMH' => $totalMH,
            'dmsps' => $dmsps
        ]);
    }

    public function sanphamtheodanhmuc($id)
    {
        $danhmuc = DanhMuc::findOrFail($id);
        $dmsps = DanhMuc::all();
        $sanphams = MatHang::where('danhmuc_id', $id)
            ->orderBy('created_at', 'DESC')
            ->paginate(16);
        $totalMH = $sanphams->total();

        return view('clients.shop', [
            'sanphams' => $sanphams,
            'totalMH' => $totalMH,
            'danhmuc' => $danhmuc,
            'dmsps' => $dmsps,
        ]);
    }

    public function chitietsanpham($id)
    {
        // Lấy sản phẩm theo ID
        $sanphams = MatHang::findOrFail($id);

        // Lấy danh mục của sản phẩm
        $danhmuc = $sanphams->danhmuc;

        // Lấy các sản phẩm liên quan trong cùng danh mục
        $sanphamLienQuan = MatHang::where('danhmuc_id', $sanphams->danhmuc_id)
            ->where('id', '!=', $id) // Loại trừ sản phẩm hiện tại
            ->orderBy('created_at', 'DESC')
            ->take(4) // Giới hạn số lượng sản phẩm liên quan
            ->get();

        // Trả dữ liệu về view
        return view('clients.sanpham', [
            'sanphams' => $sanphams,
            'danhmuc' => $danhmuc,
            'sanphamLienQuan' => $sanphamLienQuan,
        ]);
    }

    public function blog()
    {
        return view('clients.blog');
    }
    public function about()
    {
        return view('clients.about');
    }
    public function contact()
    {
        return view('clients.contact');
    }
}
