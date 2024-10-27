<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DanhMucController;

Route::get('/backend/danhmuc', [DanhMucController::class, 'index'])
    ->name('backend.danhmuc.index');
