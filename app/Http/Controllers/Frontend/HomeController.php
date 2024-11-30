<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
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
        $sanphams = MatHang::orderBy('created_at', 'DESC')->paginate(16);
        return view('clients.shop', ['sanphams' => $sanphams]);
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
