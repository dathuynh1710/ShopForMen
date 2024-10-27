<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DanhMucController;
use App\Models\DanhMuc;
use App\Models\NhaCungCap;

Route::get('/backend/danhmuc', [DanhMucController::class, 'index'])
    ->name('backend.danhmuc.index');

Route::get('/test-model-danhmuc', function () {
    $lstDanhMuc = DanhMuc::all();
    dd($lstDanhMuc);
});
