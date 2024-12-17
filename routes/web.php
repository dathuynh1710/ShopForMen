<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DanhMucController;
use App\Http\Controllers\Backend\MatHangController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Backend\NguoiDungController;
use App\Http\Controllers\Frontend\KhachHangController;

use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\HomeController;
use App\Models\DanhMuc;
use App\Models\MatHang;
use App\Models\ThuongHieu;
use App\Models\NguoiDung;

//^ Frontend
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/shop', 'shop')->name('shop');
    // hiện thị sản phẩm theo danh mục
    Route::get('danh-muc/{id}', 'sanphamtheodanhmuc')->name('sanphamtheodanhmuc');
    Route::get('san-pham/{id}', 'chitietsanpham')->name('chitietsanpham');
    Route::get('/about', 'about')->name('about');
    Route::get('/contact', 'contact')->name('contact');

    // Trang giỏ hàng
    Route::get('/gio-hang', 'getGioHang')->name('giohang');
    Route::get('/gio-hang/them/{id}', 'getGioHang_Them')->name('giohang.them');
    Route::get('/gio-hang/xoa/{row_id}', 'getGioHang_Xoa')->name('giohang.xoa');
    Route::get('/gio-hang/giam/{row_id}', 'getGioHang_Giam')->name('giohang.giam');
    Route::get('/gio-hang/tang/{row_id}', 'getGioHang_Tang')->name('giohang.tang');
    Route::post('/gio-hang/cap-nhat', 'postGioHang_CapNhat')->name('giohang.capnhat');
});

// Trang khách hàng
Route::get('/khach-hang/dang-ky', [HomeController::class, 'getDangKy'])->name('user.dangky');
Route::get('/khach-hang/dang-nhap', [HomeController::class, 'getDangNhap'])->name('user.dangnhap');


// Trang tài khoản khách hàng
Route::prefix('khach-hang')->name('user.')->group(function () {
    // Trang chủ
    Route::get('/', [KhachHangController::class, 'getHome'])->name('home');
    Route::get('/home', [KhachHangController::class, 'getHome'])->name('home');

    // Đặt hàng
    Route::get('/dat-hang', [KhachHangController::class, 'getDatHang'])->name('dathang');
    Route::post('/dat-hang', [KhachHangController::class, 'postDatHang'])->name('dathang');
    Route::get('/dat-hang-thanh-cong', [KhachHangController::class, 'getDatHangThanhCong'])->name('dathangthanhcong');

    // Xem và cập nhật trạng thái đơn hàng
    Route::get('/don-hang', [KhachHangController::class, 'getDonHang'])->name('donhang');
    Route::get('/don-hang/{id}', [KhachHangController::class, 'getDonHang'])->name('donhang.chitiet');
    Route::post('/don-hang/{id}', [KhachHangController::class, 'postDonHang'])->name('donhang.chitiet');

    // Cập nhật thông tin tài khoản
    Route::get('/ho-so-ca-nhan', [KhachHangController::class, 'getHoSoCaNhan'])->name('hosocanhan');
    Route::post('/ho-so-ca-nhan', [KhachHangController::class, 'postHoSoCaNhan'])->name('hosocanhan');

    // Đăng xuất
    Route::post('/dang-xuat', [KhachHangController::class, 'postDangXuat'])->name('dangxuat');
});

//^ Login 
Route::get('/backend/login', [LoginController::class, 'show_login'])
    ->name('auth.login.show');
Route::post('/backend/login', [LoginController::class, 'authenticate'])
    ->name('auth.login.login');

//^ Backend
Route::middleware(['auth'])->group(function () {
    // * Auth
    Route::get('/backend', [LoginController::class, 'dashboard'])
        ->name('auth.login.dashboard');
    Route::get('/backend/logout', [LoginController::class, 'logout'])
        ->name('auth.login.logout');
    // * Danh muc
    Route::get('/backend/danhmuc', [DanhMucController::class, 'index'])
        ->name('backend.danhmuc.index');
    Route::get('/backend/danhmuc/search', [DanhMucController::class, 'search'])
        ->name('backend.danhmuc.search');
    Route::get('/backend/danhmuc/them', [DanhMucController::class, 'create'])
        ->name('backend.danhmuc.create');
    Route::post('/backend/danhmuc/store', [DanhMucController::class, 'store'])
        ->name('backend.danhmuc.store');
    Route::get('/backend/danhmuc/{id}', [DanhMucController::class, 'edit'])
        ->name('backend.danhmuc.edit');
    Route::put('/backend/danhmuc/{id}', [DanhMucController::class, 'update'])
        ->name('backend.danhmuc.update');
    Route::delete('/backend/danhmuc/{id}', [DanhMucController::class, 'destroy'])
        ->name('backend.danhmuc.destroy');
    // * Mat hang
    Route::get('/backend/mathang', [MatHangController::class, 'index'])
        ->name('backend.mathang.index');
    Route::get('/backend/mathang/search', [MatHangController::class, 'search'])
        ->name('backend.mathang.search');
    Route::get('/backend/mathang/them', [MatHangController::class, 'create'])
        ->name('backend.mathang.create');
    Route::post('/backend/mathang/store', [MatHangController::class, 'store'])
        ->name('backend.mathang.store');
    Route::get('/backend/mathang/{id}', [MatHangController::class, 'detail'])
        ->name('backend.mathang.detail');
    Route::get('/backend/mathang/{id}', [MatHangController::class, 'edit'])
        ->name('backend.mathang.edit');
    Route::put('/backend/mathang/{id}', [MatHangController::class, 'update'])
        ->name('backend.mathang.update');
    Route::delete('/backend/mathang/{id}', [MatHangController::class, 'destroy'])
        ->name('backend.mathang.destroy');
    Route::get('/backend/mathang/{id}/detail', [MatHangController::class, 'show'])
        ->name('backend.mathang.show');

    // * Nguoi dung
    Route::get('/backend/nguoidung', [NguoiDungController::class, 'index'])
        ->name('backend.nguoidung.index');
    Route::get('/backend/nguoidung/them', [NguoiDungController::class, 'create'])
        ->name('backend.nguoidung.create');
    Route::post('/backend/nguoidung/store', [NguoiDungController::class, 'store'])
        ->name('backend.nguoidung.store');
    Route::get('/backend/nguoidung/{id}', [NguoiDungController::class, 'edit'])
        ->name('backend.nguoidung.edit');
    Route::put('/backend/nguoidung/{id}', [NguoiDungController::class, 'update'])
        ->name('backend.nguoidung.update');
    Route::delete('/backend/nguoidung/{id}', [NguoiDungController::class, 'destroy'])
        ->name('backend.nguoidung.destroy');
    Route::get('/backend/nguoidung/hoso', [NguoiDungController::class, 'profile'])
        ->name('backend.nguoidung.profile');
    Route::get('/backend/nguoidung/hoso/doimk', [NguoiDungController::class, 'doimk'])
        ->name('backend.nguoidung.doimk');
    Route::post('/backend/nguoidung/hoso/capnhat-password', [NguoiDungController::class, 'xulydoimk'])->name('backend.nguoidung.capnhatpassword');
    Route::patch('/backend/{nd}/trangthai', [NguoiDungController::class, 'doiTrangThai'])->name('backend.nguoidung.doitrangthai');
});
