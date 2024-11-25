<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $list = [];
        $row1 = [
            'email'     => 'huynhthanhdat2506@gmail.com',
            'sodienthoai'    => '0337791477',
            'password'          => Hash::make('123'),
            'hoten'       => 'Huynh Thanh Dat',
            'loai'       => 1, // #1: khachhang, #0: admin
            'trangthai'       => 1, // #1: Đang sử dụng; #0: ngưng sử dụng
            'hinhanh'       => 'avatar1.jpg',
        ];
        array_push($list, $row1);
        $row2 = [
            'email'     => 'nguyentienkhoa@gmail.com',
            'sodienthoai'    => '0123456789',
            'password'          => Hash::make('123'),
            'hoten'       => 'Nguyen Tien Khoa',
            'loai'       => 0, // #1: khachhang, #0: admin
            'trangthai'       => 1, // #1: Đang sử dụng; #0: ngưng sử dụng
            'hinhanh'       => 'avatar2.jpg',
        ];
        array_push($list, $row2);
        DB::table('users')->insert($list);
    }
}
