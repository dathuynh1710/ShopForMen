<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MatHang;
use App\Models\DanhMuc;
use App\Models\HinhAnhSanPham;
use App\Models\ThuongHieu;
use Dotenv\Validator as DotenvValidator;
use Illuminate\Auth\Events\Validated;
use Illuminate\Database\Eloquent\Model;
use Validator;
use Session;
use Storage;

class MatHangController extends Controller
{
    public function index()
    {
        $dsMatHang = MatHang::all();
        return view('backend.mathang.index')->with('dsMatHang', $dsMatHang);
    }

    public function create()
    {
        $listDanhMuc = DanhMuc::all();
        $listThuongHieu = ThuongHieu::all();
        return view('backend.mathang.create')
            ->with('listDanhMuc', $listDanhMuc)
            ->with('listThuongHieu', $listThuongHieu);
    }

    public function store(Request $request)
    {
        $request->validate([
            'hinhanh.*' => 'image|mimes:jpeg,png,jpg,webp'
        ]);

        $newMH = new MatHang();
        $newMH->tenmathang = $request->tenmathang;
        $newMH->mota = $request->mota;
        $newMH->giagoc = $request->giagoc;
        $newMH->giaban = $request->giaban;
        $newMH->soluongton = $request->soluongton;
        $newMH->noibat = $request->noibat;
        $newMH->danhmuc_id = $request->danhmuc_id;
        $newMH->thuonghieu_id = $request->thuonghieu_id;

        // if ($request->hasFile('hinhanh')) {
        //     $file = $request->hinhanh;
        //     // Sinh ra chuỗi ngày tháng năm giờ phút giây
        //     $newFileName = date('Ymd_His') . '_' . $file->getClientOriginalName();
        //     // Lưu vào Database
        //     $newMH->hinhanh = $newFileName;
        //     // Lưu vào Storage
        //     $file->storeAs('uploads/mathang', $newFileName, 'public');
        // }



        // if ($request->hasFile('hinhanh')) {
        //     $files = $request->file('hinhanh'); // Lấy danh sách các file (mảng)

        //     if (is_array($files)) { // Kiểm tra nếu là mảng
        //         foreach ($files as $file) {
        //             // Sinh ra tên file mới với thời gian
        //             $newFileName = date('Ymd_His') . '_' . $file->getClientOriginalName();

        //             // Lưu vào Storage
        //             $file->storeAs('uploads/mathang/img', $newFileName, 'public');

        //             // Ghi vào cơ sở dữ liệu (ví dụ nếu chỉ lưu tên của một file)
        //             $newMH->hinhanh = $newFileName;
        //         }
        //     } else {
        //         // Trường hợp chỉ có một file
        //         $newFileName = date('Ymd_His') . '_' . $files->getClientOriginalName();
        //         $files->storeAs('uploads/mathang/img', $newFileName, 'public');
        //         $newMH->hinhanh = $newFileName;
        //     }
        // }

        $newMH->created_at = date('Y-m-d H:i:s');
        $newMH->save();
        $anhData = [];
        if ($files = $request->file('hinhanh')) {
            foreach ($files as $key => $file) {
                $duoifile = $file->getClientOriginalExtension();
                $tenfile = $key . '-' . time() . '.' . $duoifile;
                $path = "uploads/mathang/img";
                $file->move($path, $tenfile);
                $tmp = [
                    'mathang_id' => $newMH->id,
                    'tenanh' => $path . $tenfile
                ];
                $anhData = $tmp;
            }
            // them cac anh vao csdl
            HinhAnhSanPham::insert($anhData);
        }



        return redirect(route('backend.mathang.index'));
    }

    public function edit($id)
    {
        $editModel = MatHang::find($id);
        return view('backend.mathang.edit')->with('editModel', $editModel);
    }

    public function update($id, Request $request)
    {
        $editModel = MatHang::find($id);
    }

    public function destroy($id)
    {
        MatHang::destroy($id);
        return redirect(route('backend.mathang.index'));
    }
}
