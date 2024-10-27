<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MatHang;

class NhaCungCap extends Model
{
    use HasFactory;
    protected $table = 'nhacungcap';
    protected $fillable = [
        'mancc',
        'tenncc',
        'mota',
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

    public function mathang()
    {
        return $this->hasMany(
            MatHang::class,
            'nhacungcap_id',
            'id'
        );
    }
}
