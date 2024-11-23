<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class HinhAnhSanPhamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        $list = [];

        // Lấy dữ liệu products
        $arrProductIds = DB::table('mathang')->pluck('id');

        // Vòng lặp
        for ($i = 1; $i <= 2; $i++) {
            $row = [
                'mathang_id' => $faker->randomElement($arrProductIds),
                'hinhanh' => $faker->numberBetween(1, 3) . '.jpg',
                'created_at' => $faker->dateTimeBetween('-4 week', '+4 week')
            ];
            array_push($list, $row);
        }

        // Insert vào database
        DB::table('hinhanh_sanpham')->insert($list);
    }
}
