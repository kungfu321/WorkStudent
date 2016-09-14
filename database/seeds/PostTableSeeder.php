<?php

use App\Models\Tag;
use Illuminate\Database\Seeder;
use App\Models\Employer\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new Post();
        $post->user_id = 1;
        $post->company_id = 1;
        $post->title = '10 PHP Developer (HTML5, CSS, MySQL)';
        $post->description = 'Tham gia cùng phát triển các dự án về Website - sử dụng ngôn ngữ Lập trình PHP
                                Tham gia phát triển các Extensions - dựa trên nền tảng Magento
                                Hỗ trợ Khách hàng cài đặt và sử dụng các Extensions
                                Góp phần xây dựng công ty, tham gia định hướng chiến lược và phát triển sản phẩm';
        $post->skill = 'Yêu thích lập trình website
                        Thành thạo lập trình PHP
                        Ưu tiên ứng viên có kinh nghiệm về Magento và biết sử dụng GIT
                        Nắm vững kiến thức và thực hành tốt về MySQL, HTML, CSS, Ajax,...
                        Có kinh nghiệm về lập trình hướng đối tượng (OOP)
                        Nhiệt tình, ham học hỏi, chủ động trong công việc
                        Tiếng Anh tốt là một lợi thế';
        $post->wage = 'Attractive';
        $post->phone_number = '123456789';
        $post->location = 'Ha Noi, Hai Ba Trung District, Lạc Trung';
        $post->remuneration = '1. Mức lương hấp dẫn; Tăng lương 2 lần/ năm
                                2. Thưởng: thưởng Nhân viên xuất sắc HÀNG THÁNG, thưởng theo dự án, lương tháng thứ 13, thưởng lễ tết, sinh nhật, thưởng nóng, ...
                                3. Phụ cấp ăn trưa: 700.000 VND/ tháng (hoặc ăn trưa ấm cúng cùng đồng nghiệp tại công ty) +++ FREE trà, café, trái cây, bánh kẹo, giải khát hàng ngày
                                4. Thời gian làm việc linh động: 8h30/9h00 – 17h30 (T2 – T6), nghỉ trưa 1h30, nghỉ Thứ 7 + CN
                                5. Môi trường làm việc: trẻ trung, năng động, chuyên nghiệp:
                                
                                Với tiêu chí: “Mỗi ngày đi làm PHẢI là 1 ngày vui!”
                                Thi đấu Game HÀNG NGÀY (PES, bi lắc, mini-golf, bóng rổ, ném vòng, phi tiêu,...), ngay tại công ty
                                Tham gia “Café sáng” đầu tuần – giao lưu, thảo luận, chia sẻ kinh nghiệm
                                Nhân viên trẻ, thân thiện, nhiệt tình giúp đỡ mọi người
                                6. Hoạt động ngoại khóa: Team-building 1 tháng/lần, Du lịch hè (bằng máy bay) 1 năm/lần
                                7. Chế độ: Bảo hiểm xã hội đầy đủ, hiếu, hỉ, lễ, tết, ...
                                8. Cơ hội:
                                Được đào tạo nâng cao nghiệp vụ, kỹ năng mềm, Tiếng Anh
                                Thăng tiến nhanh
                                Onsite tại Thái Lan, Singapore, Anh...';
        $post->save();

        $post->tags()->sync(array(1, 2, 3, 4), false);
    }
}
