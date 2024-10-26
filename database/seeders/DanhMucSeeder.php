<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class DanhMucSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $list = [];
        $row1 = [
            'madanhmuc'     => 'AT',
            'tendanhmuc'    => 'Áo thun',
            'mota'          => 'áo thun nam',
            'hinhanh'       => 'danhmuc/img/aothun.jpg',
            'created_at'    => date('Y-m-d H:i:s')
        ];
        array_push($list, $row1);
        $row2 = [
            'madanhmuc'     => 'ASM',
            'tendanhmuc'    => 'Áo sơ mi',
            'mota'          => 'áo sơ mi nam',
            'hinhanh'       => 'danhmuc/img/aosomi.jpg',
            'created_at'    => date('Y-m-d H:i:s')
        ];
        array_push($list, $row2);
        $row3 = [
            'madanhmuc'     => 'APL',
            'tendanhmuc'    => 'Áo polo',
            'mota'          => 'áo polo nam',
            'hinhanh'       => 'danhmuc/img/aopolo.jpg',
            'created_at'    => date('Y-m-d H:i:s')
        ];
        array_push($list, $row3);
        // Insert vào database
        DB::table('danhmuc')->insert($list);
    }
}
