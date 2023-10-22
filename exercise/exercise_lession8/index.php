<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    // BÀI TẬP PHẦN 8
    // 1. Xây dựng hàm kiểm tra số nguyên chẵn
    // check_even();
    // - Hàm in ra dòng
    // • "Đây là số nguyên chẵn" => Nếu $n là số nguyên chẵn,
    // • "Đây là số nguyên lẻ" => ngược lại
    // - Hàm trả về
    // • true nếu $n là chẵn
    // • false nếu Sn là lẻ
    // $n là tham số hàm
    // 2. Hàm tính tổng các số nguyên tố từ 2 -> Sn(Sn>=2)
    // check_prime(); total_prime();
    // 3. Hàm lấy thông tin chi tiết một bài viết theo id trong mảng bài viết

    // BÀI 1
    // function check_even($n){
    //     $n = $n% 2 == 0 ? "n là số chẵn" : "n là số lẻ";
    //     echo $n;
    // }
    // echo check_even(4);
    // function check_even_return($n){
    //     $n = $n% 2 == 0 ? true : false;
    //     return $n;
    // }
    // echo check_even_return(4);

    // BÀI 2

    function checkPrime($n)
    {
        if($n >= 2)
        {
            $result = 0;
            for($i = 3; $i < $n - 2; $i += 2)
            {   
                echo $i . "<br>";
                if($n % $i == 0)
                {
                    $result = 1;
                }
            }
            if($result != 0)
            {
                echo "n không phải là số nguyên tố";
            }
            else
            {
                echo "n là số nguyên tố";
            }
        }
        else
        {
            echo "n không phải là số nguyên tố";
        }
    }
    
    echo "<br>";
    checkPrime(2);
    echo "<br>";
    // BÀI 3
    $postArr = [
        [
            "postId" => "1",
            "post_title" => "Sạt lở nghiêm trọng trên đường nối tỉnh lộ 89B đi Hòa Bình, cấm toàn bộ xe tải và xe khách lưu thông
        Sự kiện: Tin nóng",
            "description" => "Cấm các phương tiện xe tải và xe khách trên 16 chỗ đi qua khu vực đoạn Km11+100 đến Km11+250 đường 89B. Các phương tiện chỉ được lưu thông tối đa 20km/h.",
            "category_id" => "2",
            "post_image" => "satlo.jpeg"
        ],
        [
            "postId" => "2",
            "post_title" => "Cận cảnh khu mỏ đất hiếm mới bị phong tỏa, điều tra sai phạm ở Yên Bái",
            "description" => "Ngày 20/10, Cơ quan cảnh sát điều tra (Bộ Công an) khởi tố, bắt tạm giam Chủ tịch HĐQT kiêm Tổng giám đốc Công ty cổ phần Tập đoàn Thái Dương liên quan đến việc bán trái phép hơn 11.000 tấn quặng đất hiếm, trị giá khoảng 440 tỷ đồng.",
            "category_id" => "2",
            "post_image" => "dat.jpeg"
        ]
    ];
    foreach($postArr as $key => $value){
        if($key == "postId" AND $value == "2"){
            echo $value['post_title'];
        }
    }
    echo $value["post_title"];
    ?>



</body>

</html>