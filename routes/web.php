<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DanhMucController;
use App\Http\Controllers\Backend\MatHangController;
use App\Http\Controllers\Auth\LoginController;
use App\Models\DanhMuc;
use App\Models\MatHang;
use App\Models\ThuongHieu;

// ! Frontend
Route::get('/', function () {
    return view('frontend.index');
})->name('home');
Route::get('/shop', function () {
    return view('frontend.shop');
})->name('shop');
Route::get('/blog', function () {
    return view('frontend.blog');
})->name('blog');
Route::get('/about', function () {
    return view('frontend.about');
})->name('about');
Route::get('/cart', function () {
    return view('frontend.cart');
})->name('cart');
Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');

//^ Backend
// * Auth
Route::get('/backend/login', [LoginController::class, 'index'])
    ->name('auth.login.index');
Route::post('/backend/login', [LoginController::class, 'login'])
    ->name('auth.login.login');
Route::post('/backend/logout', [LoginController::class, 'logout'])
    ->name('auth.login.logout');
// * Danh muc
Route::get('/backend/danhmuc', [DanhMucController::class, 'index'])
    ->name('backend.danhmuc.index');
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
Route::get('/backend/mathang/them', [MatHangController::class, 'create'])
    ->name('backend.mathang.create');
Route::post('/backend/mathang/store', [MatHangController::class, 'store'])
    ->name('backend.mathang.store');
Route::get('/backend/mathang/{id}', [MatHangController::class, 'edit'])
    ->name('backend.mathang.edit');
Route::delete('/backend/mathang/{id}', [MatHangController::class, 'destroy'])
    ->name('backend.mathang.destroy');
