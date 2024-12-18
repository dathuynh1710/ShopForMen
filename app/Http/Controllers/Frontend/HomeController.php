<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\DanhMuc;
use App\Models\MatHang;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Socialite;

class HomeController extends Controller
{
    public function home()
    {
        $dmsps = DanhMuc::all();
        // danh sách sản phẩm nổi bật
        $sanphams = MatHang::where('noibat', 1)->orderBy('created_at', 'DESC')->paginate(16);
        // danh sách sản phẩm mới
        $sanphamnew = MatHang::orderBy('created_at', 'DESC')->take(8)->get();
        // Sắp xếp số lượng tồn từ thấp đến cao
        $sanphamcosptonmin = MatHang::orderBy('soluongton', 'ASC')->take(8)->get();
        // đếm số lượng sản phẩm
        $totalMH = MatHang::count();
        return view('clients.home.index', [
            'sanphams' => $sanphams,
            'totalMH' => $totalMH,
            'dmsps' => $dmsps,
            'sanphamnew' => $sanphamnew,
            'sanphamcosptonmin' => $sanphamcosptonmin,
        ]);
    }
    public function shop()
    {
        $dmsps = DanhMuc::all();
        $sanphams = MatHang::orderBy('created_at', 'DESC')->paginate(16);
        $totalMH = MatHang::count();
        return view('clients.home.shop', [
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

        return view('clients.home.shop', [
            'sanphams' => $sanphams,
            'totalMH' => $totalMH,
            'danhmuc' => $danhmuc,
            'dmsps' => $dmsps,
        ]);
    }

    public function chitietsanpham($id)
    {
        $sanpham = MatHang::where('id', '=', $id)->first();
        // $sanphamlienquan = MatHang::where('danhmuc_id', $sanpham->danhmuc_id)->get();
        $sanphamlienquan = MatHang::where('danhmuc_id', $sanpham->danhmuc_id)
            ->where('id', '!=', $id) // Loại trừ sản phẩm hiện tại
            ->orderBy('created_at', 'DESC')
            ->take(4) // Giới hạn số lượng sản phẩm liên quan
            ->get();
        return view('clients.home.sanpham', ['sanpham' => $sanpham, 'sanphamlienquan' => $sanphamlienquan]);
    }


    public function about()
    {
        return view('clients.home.about');
    }
    public function contact()
    {
        return view('clients.home.contact');
    }
    public function getGioHang()
    {
        if (Cart::count() > 0)
            return view('clients.cart.cart');
        else
            return view('clients.cart.emptycart');
    }

    public function getGioHang_Them($id = 0)
    {
        $sanpham = MatHang::find($id);

        Cart::add([
            'id' => $sanpham->id,
            'name' => $sanpham->tenmathang,
            'price' => $sanpham->giaban,
            'qty' => 1,
            'weight' => 0,
            'options' => [
                'image' => $sanpham->hinhanh
            ]
        ]);

        return redirect()->route('shop');
    }

    public function getGioHang_Xoa($row_id)
    {
        Cart::remove($row_id);
        return redirect()->route('giohang');
    }

    public function getGioHang_Giam($row_id)
    {
        $row = Cart::get($row_id);
        // Nếu số lượng là 1 thì không giảm được nữa
        if ($row->qty > 1) {
            Cart::update($row_id, $row->qty - 1);
        }
        return redirect()->route('giohang');
    }

    public function getGioHang_Tang($row_id)
    {
        $row = Cart::get($row_id);

        // Không được tăng vượt quá 10 sản phẩm
        if ($row->qty < 10) {
            Cart::update($row_id, $row->qty + 1);
        }

        return redirect()->route('giohang');
    }

    public function postGioHang_CapNhat(Request $request)
    {
        foreach ($request->qty as $row_id => $quantity) {
            if ($quantity <= 0)
                Cart::update($row_id, 1);
            else if ($quantity > 10)
                Cart::update($row_id, 10);
            else
                Cart::update($row_id, $quantity);
        }
        return redirect()->route('giohang');
    }
}
