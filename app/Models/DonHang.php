<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ChiTietDonHang;
use App\Models\NguoiDung;

class DonHang extends Model
{
    use HasFactory;
    protected $table = 'donhang';
    protected $fillable = [
        'nguoidung_id',
        'diachi_id',
        'ngay',
        'tongtien',
        'trangthai',
        'created_at',
        'updated_at',
    ];
    protected $guarded = ['id'];
    protected $primaryKey = 'id';
    protected $dates = [
        'ngay',
        'created_at',
        'updated_at'
    ];
    protected $dateFormat = 'Y-m-d H:i:s';

    public function nguoidung()
    {
        return $this->belongsTo(
            NguoiDung::class,
            'nguoidung_id',
            'id'
        );
    }

    public function ctdonhang()
    {
        return $this->hasMany(
            ChiTietDonHang::class,
            'donhang_id',
            'id'
        );
    }
}
