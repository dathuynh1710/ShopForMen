<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use Session;
use Storage;
use App\Models\ThuongHieu;
use Illuminate\Support\Facades\File;

class ThuongHieuController extends Controller
{
    public function index()
    {
        $dsThuongHieu = ThuongHieu::all();
        return view('backend.thuonghieu.index')->with('dsThuongHieu', $dsThuongHieu);
    }

    public function search(Request $request)
    {
        $search = $request->search;
        $query = ThuongHieu::query();
        $query->whereAny(['tenth', 'math'], 'LIKE', "%$search%");
        $dsThuongHieu = $query->get();
        return view('backend.thuonghieu.index', compact('dsThuongHieu'));
    }
    public function create()
    {
        return view('backend.thuonghieu.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'hinhanh.*' => 'image|mimes:jpeg,png,jpg,webp'
        ]);
        $validator = Validator::make(
            $request->all(),
            [
                'math' => 'required|min:2|max:50'
            ],
            //messages
            [
                'math.required' => 'Mã thương hiệu bắt buộc nhập',
                'math.min' => 'Mã thương hiệu  phải từ 2 ký tự trở lên',
                'math.max' => 'Mã thương hiệu ít hơn 50 ký tự',
            ]
        );
        // Nếu kiểm tra ràng buộc dữ liệu thất bại -> tức là dữ liệu không hợp lệ
        // Chuyển hướng về view "Thêm mới" với,
        // - Thông báo lỗi vi phạm các quy luật.
        // - Dữ liệu cũ (người dùng đã nhập).
        if ($validator->fails()) {
            return redirect(route('backend.thuonghieu.create'))
                ->withErrors($validator)
                ->withInput();
        }
        $newTH = new ThuongHieu();
        $newTH->math = $request->math;
        $newTH->tenth = $request->tenth;
        $newTH->mota = $request->mota;
        $newTH->created_at = date('Y-m-d H:i:s');
        //Kiểm tra người dùng có chọn tập tin hay k?
        if ($request->hasFile('hinhanh')) {
            $file = $request->hinhanh;
            // Sinh ra chuỗi ngày tháng năm giờ phút giây
            $newFileName = date('Ymd_His') . '_' . $file->getClientOriginalName();
            // Lưu vào Database
            $newTH->hinhanh = $newFileName;
            // Lưu vào Storage
            $file->storeAs('uploads/thuonghieu/img', $newFileName, 'public');
        }
        $newTH->save();
        return redirect(route('backend.thuonghieu.index'));
    }

    public function edit($id)
    {
        $editModel = ThuongHieu::find($id);
        return view('backend.thuonghieu.edit')
            ->with('editModel', $editModel);
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'hinhanh' => 'nullable|image|mimes:jpeg,png,jpg,webp'
        ]);

        $editTH = ThuongHieu::find($id);
        $editTH->math = $request->math;
        $editTH->tenth = $request->tenth;
        $editTH->mota = $request->mota;
        $editTH->created_at = date('Y-m-d H:i:s');
        if ($request->hasFile('hinhanh')) {
            // Delete old image if exists
            if ($editTH->hinhanh) {
                Storage::disk('public')->delete('uploads/thuonghieu/img/' . $editTH->hinhanh);
            }
            $file = $request->file('hinhanh');
            $newFileName = date('Ymd_His') . '_' . $file->getClientOriginalName();
            $editTH->hinhanh = $newFileName;
            $file->storeAs('uploads/thuonghieu/img', $newFileName, 'public');
        }
        $editTH->save();
        return redirect(route('backend.thuonghieu.index'));
    }

    public function destroy($id)
    {
        $thuonghieu = ThuongHieu::findOrFail($id);
        File::delete(public_path('uploads/thuonghieu/img' . $thuonghieu->hinhanh));
        $thuonghieu->delete();
        return redirect(route('backend.thuonghieu.index'));
    }
}
