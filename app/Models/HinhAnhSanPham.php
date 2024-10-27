<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;
use App\Models\MatHang;

class HinhAnhSanPham extends Model
{
    use HasFactory;

    protected $table = 'hinhanh_sanpham';
    protected $fillable = [
        'mathang_id',
        'hinhanh',
    ];
    protected $guarded = ['id'];
    protected $primaryKey = 'id';
    protected $dates = [];
    protected $dateFormat = 'Y-m-d H:i:s';
    protected $timestamps = false;

    public function mathang()
    {
        return $this->belongsTo(
            MatHang::class,
            'mathang_id',
            'id'
        );
    }
}
