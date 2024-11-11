<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class MatHangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mathang')->insert([
            [
                'tenmathang'     => 'Máy lọc nước RO nóng nguội lạnh Kangaroo KG10A17 10 lõi',
                'mota'    => 'Kiểu lắp đặt: Tủ đứng
                    Loại máy:Máy lọc nước RO nóng nguội lạnh
                    Công nghệ lọc:Thẩm thấu ngược RO
                    Kháng khuẩn:Nano Silver
                    Dung tích bình chứa:Tổng 7.8 lít (Nước nóng 0.8 lít, nước lạnh 1 lít, nước thường 6 lít)
                    Tỷ lệ lọc - thải:Lọc 4.8 - Thải 5.2 (Tỷ lệ này phụ thuộc vào chất lượng nước đầu vào)
                    Công suất lọc:18 lít/giờ',
                'giagoc'          => 10990000,
                'giaban'       => 7590000,
                'soluongton'       => 20,
                'hinhanh' => 'mathang/img/may-loc-nuoc-ro-nong-nguoi-lanh-kangaroo-kg10a17-10-loi-5.jpg',
                'noibat'       => false,
                'danhmuc_id'       => 1,
                'thuonghieu_id'       => 3,
                'created_at'    => date('Y-m-d H:i:s')
            ],
            [
                'tenmathang'     => 'Nồi chiên không dầu AVA 55K07A 5.5 lít',
                'mota'    => 'Dung tích tổng: 6 lít
                    Dung tích sử dụng: 5.5 lít
                    Công suất: 1350W
                    Nhiệt độ: 0 - 200°C
                    Hẹn giờ: 0 - 30 phút
                    Chất liệu: Vỏ nhựa PVC chịu nhiệt. Lòng nồi hợp kim nhôm phủ chống dính
                    Bảng điều khiển:Nút xoay
                    Thương hiệu của: Việt Nam
                    Sản xuất tại: Trung Quốc
                    Năm ra mắt: 2021',
                'giagoc'          => 2590000,
                'giaban'       => 990000,
                'soluongton'       => 30,
                'hinhanh' => 'mathang/img/ava-55k07a-55-lit.jpg',
                'noibat'       => false,
                'danhmuc_id'       => 2,
                'thuonghieu_id'       => 1,
                'created_at'    => date('Y-m-d H:i:s')
            ],
            [
                'tenmathang'     => 'Bếp hồng ngoại đôi lắp âm Sunhouse SHB9112MT',
                'mota'    => 'Tổng công suất:3600W
                    Công suất vùng nấu:Trái: 1800W - Phải: 1800W
                    Điện áp:220-240V/50 Hz
                    Kích thước vùng nấu:Trái: Ø14/20 cm - Phải: Ø12/18 cm
                    Bảng điều khiển:Cảm ứng
                    Chất liệu mặt bếp:Kính chịu lực, chịu nhiệt',
                'giagoc'          => 3875000,
                'giaban'       => 3590000,
                'soluongton'       => 10,
                'hinhanh' => 'mathang/img/bep-hong-ngoai-doi-sunhouse-shb9112mt.jpg',
                'noibat'       => true,
                'danhmuc_id'       => 3,
                'thuonghieu_id'       => 2,
                'created_at'    => date('Y-m-d H:i:s')
            ],
            [
                'tenmathang'     => 'Nồi cơm điện tử Sharp 1.8 lít KS-COM194EV-BK',
                'mota'    => 'Dung tích:1.8 lít, Số người ăn 4 - 6 người
                    Công suất:790W
                    Thương hiệu của:Nhật Bản
                    Nơi sản xuất:Trung Quốc
                    Năm ra mắt:2023',
                'giagoc'          => 1990000,
                'giaban'       => 1890000,
                'soluongton'       => 5,
                'hinhanh' => 'mathang/img/noi-com-dien-tu-sharp-18-lit-ks-com194ev.jpg',
                'noibat'       => true,
                'danhmuc_id'       => 4,
                'thuonghieu_id'       => 7,
                'created_at'    => date('Y-m-d H:i:s')
            ],
            [
                'tenmathang'     => 'Máy ép trái cây Panasonic MJ-CS100WRA',
                'mota'    => 'Chức năng:Ép trái cây, rau củ
                    Công suất:230 - 260W
                    Ống tiếp nguyên liệu:60 mm
                    Số cối:1 cối ép
                    Dung tích:Bình chứa bã: 0.5 lít, Cốc chứa nước ép: 0.6 lít
                    Chất liệu cối:Cối ép: Nhựa
                    Chất liệu phụ kiện:Lưới lọc: thép không gỉ
                    Cốc đựng nước ép: nhựa
                    Cốc đựng bã ép: nhựa',
                'giagoc'          => 1780000,
                'giaban'       => 1550000,
                'soluongton'       => 16,
                'hinhanh' => 'mathang/img/may-ep-trai-cay-panasonic-mj-cs100wra1.jpg',
                'noibat'       => true,
                'danhmuc_id'       => 5,
                'thuonghieu_id'       => 6,
                'created_at'    => date('Y-m-d H:i:s')
            ],
            [
                'tenmathang'     => 'Máy hút bụi dạng hộp Samsung VC18M21M0VN/SV-N',
                'mota'    => 'Công suất hoạt động:1800W
                    Công suất hút:19700 Pa
                    Loại khoang chứa:Hộp chứa
                    Dung tích: 1.5 lít
                    Độ ồn cao nhất:87 dB
                    Bộ lọc:Bộ lọc HEPA
                    Các loại đầu hút:Đầu hút khe, Đầu hút sàn, Đầu hút lông thú
                    Thương hiệu của:Hàn Quốc
                    Nơi sản xuất:Việt Nam
                    Năm ra mắt:2017',
                'giagoc'          => 2290000,
                'giaban'       => 1790000,
                'soluongton'       => 7,
                'hinhanh' => 'mathang/img/samsung-vc18m21m0vn-sv-n.jpg',
                'noibat'       => false,
                'danhmuc_id'       => 6,
                'thuonghieu_id'       => 5,
                'created_at'    => date('Y-m-d H:i:s')
            ],
            [
                'tenmathang'     => 'Máy lọc không khí Philips AC0650/10 12W',
                'mota'    => 'Loại bụi lọc được:
                    PM2.5
                    PM0.003
                    PM0.01
                    PM0.02
                    PM0.03
                    PM0.1
                    PM0.2
                    PM0.3
                    PM0.5
                    PM1.0
                    PM10
                    Phạm vi lọc hiệu quả: Phòng 44m²
                    Lượng gió thổi ra lớn nhất:170 m³/h
                    Công suất hoạt động:12W
                    Bộ lọc bụi cho máy:Màng lọc Nano Protect HEPA. Màng lọc thô
                    Bảng điều khiển:Cảm ứng
                    Độ ồn cao nhất:49 dB
                    Thương hiệu của:Hà Lan
                    Nơi sản xuất:Trung Quốc
                    Năm ra mắt:2023',
                'giagoc'          => 2899000,
                'giaban'       => 2670000,
                'soluongton'       => 12,
                'hinhanh' => 'mathang/img/may-loc-khong-khi-philips-ac0650-10-12w.jpg',
                'noibat'       => false,
                'danhmuc_id'       => 7,
                'thuonghieu_id'       => 10,
                'created_at'    => date('Y-m-d H:i:s')
            ]
        ]);
    }
}
