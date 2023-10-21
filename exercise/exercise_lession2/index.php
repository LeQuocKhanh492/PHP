<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //=============================================================================
    // BÀI TẬP PHẦN 4
    // DANH SÁCH BIÊN H THÔNG
    // 1. Tạo biến lưu trữ danh sách thành viên
    // 2. Tạo biến lưu trữ danh sách sản phẩm
    // 3. Hiền thị thông tin cá nhân(Các thông tin được lưu ở dạng biến)
    // Tôi là Cương, sinh năm 1988, cân nặng 62.5kg
    //=============================================================================

    $arrProduct = [
                    "1" => ["id" => 1, "nameProduct" => "table"],
                    "2" => ["id" => 2, "nameProduct" => "pen"],
                    "3" => ["id" => 3, "nameProduct" => "mouse"],
                  ];
    $arrMember = [
                    "1" => ["id" => 1, "nameMember" => "khánh"],
                    "2" => ["id" => 2, "nameMember" => "katarina"],
                    "3" => ["id" => 3, "nameMember" => "riven"],
                ];
                echo "<pre>";
                print_r($arrProduct);
                print_r($arrMember);

    $name = "khánh";
    $year = 100;
    $weight = 200.2032310;
    $decimal = explode(".", $weight)[1];
    $len = strlen($decimal);
    $result = "Tôi tên là {$name}, sinh năm {$year}, cân nặng " . number_format($weight,$len) . "kg";
    echo $result;

    ?>
</body>
</html>