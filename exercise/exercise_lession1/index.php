<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // --CHECKLIST--
    // * Bước 1: Xây dụng giao diện
    // * Bưđc 2: Chuẩn bị dữ liệu => Tạo biến
    // * Bước 3: Đổ dữ liệu php lên html
    $fullName = "Lê Quốc Khánh";
    $userName = "Khánh";
    $email = "wwww@gmail.com";
    // echo "Họ tên: ". $fullName . "<br>". "Username: ". $userName . "<br>" . "Email: ".$email . "<br>";
    ?>
    <h2><strong>Thông tin cá nhân</strong></h2>
    <p>Họ tên: <strong><?php echo $fullName;?></strong></p>
    <p>Username: <strong><?php echo $userName;?></strong></p>
    <p>Email: <strong><?php echo $email;?></strong></p>
</body>
</html>