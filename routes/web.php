<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DanhMucController;
use App\Models\DanhMuc;
use App\Models\NhaCungCap;

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
