<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DanhMuc;
use Dotenv\Validator as DotenvValidator;
use Illuminate\Auth\Events\Validated;
use Illuminate\Database\Eloquent\Model;
use Validator;
use Session;
use Storage;

class DanhMucController extends Controller
{
    public function index()
    {
        $dsDanhMuc = DanhMuc::paginate(5);
        return view('backend.danhmuc.index')->with('dsDanhMuc', $dsDanhMuc);
    }

    // action create: hiển thị form giao diện cho người dùng nhập liệu
    public function create()
    {
        return view('backend.danhmuc.create');
    }

    // action create -> luu -> action store
    public function store(Request $request)
    {
        $request->validate([
            'hinhanh.*' => 'image|mimes:jpeg,png,jpg,webp'
        ]);
        $validator = Validator::make(
            $request->all(),
            [
                'madanhmuc' => 'required|min:3|max:50'
            ],
            //messages
            [
                'madanhmuc.required' => 'Mã danh mục bắt buộc nhập',
                'madanhmuc.min' => 'Mã danh mục phải từ 3 ký tự trở lên',
                'madanhmuc.max' => 'Mã danh mục ít hơn 50 ký tự',
            ]
        );
        // Nếu kiểm tra ràng buộc dữ liệu thất bại -> tức là dữ liệu không hợp lệ
        // Chuyển hướng về view "Thêm mới" với,
        // - Thông báo lỗi vi phạm các quy luật.
        // - Dữ liệu cũ (người dùng đã nhập).
        if ($validator->fails()) {
            return redirect(route('backend.danhmuc.create'))
                ->withErrors($validator)
                ->withInput();
        }

        $newDM = new DanhMuc();
        $newDM->madanhmuc = $request->madanhmuc;
        $newDM->tendanhmuc = $request->tendanhmuc;
        $newDM->mota = $request->mota;
        //Kiểm tra người dùng có chọn tập tin hay k?
        if ($request->hasFile('hinhanh')) {
            $file = $request->hinhanh;
            // Sinh ra chuỗi ngày tháng năm giờ phút giây
            $newFileName = date('Ymd_His') . '_' . $file->getClientOriginalName();
            // Lưu vào Database
            $newDM->hinhanh = $newFileName;
            // Lưu vào Storage
            $file->storeAs('uploads/danhmuc/img', $newFileName, 'public');
        }
        $newDM->save();
        return redirect(route('backend.danhmuc.index'));
    }


    public function edit($id)
    {
        //Tìm dữ liệu
        $editModel = DanhMuc::find($id);
        return view('backend.danhmuc.edit')
            ->with('editModel', $editModel);
    }

    // action edit -> luu -> action update
    public function update($id, Request $request)
    {
        $editModel = DanhMuc::find($id);
        $editModel->madanhmuc = $request->madanhmuc;
        $editModel->tendanhmuc = $request->tendanhmuc;
        $editModel->mota = $request->mota;
        $editModel->hinhanh = $request->hinhanh;
        $editModel->created_at = date('Y-m-d H:i:s');
        // Kiểm tra xem người dùng có upload hình ảnh Đại diện hay không?
        if ($request->hasFile('sp_hinh')) {
            // Xóa hình cũ để tránh rác
            Storage::delete('public/photos/' . $editModel->hinhanh);

            // Upload hình mới
            // Lưu tên hình vào column sp_hinh
            $file = $request->hinhanh;
            $editModel->hinhanh = $file->getClientOriginalName();

            // Chép file vào thư mục "photos"
            $fileSaved = $file->storeAs('public/photos', $editModel->hinhanh);
        }
        $editModel->save();
        return redirect(route('backend.danhmuc.index'));
    }

    public function destroy($id)
    {
        DanhMuc::destroy($id);
        return redirect(route('backend.danhmuc.index'));
    }
}
