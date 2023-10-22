<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Bài tập phần 10
    1. Lấy dữ liệu form đăng nhập bào gồm: Tên đăng nhập, Mật khẩu
    2. Lấy dữ liệu form đăng ký bao gồm: Họ và tên, Tên đăng nhập, Mật khẩu,
    Email, Số điện thoại, Giới tính
    3. Tạo link và lấy thông tin từ url
    <a href=' ?mod=product&act=main' >Sản phẩm</a>
    Lấy thông tin: mod, act -->
    <?php
    //BÀI 1
    if (isset($_POST['btn-login'])) {
        $account = $_POST['account'];
        $password = $_POST['password'];
        echo   $account . $password;
    }
    ?>
    <form action="" method="POST">
        <label for="account">account: </label>
        <input type="text" name="account" id="account">
        <br>
        <br>
        <label for="password">password: </label>
        <input type="password" name="password" id="password">
        <br>
        <br>
        <button type="submit" name="btn-login">login</button>
    </form>


    <?php
    // BÀI 2
    if (isset($_POST['btn-Register'])) {
        $username = $_POST['username'];
        $account = $_POST['account'];
        $password = $_POST['password'];
        echo $username  . $account . $password;
    }
    ?>
    <form action="" method="POST">
        <label for="username">username: </label>
        <input type="text" name="username" id="username">
        <br>
        <br>
        <label for="account">account: </label>
        <input type="text" name="account" id="account">
        <br>
        <br>
        <label for="password">password: </label>
        <input type="password" name="password" id="password">
        <br>
        <br>
        <button type="submit" name="btn-Register">Register</button>
    </form>

    <?php 
    // Bài 3
    if(isset($_GET['mod']) && isset($_GET['act']))
    {
        $mod = $_GET['mod'];
        $act = $_GET['act'];
        echo $mod . $act;
    }
    ?>
     <a href=' ?mod=product&act=main' >Sản phẩm</a>
</body>

</html>