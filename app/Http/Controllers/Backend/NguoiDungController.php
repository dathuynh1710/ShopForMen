<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Support\Facades\File;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Storage;


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

    public function store(Request $request)
    {
        $request->validate([
            'hinhanh.*' => 'image|mimes:jpeg,png,jpg,webp'
        ]);
        // $validator = Validator::make(
        //     $request->all(),
        //     [
        //         'hoten' => 'required|min:3|max:50'
        //     ],
        //     //messages
        //     [
        //         'hoten.required' => 'Mã danh mục bắt buộc nhập',
        //         'hoten.min' => 'Mã danh mục phải từ 3 ký tự trở lên',
        //         'hoten.max' => 'Mã danh mục ít hơn 50 ký tự',
        //     ]
        // );
        // Nếu kiểm tra ràng buộc dữ liệu thất bại -> tức là dữ liệu không hợp lệ
        // Chuyển hướng về view "Thêm mới" với,
        // - Thông báo lỗi vi phạm các quy luật.
        // - Dữ liệu cũ (người dùng đã nhập).
        // if ($validator->fails()) {
        //     return redirect(route('backend.nguoidung.create'))
        //         ->withErrors($validator)
        //         ->withInput();
        // }

        $newUser = new User();
        $newUser->email = $request->email;
        $newUser->sodienthoai = $request->sodienthoai;
        $newUser->password = $request->password;
        $newUser->hoten = $request->hoten;
        $newUser->loai = $request->loai;
        $newUser->created_at = date('Y-m-d H:i:s');
        //Kiểm tra người dùng có chọn tập tin hay k?
        if ($request->hasFile('hinhanh')) {
            $file = $request->hinhanh;
            // Sinh ra chuỗi ngày tháng năm giờ phút giây
            $newFileName = date('Ymd_His') . '_' . $file->getClientOriginalName();
            // Lưu vào Database
            $newUser->hinhanh = $newFileName;
            // Lưu vào Storage
            $file->storeAs('uploads/nguoidung/img', $newFileName, 'public');
        }
        $newUser->save();
        return redirect(route('backend.nguoidung.index'));
    }

    public function edit($id)
    {
        //Tìm dữ liệu
        $nguoiDung = User::find($id);
        return view('backend.nguoidung.edit')
            ->with('nguoiDung', $nguoiDung);
    }

    // action edit -> luu -> action update
    public function update($id, Request $request)
    {
        $request->validate([
            'hinhanh' => 'nullable|image|mimes:jpeg,png,jpg,webp'
        ]);

        $editND = User::find($id);
        $editND->email = $request->email;
        $editND->sodienthoai = $request->sodienthoai;
        $editND->hoten = $request->hoten;
        $editND->loai = $request->loai;
        $editND->created_at = date('Y-m-d H:i:s');
        if ($request->hasFile('hinhanh')) {
            // Delete old image if exists
            if ($editND->hinhanh) {
                Storage::disk('public')->delete('uploads/nguoidung/img/' . $editND->hinhanh);
            }
            $file = $request->file('hinhanh');
            $newFileName = date('Ymd_His') . '_' . $file->getClientOriginalName();
            $editND->hinhanh = $newFileName;
            $file->storeAs('uploads/nguoidung/img', $newFileName, 'public');
        }
        $editND->save();
        return redirect(route('backend.nguoidung.index'));
    }


    public function destroy($id)
    {
        $danhmuc = User::findOrFail($id);
        File::delete(public_path('uploads/nguoidung/img' . $danhmuc->hinhanh));
        $danhmuc->delete();
        User::destroy($id);

        return redirect(route('backend.danhmuc.index'));
    }

    public function doiTrangThai(User $nd)
    {
        $nd->trangthai = $nd->trangthai == 1 ? 0 : 1;
        $nd->save();
        return redirect()->route('backend.nguoidung.index');
    }

    public function profile()
    {
        return view('backend.profile.index');
    }

    public function doimk()
    {
        return view('backend.profile.doimatkhau');
    }

    public function xulydoimk(Request $request)
    {
        $request->validate(
            [
                'old_password' => 'required',
                'new_password' => 'required|min:6|confirmed',
                'new_password_confirmation' => 'required',
            ],
            [
                'old_password.required' => 'Bắt buộc nhập mật khẩu cũ',
                'new_password.required' => 'Bắt buộc nhập mật khẩu mới',
                'new_password.min' => 'Mật khẩu mới phải có ít nhất 6 ký tự',
                'new_password.confirmed' => 'Xác nhận mật khẩu mới không khớp',
                'new_password_confirmation.required' => 'Bắt nhập nhập xác nhận mật khẩu',
            ]
        );

        $user = Auth::user();
        $user = User::find($user->id);

        if (!Hash::check($request->old_password, $user->password)) {
            return back()->withErrors([
                'old_password' => 'Mật khẩu cũ không đúng',
            ]);
        }

        $user->password = Hash::make($request->new_password);
        $user->save();

        $request->session()->flash('success', 'Cập nhật mật khẩu thành công!');
        return redirect()->route('backend.nguoidung.profile');
    }
}
