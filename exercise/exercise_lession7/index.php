<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 20px;
        }
        .item div{
            width: 100%;
        }
        img{
            width: 100%;
            max-height: 300px;
            object-fit: contain;
        }
        div{
            white-space: normal; 
        }
        .item{
            width: calc((100% - 148px) / 4)  ;
             border: 1px solid gray;
             padding: 10px;
             border-radius: 10px;
        }
        ul{
            display: flex;
            gap:20px;
            margin: 100px;
            border: 1px solid black;
            flex-wrap: wrap;
            padding: 30px;
            border-radius: 10px;
        }
        li{
            list-style-type: none;
        }
    </style>
    <title>Document</title>
</head>

<body>
    <?php
    // BÀI TẬP PHẦN 7
    // 1. Tạo mảng lưu các số lẻ từ 3->150
    // 2. Tạo mảng đa chiều quản lý các bài viết trong website tin tức
    // 3. Tạo mảng đa chiều quản lý các sản phẩm trong website bán hàng
    // 4. Hiển thị danh sách bài viết lên giao diện
    // 5. Hiển thị danh sách sản phẩn lên giao diện

    //Bai1:
    $oddArr = [];
    for ($i = 3; $i <= 150; $i += 1) {
        $oddArr[] = $i;
    }
    echo "<pre>";
    // print_r($oddArr);
    echo "<br>";
    echo "</pre>";
    //Bai2
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
    $productArr = [
        ["productId" => "1", "product_title" => "nước táo", "category" => "Nước ép", "description" => "nước ép nguyên liệu tự nhiên", "product_image" => "sting.jpeg"],
        ["productId" => "2", "product_title" => "sting", "category" => "Nước ngọt", "description" => "nước ngọt ngon", "product_image" => "nuoctao.jpeg"]
    ];
    ?>
    <ul>
        <?php
        foreach ($postArr as  $post) {
            // print_r($post);
        ?>
        <li class ="item">
            <div><img src="./images/<?php echo $post["post_image"]?>" alt=""></div>
            <div><h3><?php echo $post["post_title"]?></h3></div>
            <div><?php echo $post["description"]?></div>
        </li>     
        <li class ="item">
            <div><img src="./images/<?php echo $post["post_image"]?>" alt=""></div>
            <div><h3><?php echo $post["post_title"]?></h3></div>
            <div><?php echo $post["description"]?></div>
        </li>     
        <li class ="item">
            <div><img src="./images/<?php echo $post["post_image"]?>" alt=""></div>
            <div><h3><?php echo $post["post_title"]?></h3></div>
            <div><?php echo $post["description"]?></div>
        </li>     
        <?php
            
        }
        ?>
    </ul>
    <ul>
        <?php
        foreach ($productArr as  $post) {
            // print_r($post);
        ?>
        <li class ="item">
            <div><img src="./images/<?php echo $post["product_image"]?>" alt=""></div>
            <div><h3><?php echo $post["product_title"]?></h3></div>
            <div><?php echo $post["description"]?></div>
        </li>     
        <li class ="item">
            <div><img src="./images/<?php echo $post["product_image"]?>" alt=""></div>
            <div><h3><?php echo $post["product_title"]?></h3></div>
            <div><?php echo $post["description"]?></div>
        </li>     
        <li class ="item">
            <div><img src="./images/<?php echo $post["product_image"]?>" alt=""></div>
            <div><h3><?php echo $post["product_title"]?></h3></div>
            <div><?php echo $post["description"]?></div>
        </li>     
        <?php
            
        }
        ?>
    </ul>


</body>

</html>