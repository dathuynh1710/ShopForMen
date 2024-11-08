<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\DanhMuc;
use App\Models\ThuongHieu;
use App\Models\HinhAnhSanPham;
use App\Models\ChiTietDonHang;

class MatHang extends Model
{
    use HasFactory;
    protected $table = 'mathang';
    protected $fillable = [
        'tenmathang',
        'mota',
        'giagoc',
        'giaban',
        'soluongton',
        'hinhanh',
        'is_featured',
        'danhmuc_id',
        'thuonghieu_id',
        'created_at',
        'updated_at',
    ];
    protected $guarded = ['id'];
    protected $primaryKey = 'id';
    protected $dates = [
        'created_at',
        'updated_at'
    ];
    protected $dateFormat = 'Y-m-d H:i:s';

    public function danhmuc()
    {
        return $this->belongsTo(
            DanhMuc::class,
            'danhmuc_id',
            'id'
        );
    }

    public function thuonghieu()
    {
        return $this->belongsTo(
            ThuongHieu::class,
            'thuonghieu_id',
            'id'
        );
    }

    public function hinhanh()
    {
        return $this->hasMany(
            HinhAnhSanPham::class,
            'mathang_id',
            'id'
        );
    }

    public function ctdonhang()
    {
        return $this->hasMany(
            ChiTietDonHang::class,
            'mathang_id',
            'id'
        );
    }
}
