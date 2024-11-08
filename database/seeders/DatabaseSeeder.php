<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\DanhMucSeeder;
use Database\Seeders\ThuongHieuSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([DanhMucSeeder::class]);
        $this->call([ThuongHieuSeeder::class]);
    }
}
