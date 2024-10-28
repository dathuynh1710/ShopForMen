<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DanhMuc;
use Illuminate\Database\Eloquent\Model;

class DanhMucController extends Controller
{
    public function index()
    {
        $dsDanhMuc = DanhMuc::all();
        return view('backend.danhmuc.index')->with('dsDanhMuc', $dsDanhMuc);
    }

    // action create: hiển thị form giao diện cho người dùng nhập liệu
    public function create()
    {
        return view('backend.danhmuc.create');
    }

    // action store: lưu dữ liệu vào DB
    public function store(Request $request)
    {
        $newModel = new DanhMuc();
        $newModel->madanhmuc = $request->madanhmuc;
        $newModel->tendanhmuc = $request->tendanhmuc;
        $newModel->mota = $request->mota;
        $newModel->hinhanh = $request->hinhanh;
        $newModel->created_at = date('Y-m-d H:i:s');
        $newModel->save();
        flash()->success('Thêm mới danh mục thành công.');
        return redirect(route('backend.danhmuc.index'));
    }

    public function edit($id)
    {
        //Tìm dữ liệu
        $editModel = DanhMuc::find($id);
        return view('backend.danhmuc.edit')
            ->with('editModel', $editModel);
    }

    //action Update
    public function update($id, Request $request)
    {
        $editModel = DanhMuc::find($id);
        $editModel->madanhmuc = $request->madanhmuc;
        $editModel->tendanhmuc = $request->tendanhmuc;
        $editModel->mota = $request->mota;
        $editModel->hinhanh = $request->hinhanh;
        $editModel->created_at = date('Y-m-d H:i:s');
        $editModel->save();
        flash()->success('Cập nhật danh mục thành công.');
        return redirect(route('backend.danhmuc.index'));
    }

    public function destroy($id)
    {
        DanhMuc::destroy($id);
        flash()->success('Xóa danh mục thành công.');
        return redirect(route('backend.danhmuc.index'));
    }
}
