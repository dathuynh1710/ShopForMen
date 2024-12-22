<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use DB;

class DiaChiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('diachi')->insert(
            [
                [
                    'nguoidung_id' => 1,
                    'diachi' => '123 Đường ABC, Quận 1, TP HCM',
                    'macdinh' => 1,
                    'created_at'    => date('Y-m-d H:i:s')
                ],
                [
                    'nguoidung_id' => 2,
                    'diachi' => '456 Đường XYZ, Quận 3, TP HCM',
                    'macdinh' => 1,
                    'created_at'    => date('Y-m-d H:i:s')
                ]
            ]
        );
    }
}
