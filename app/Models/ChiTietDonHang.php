<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MatHang;
use App\Models\DonHang;

class ChiTietDonHang extends Model
{
    use HasFactory;
    protected $table = 'chitiet_donhang';
    protected $fillable = [
        'donhang_id',
        'mathang_id',
        'dongia',
        'soluong',
        'thanhtien',
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

    public function donhang()
    {
        return $this->belongsTo(
            DonHang::class,
            'donhang_id',
            'id'
        );
    }

    public function mathang()
    {
        return $this->belongsTo(
            MatHang::class,
            'mathang_id',
            'id'
        );
    }
}
