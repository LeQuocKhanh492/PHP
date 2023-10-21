<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    // BÀI TẬP PHẦN 5
    // Tạo biến số nguyên $a, nếu $a là số nguyên dương chẵn thì tiến hành cộng thêm
    // một đơn vị và xuất kết quả ra người dùng

        $a = 0;
        echo $a;
        if($a > 0 && $a % 2 == 0)
        {
            $a += 1;
        }
        else{
           $a = " a phải lớn hơn 0 hoặc a không phải là số nguyên chẵn";
        }
        echo "<br>";
        echo $a;
    ?>
</body>
</html>