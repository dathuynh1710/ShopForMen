<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DanhMucController;
use App\Models\DanhMuc;
use App\Models\NhaCungCap;

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
