<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Models\MatHang;
use App\Models\DanhMuc;
use App\Models\HinhAnhSanPham;
use App\Models\ThuongHieu;
use Dotenv\Validator as DotenvValidator;
use Illuminate\Auth\Events\Validated;
use Illuminate\Database\Eloquent\Model;
use Validator;
use Session;

class MatHangController extends Controller
{
    public function index()
    {
        $dsMatHang = MatHang::paginate(10);
        $totalMH = MatHang::count();
        $soMHNoiBat = MatHang::where('noibat', 1)->count();

        return view('backend.mathang.index', compact('totalMH', 'soMHNoiBat'))->with('dsMatHang', $dsMatHang);
    }


    // public function search(Request $request)
    // {
    //     $search = $request->search;
    //     $query = MatHang::query();
    //     $totalMH = MatHang::count();
    //     $soMHNoiBat = MatHang::where('noibat', 1)->count();
    //     $query->whereAny(['tenmathang'], 'LIKE', "%$search%");
    //     $dsMatHang = $query->get();

    //     return view('backend.mathang.index', compact('dsMatHang', 'totalMH', 'soMHNoiBat'));
    // }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $query = MatHang::query();
        $totalMH = MatHang::count();
        $soMHNoiBat = MatHang::where('noibat', 1)->count();
        if (!empty($search)) {
            $query->where('tenmathang', 'LIKE', "%$search%");
        }
        $dsMatHang = $query->paginate(10)->withQueryString();
        return view('backend.mathang.index', compact('dsMatHang', 'totalMH', 'soMHNoiBat'));
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
            'hinhanhs.*' => 'image|mimes:png,jpg,jpeg,webp'
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
        $newMH->created_at = date('Y-m-d H:i:s');
        if ($request->hasFile('hinhanh')) {
            $file = $request->hinhanh;
            $newFileName = date('Ymd_His') . '_' . $file->getClientOriginalName();
            // Lưu vào Database
            $newMH->hinhanh = $newFileName;
            // Lưu vào Storage
            $file->storeAs('uploads/mathang/img', $newFileName, 'public');
        }
        $newMH->save();
        if ($request->hasFile('hinhanhs')) {
            foreach ($request->file('hinhanhs') as $key => $file) {
                $fileNames = date('Ymd_His') . '_' . $file->getClientOriginalName();
                $file->storeAs('uploads/mathang/img', $fileNames, 'public');
                HinhAnhSanPham::create([
                    'mathang_id' => $newMH->id,
                    'hinhanh' => $fileNames
                ]);
            }
        }
        return redirect(route('backend.mathang.index'));
    }

    public function edit($id)
    {
        $matHang = MatHang::find($id);
        $danhMuc = DanhMuc::get();
        $thuongHieu = ThuongHieu::get();
        $anhs = HinhAnhSanPham::where('mathang_id', '=', $id)->get();
        return view('backend.mathang.edit')
            ->with('matHang', $matHang)
            ->with('danhMuc', $danhMuc)
            ->with('thuongHieu', $thuongHieu)
            ->with('anhs', $anhs);
    }

    // public function update($id, Request $request)
    // {
    //     $editMH = MatHang::find($id);
    //     $editMH->tenmathang = $request->tenmathang;
    //     $editMH->mota = $request->mota;
    //     $editMH->giagoc = $request->giagoc;
    //     $editMH->giaban = $request->giaban;
    //     $editMH->soluongton = $request->soluongton;
    //     $editMH->noibat = $request->noibat;
    //     $editMH->danhmuc_id = $request->danhmuc_id;
    //     $editMH->thuonghieu_id = $request->thuonghieu_id;
    //     $editMH->created_at = date('Y-m-d H:i:s');


    //     if ($request->hasFile('hinhanh')) {
    //         if ($editMH->hinhanh) {
    //             Storage::disk('public')->delete('uploads/mathang/img/' . $editMH->hinhanh);
    //         }
    //         $file = $request->file('hinhanh');
    //         $newFileName = date('Ymd_His') . '_' . $file->getClientOriginalName();
    //         $editMH->hinhanh = $newFileName;
    //         $file->storeAs('uploads/danhmuc/img', $newFileName, 'public');
    //     }
    //     $editMH->save();

    //     if ($request->hasFile('hinhanhs')) {
    //         $anhs = HinhAnhSanPham::where('mathang_id', '=', $id)->get();
    //         foreach ($anhs as $anh) {
    //             $filePath = 'uploads/mathang/img/' . $anh->hinhanh;
    //             // xóa file vật lý
    //             if (Storage::disk('public')->exists($filePath)) {
    //                 Storage::disk('public')->delete($filePath);
    //             }
    //             // xóa trong DB
    //             $anh->delete();
    //         }
    //         foreach ($request->file('hinhanhs') as $key => $file) {
    //             $fileNames = date('Ymd_His') . '_' . $file->getClientOriginalName();
    //             $file->storeAs('uploads/mathang/img', $fileNames, 'public');
    //             HinhAnhSanPham::create([
    //                 'mathang_id' => $id,
    //                 'hinhanh' => $fileNames
    //             ]);
    //         }
    //     }
    //     return redirect(route('backend.mathang.index'));
    // }
    public function update($id, Request $request)
    {
        $editMH = MatHang::find($id);
        $editMH->tenmathang = $request->tenmathang;
        $editMH->mota = $request->mota;
        $editMH->giagoc = $request->giagoc;
        $editMH->giaban = $request->giaban;
        $editMH->soluongton = $request->soluongton;
        $editMH->noibat = $request->noibat;
        $editMH->danhmuc_id = $request->danhmuc_id;
        $editMH->thuonghieu_id = $request->thuonghieu_id;
        $editMH->created_at = date('Y-m-d H:i:s');

        // Cập nhật ảnh chính
        if ($request->hasFile('hinhanh')) {
            // Xóa ảnh cũ nếu tồn tại
            if ($editMH->hinhanh) {
                Storage::disk('public')->delete('uploads/mathang/img/' . $editMH->hinhanh);
            }

            // Lưu ảnh mới
            $file = $request->file('hinhanh');
            $newFileName = date('Ymd_His') . '_' . $file->getClientOriginalName();
            $editMH->hinhanh = $newFileName;

            // Sửa lại thư mục lưu ảnh chính
            $file->storeAs('uploads/mathang/img', $newFileName, 'public');
        }

        $editMH->save(); // Lưu thông tin mặt hàng

        // Cập nhật ảnh phụ
        if ($request->hasFile('hinhanhs')) {
            $anhs = HinhAnhSanPham::where('mathang_id', '=', $id)->get();
            foreach ($anhs as $anh) {
                $filePath = 'uploads/mathang/img/' . $anh->hinhanh;
                // Xóa file vật lý
                if (Storage::disk('public')->exists($filePath)) {
                    Storage::disk('public')->delete($filePath);
                }
                // Xóa trong DB
                $anh->delete();
            }

            foreach ($request->file('hinhanhs') as $key => $file) {
                $fileNames = date('Ymd_His') . '_' . $file->getClientOriginalName();
                $file->storeAs('uploads/mathang/img', $fileNames, 'public');
                HinhAnhSanPham::create([
                    'mathang_id' => $id,
                    'hinhanh' => $fileNames
                ]);
            }
        }

        return redirect(route('backend.mathang.index'));
    }

    public function show($id)
    {
        $product = MatHang::with(['danhmuc', 'thuonghieu', 'hinhanh'])
            ->findOrFail($id);
        $product->mota = strip_tags($product->mota);
        $images = $product->hinhanh()->get();
        // $product->noibat = $product->noibat == 1 ? 'Nổi bật' : 'Không nổi bật';

        // Trả về view và truyền dữ liệu sản phẩm
        return view('backend.mathang.detail', compact('product', 'images'));
    }

    public function destroy($id)
    {
        try {
            // Tìm mặt hàng cần xóa
            $matHang = MatHang::findOrFail($id);

            // Xóa các ảnh phụ liên quan trong bảng hinhanh_sanpham và thư mục lưu trữ
            $anhs = HinhAnhSanPham::where('mathang_id', $id)->get();
            foreach ($anhs as $anh) {
                $filePath = 'uploads/mathang/img/' . $anh->hinhanh;
                // Xóa file ảnh phụ
                if (Storage::disk('public')->exists($filePath)) {
                    Storage::disk('public')->delete($filePath);
                }
                // Xóa trong DB
                $anh->delete();
            }

            // Xóa ảnh chính của mặt hàng nếu tồn tại
            if ($matHang->hinhanh) {
                $filePath = 'uploads/mathang/img/' . $matHang->hinhanh;
                if (Storage::disk('public')->exists($filePath)) {
                    Storage::disk('public')->delete($filePath);
                }
            }
            // Xóa mặt hàng
            $matHang->delete();
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Không thể xóa mặt hàng. Lỗi: ' . $e->getMessage(),
            ], 500);
        }
    }
}
