<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\DanhMucSeeder;
use Database\Seeders\ThuongHieuSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\MatHangSeeder;
use Database\Seeders\HinhAnhSanPhamSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([DanhMucSeeder::class]);
        $this->call([ThuongHieuSeeder::class]);
        $this->call([UserSeeder::class]);
        $this->call([MatHangSeeder::class]);
        $this->call([HinhAnhSanPhamSeeder::class]);
    }
}
