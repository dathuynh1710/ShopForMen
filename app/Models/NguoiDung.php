<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\DiaChi;
use App\Models\DonHang;

class NguoiDung extends Model
{
    use HasFactory;
    protected $table = 'nguoidung';
    protected $fillable = [
        'email',
        'sodienthoai',
        'hoten',
        'loai',
        'trangthai',
        'hinhanh',
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

    public function diachi()
    {
        return $this->hasMany(
            DiaChi::class,
            'nguoidung_id',
            'id'
        );
    }

    public function donhang()
    {
        return $this->hasMany(
            DonHang::class,
            'nguoidung_id',
            'id'
        );
    }
}
