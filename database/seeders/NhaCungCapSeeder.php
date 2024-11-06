<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class NhaCungCapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $list = [];
        $row1 = [
            'manhacungcap'     => 'AT',
            'tennhacungcap'    => 'Coolmate',
            'mota'          => 'áo thun nam',
            'hinhanh'       => 'danhmuc/img/aothun.jpg',
            'created_at'    => date('Y-m-d H:i:s')
        ];
        array_push($list, $row1);
        $row2 = [
            'manhacungcap' => 'AM',
            'tennhacungcap' => 'Cooltext',
            'mota' => 'ao thun nam',
            'hinhanh' => 'danhmuc/img/aokhoac.jpg',
            'created_at'    => date('Y-m-d H:i:s')
        ];
        array_push($list, $row2);
    }
}
