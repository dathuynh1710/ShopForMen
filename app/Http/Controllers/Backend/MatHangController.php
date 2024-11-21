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
        $dsMatHang = MatHang::paginate(10);
        $totalMH = MatHang::count();
        $soMHNoiBat = MatHang::where('noibat', 1)->count();

        return view('backend.mathang.index', compact('totalMH', 'soMHNoiBat'))->with('dsMatHang', $dsMatHang);
    }


    public function search(Request $request)
    {
        $search = $request->search;
        $result = MatHang::where(function ($query) use ($search) {
            $query->where('tenmathang', 'like', "%$search%");
        })
            ->get();

        return view('backend.mathang.index', compact('result', 'search'));
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
        $newMH = new MatHang();
        $newMH->tenmathang = $request->tenmathang;
        $newMH->mota = $request->mota;
        $newMH->giagoc = $request->giagoc;
        $newMH->giaban = $request->giaban;
        $newMH->soluongton = $request->soluongton;
        $newMH->noibat = $request->noibat;
        $newMH->danhmuc_id = $request->danhmuc_id;
        $newMH->thuonghieu_id = $request->thuonghieu_id;
        $newMH->created_at = date('Y-m-d H:i:s');
        if ($request->hasFile('hinhanh')) {
            $file = $request->hinhanh;
            $newFileName = date('Ymd_His') . '_' . $file->getClientOriginalName();
            // Lưu vào Database
            $newMH->hinhanh = $newFileName;
            // Lưu vào Storage
            $file->storeAs('uploads/mathang/img', $newFileName, 'public');
        }
        try {
            $matHang = MatHang::create($request->all());
            if ($matHang && $request->hasFile('hinhanhs')) {
                foreach ($request->hinhanhs as $key => $value) {
                    $fileNames = date('Ymd_His') . '_' . $value->getClientOriginalName();
                    $value->storeAs('uploads/mathang/img', $fileNames, 'public');
                    HinhAnhSanPham::create([
                        'mathang_id' => $matHang->id,
                        'hinhanh' => $fileNames
                    ]);
                }
            }
        } catch (\Throwable $th) {
            // throw $th
        }
        $newMH->save();
        return redirect(route('backend.mathang.index'));
    }

    public function edit($id)
    {
        $editModel = MatHang::find($id);
        return view('backend.mathang.edit')
            ->with('editModel', $editModel);
    }

    public function update($id, Request $request)
    {
        $listDanhMuc = DanhMuc::all();
        $listThuongHieu = ThuongHieu::all();
        return view('backend.mathang.create')
            ->with('listDanhMuc', $listDanhMuc)
            ->with('listThuongHieu', $listThuongHieu);

        $editMH = MatHang::find($id);
        $editMH->madanhmuc = $request->madanhmuc;
        $editMH->tendanhmuc = $request->tendanhmuc;
        $editMH->mota = $request->mota;
        $editMH->save();
        return redirect(route('backend.mathang.index'));
    }

    public function detail(Request $request, $id)
    {
        try {
            // Tìm mặt hàng theo ID
            $mathang = MatHang::find($id);

            // Kiểm tra nếu mặt hàng không tồn tại
            if (!$mathang) {
                return redirect()->route('backend.mathang.index')
                    ->with('error', 'Mặt hàng không tồn tại.');
            }

            // Nếu tìm thấy, trả về view hiển thị chi tiết
            return view('backend.mathang.detail', compact('mathang'));
        } catch (\Exception $e) {
            // Xử lý lỗi bất ngờ
            return redirect()->route('backend.mathang.index')
                ->with('error', 'Đã xảy ra lỗi khi lấy thông tin mặt hàng.');
        }
    }


    public function destroy($id)
    {
        MatHang::destroy($id);
        return redirect(route('backend.mathang.index'));
    }
}
