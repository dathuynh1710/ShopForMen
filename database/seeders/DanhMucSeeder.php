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
            'madanhmuc'     => 'MLN',
            'tendanhmuc'    => 'Máy lọc nước ',
            'mota'          => 'Máy lọc nước là thiết bị áp dụng các công nghệ lọc hiện đại giúp loại bỏ các hóa chất, kim loại, vi khuẩn, vi trùng cùng các tạp chất gây ô nhiễm nhằm mang lại nguồn nước sạch, đáp ứng nhu cầu sinh hoạt.',
            'hinhanh'       => 'maylocnuoc.png',
            'created_at'    => date('Y-m-d H:i:s')
        ];
        array_push($list, $row1);
        $row2 = [
            'madanhmuc'     => 'NC',
            'tendanhmuc'    => 'Nồi chiên',
            'mota'          => 'Nồi chiên không dầu là thiết bị không sử dụng dầu để làm chín thức ăn, chỉ sử dụng sức nóng của không khí lưu thông trong nồi.',
            'hinhanh'       => 'noichien.png',
            'created_at'    => date('Y-m-d H:i:s')
        ];
        array_push($list, $row2);
        $row3 = [
            'madanhmuc'     => 'BD',
            'tendanhmuc'    => 'Bếp điện',
            'mota'          => 'Bếp từ còn được gọi là bếp điện từ, đây là thiết bị đun nấu sử dụng điện năng.',
            'hinhanh'       => 'bepdien.jpg',
            'created_at'    => date('Y-m-d H:i:s')
        ];
        array_push($list, $row3);
        $row4 = [
            'madanhmuc'     => 'NC',
            'tendanhmuc'    => 'Nồi cơm',
            'mota'          => 'Nồi cơm điện là một thiết bị gia dụng tự động được thiết kế để nấu cơm bằng cách hấp hơi gạo.',
            'hinhanh'       => 'noicomdien.jpg',
            'created_at'    => date('Y-m-d H:i:s')
        ];
        array_push($list, $row4);
        $row5 = [
            'madanhmuc'     => 'METC',
            'tendanhmuc'    => 'Máy ép trái cây',
            'mota'          => 'Máy ép trái cây giúp chế biến nhanh các loại thức uống dinh dưỡng từ hoa quả và rau củ.',
            'hinhanh'       => 'mayeptraicay.jpg',
            'created_at'    => date('Y-m-d H:i:s')
        ];
        array_push($list, $row5);
        $row6 = [
            'madanhmuc'     => 'MHB',
            'tendanhmuc'    => 'Máy hút bụi',
            'mota'          => 'Máy hút bụi là thiết bị sử dụng một máy bơm không khí để tạo ra một phần chân không để hút bụi bẩn, thường là từ sàn nhà và các bề mặt khác.',
            'hinhanh'       => 'mayhutbui.jpg',
            'created_at'    => date('Y-m-d H:i:s')
        ];
        array_push($list, $row6);
        $row7 = [
            'madanhmuc'     => 'LKK',
            'tendanhmuc'    => 'Lọc không khí',
            'mota'          => 'Máy lọc không khí là thiết bị có khả năng lọc sạch bụi bẩn trong không khí thông qua các màng lọc bụi tiêu chuẩn',
            'hinhanh'       => 'maylockhongkhi.jpg',
            'created_at'    => date('Y-m-d H:i:s')
        ];
        array_push($list, $row7);
        // Insert vào database
        DB::table('danhmuc')->insert($list);
    }
}
