<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class NguoiDungController extends Controller
{
    public function index()
    {
        $dsNguoiDung = User::all();
        return view('backend.nguoidung.index')->with('dsNguoiDung', $dsNguoiDung);
    }

    public function create()
    {
        return view('backend.nguoidung.create');
    }

    public function doiTrangThai(User $nd)
    {
        $nd->trangthai = $nd->trangthai == 1 ? 0 : 1;
        $nd->save();
        return redirect()->route('backend.nguoidung.index');
    }
}
