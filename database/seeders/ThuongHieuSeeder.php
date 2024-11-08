<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ThuongHieuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $list = [];
        $row1 = [
            'math'     => 'AVA',
            'tenth'    => 'AVA',
            'mota'          => 'AVA được thành lập từ năm 2018, là thương hiệu độc quyền của Công ty Cổ phần Thế Giới Di Động (MWG). Bên cạnh việc điều hành và phát triển các nền tảng bán lẻ đa ngành nghề, công ty cũng tiến hành sản xuất các thiết bị điện tử, đồ gia dụng,...',
            'hinhanh'       => 'ava.jpg',
            'created_at'    => date('Y-m-d H:i:s')
        ];
        array_push($list, $row1);
        $row2 = [
            'math' => 'SH',
            'tenth' => 'SUNHOUSE',
            'mota' => 'Công ty Cổ phần Tập đoàn SUNHOUSE tiền thân là Công ty TNHH Phú Thắng được thành lập ngày 22/5/2000. Năm 2004, SUNHOUSE liên doanh với Công ty TNHH SUNHOUSE Hàn Quốc, thành lập Công ty TNHH SUNHOUSE Việt Nam và xây dựng nhà máy liên doanh sản suất đồ gia dụng, ứng dụng công nghệ Anodized lạnh tiên tiến tại khu vực ASEAN. Năm 2010, SUNHOUSE chính thực được lấy tên là Công ty Cổ phần Tập đoàn SUNHOUSE, đầu tư vào nhiều lĩnh vực đa dạng (hàng gia dụng, điện gia dụng, thiết bị nhà bếp, thiết bị điện)',
            'hinhanh' => 'Logo_cong_ty_sunhouse.png',
            'created_at'    => date('Y-m-d H:i:s')
        ];
        array_push($list, $row2);
        $row3 = [
            'math' => 'Kang',
            'tenth' => 'Kangaroo',
            'mota' => 'Tập đoàn KANGAROO được thành lập từ năm 2003 bởi hai người Việt Nam trẻ tuổi. Xuyên suốt trong 20 năm, định hướng kinh doanh tập trung đã giúp KANGAROO tạo nên nhiều dấu ấn thành công rực rỡ, trở thành doanh nghiệp đầu ngành phục vụ sức khỏe và tiện nghi cuộc sống thông qua những cải tiến hữu ích từ máy lọc nước, hàng gia dụng, thiết bị nhà bếp, năng lượng tới các thiết bị điện tiêu dùng khác.',
            'hinhanh' => 'Kangaroo.jpg',
            'created_at'    => date('Y-m-d H:i:s')
        ];
        array_push($list, $row3);
        $row4 = [
            'math' => 'HP',
            'tenth' => 'HÒA PHÁT',
            'mota' => 'Hòa Phát là Tập đoàn sản xuất công nghiệp hàng đầu Việt Nam, hoạt động trong 5 lĩnh vực: Gang thép (Thép xây dựng, Thép cuộn cán nóng) – Sản phẩm thép (gồm Ống thép, Tôn mạ, Thép rút dây, Thép dự ứng lực) - Nông nghiệp - Bất động sản - Điện máy gia dụng.',
            'hinhanh' => 'hoaphat.png',
            'created_at'    => date('Y-m-d H:i:s')
        ];
        array_push($list, $row4);
        $row5 = [
            'math' => 'SS',
            'tenth' => 'SAMSUNG',
            'mota' => 'Samsung là thương hiệu được công nhận trên toàn thế giới và chúng tôi là công ty dẫn đầu thị trường trong nhiều danh mục sản phẩm, bao gồm điện thoại thông minh, TV và thiết bị bán dẫn. Có nhiều cơ hội để bạn tham gia vào đội ngũ bán hàng và tiếp thị của chúng tôi trong cả mảng doanh nghiệp với khách hàng (B2C) và doanh nghiệp với doanh nghiệp (B2B), nhằm mở rộng cơ sở khách hàng của chúng tôi trong các danh mục đã được xác lập và phát triển doanh nghiệp mới hơn.',
            'hinhanh' => 'Samsung_Logo.png',
            'created_at'    => date('Y-m-d H:i:s')
        ];
        array_push($list, $row5);
        $row6 = [
            'math' => 'Pan',
            'tenth' => 'Panasonic',
            'mota' => 'Panasonic là một trong những tập đoàn công nghệ hàng đầu trên thế giới. Tập đoàn bắt đầu hành trình phát triển tại Việt Nam vào năm 1950, đến năm 1971 Panasonic khánh thành nhà máy sản xuất đầu tiên tại nước ta.',
            'hinhanh' => 'panasonic.png',
            'created_at'    => date('Y-m-d H:i:s')
        ];
        array_push($list, $row6);
        $row7 = [
            'math' => 'SHARP',
            'tenth' => 'SHARP',
            'mota' => 'Công Ty TNHH Sharp Manufacturing Việt Nam (SMV) chính thức hoạt động vào tháng 5/2020 tọa lạc tại số 3, đường số 16 VSIP II-A, Tân Uyên, tỉnh Bình Dương. Nhà máy chuyên sản xuất các dòng sản phẩm điện tử gia dụng hàng đầu thế giới.',
            'hinhanh' => 'SHARP.png',
            'created_at'    => date('Y-m-d H:i:s')
        ];
        array_push($list, $row7);
        $row8 = [
            'math' => 'MTS',
            'tenth' => 'MUTOSI',
            'mota' => 'Mutosi là doanh nghiệp chuyên sản xuất và phân phối máy lọc nước và các thiết bị điện gia dụng theo tiêu chuẩn Nhật Bản. Công ty được thành lập vào năm 2018 bởi anh Trần Trung Dũng và 3 nhà đồng sáng lập. Trước khi xây dựng Mutosi, anh Dũng đã từng có nhiều kinh nghiệm điều hành trong ngành Máy lọc nước.',
            'hinhanh' => 'MUTOSI.png',
            'created_at'    => date('Y-m-d H:i:s')
        ];
        array_push($list, $row8);
        $row9 = [
            'math' => 'KRF',
            'tenth' => 'KAROFI',
            'mota' => 'KAROFI là Tập đoàn hàng đầu về sản phẩm máy lọc nước, cây nước nóng lạnh, máy lọc không khí, thiết bị lọc nước biển,lọc công nghiệp và các thiết bị điện gia dụng cao cấp như quạt, sưởi, ấm siêu tốc ....',
            'hinhanh' => 'logo-thuong-hieu-karofi.png',
            'created_at'    => date('Y-m-d H:i:s')
        ];
        array_push($list, $row9);
        $row10 = [
            'math' => 'PL',
            'tenth' => 'PHILIPS',
            'mota' => 'Philips là một thương hiệu đến từ Hà Lan và là một tập đoàn có tiếng về các mặt hàng điện tử, đồ gia dụng trên thế giới. Philips được thành lập vào năm 1891 tại Amsterdam, Hà Lan và chính thức tiến vào thị trường Việt Nam vào năm 1993. Trải qua nhiều năm có mặt tại Việt Nam, Philips đã trở thành 1 trong những thương hiệu uy tín và luôn được người dùng tin tưởng nhất về mặt chất lượng.',
            'hinhanh' => 'Philips_logo.png',
            'created_at'    => date('Y-m-d H:i:s')
        ];
        array_push($list, $row10);


        // Insert vào database
        DB::table('thuonghieu')->insert($list);
    }
}
