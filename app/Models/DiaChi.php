<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\NguoiDung;

class DiaChi extends Model
{
    use HasFactory;
    protected $table = 'diachi';
    protected $fillable = [
        'nguoidung_id',
        'diachi',
        'macdinh',
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
        return $this->belongsTo(
            NguoiDung::class,
            'nguoidung_id',
            'id'
        );
    }
}
