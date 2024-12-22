<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TrangThai extends Model
{
    protected $table = 'trangthai';

    public function DonHang(): HasMany
    {
        return $this->hasMany(DonHang::class, 'trangthai_id', 'id');
    }
}
