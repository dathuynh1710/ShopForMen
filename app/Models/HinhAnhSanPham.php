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


    public function mathang()
    {
        return $this->belongsTo(
            MatHang::class,
            'mathang_id',
            'id'
        );
    }
}
