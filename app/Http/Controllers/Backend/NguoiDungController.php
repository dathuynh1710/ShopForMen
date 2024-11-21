<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\NguoiDung;
use Illuminate\Http\Request;

class NguoiDungController extends Controller
{
    public function index()
    {
        // $dsNguoiDung = NguoiDung::all();
        return view('backend.nguoidung.index');
        // ->with('dsNguoiDung', $dsNguoiDung);
    }
}
