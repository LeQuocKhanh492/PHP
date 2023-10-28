<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        label {
            display: block;
            margin-top: 15px;
        }

        input[type="text"],
        input[type="password"],
        input[type="tel"] {
            margin: 15px 0;
            padding: 5px 10px;
            border: 1px solid #b2a2a2;
        }

        .btn-register {
            margin-top: 20px;
            padding: 5px 30px;
            background-color: #000000;
            color: #ffff;
            display: block;
        }

        .error {
            color: red;
        }
    </style>
    <title>Document</title>
</head>

<body>
    <?php
    session_start();
    // BÀI TẬP PHẦN 11
    // Tạo form đăng ký và chuẩn hóa dữ liệu bao gồm các thông tin:
    // • Họ và tên
    // • Tên đăng nhập
    // • Mat khau
    // • Số điện thoại
    require_once "./lib/validation.php";
    require_once "./lib/data.php";
    $error = [];
    $remember_value = [];
    if (isset($_POST['btn-register'])) {
      
        // validation username
        if (empty($_POST['username'])) {
            $error['username'] = "username không được trống";
        } else {
            $username = $_POST["username"];
            $remember_value["username"] = $_POST["username"];
        }
        // validation account
        if (empty($_POST['account'])) {
            $error['account'] = "account không được trống";
        } else {
            $remember_value["account"] = $_POST["account"];
            if (is_account($_POST['account'])) {
                $account = $_POST["account"];
            } else {
                $error['account'] = "tên đăng nhập không đúng định dạng";
            }
        }
            // validation password
            if (empty($_POST['password'])) {
                $error['password'] = "password không được trống";
            } else {
                $remember_value["password"] = $_POST["password"];
                if (is_password($_POST['password'])) {
                    $password = $_POST["password"];
                } else {
                    $error['password'] = "mật khẩu không đúng định dạng";
                }
            }
            // validation phone
            if (empty($_POST['phone'])) {
                $error['phone'] = "sdt không được trống";
            } else {
                $remember_value["phone"] = $_POST["phone"];
                if (is_phonemunber($_POST['phone'])) {
                    $phone = $_POST["phone"];
                } else {
                    $error['phone'] = "sdt không đúng định dạng";
                }
            }
            if (empty($error)) {
                $info = [
                    'fullname' => $username,
                    'account' => $account,
                    'password' => $password,
                    'phone' => $phone
                ];

                if($account == "khanh123" && $password == "khanh123")
                {
                   
                    if(isset($_POST['remember_me']))
                    {
                        // echo "account = $account;
                        $remember_me = $_POST['remember_me'];
                        setcookie("is_login_cookie", true, time() + 3600);
                        setcookie("user_login_cookie", 'khanh', time() + 3600);
                        // setcookie("is_login_cookie", true, time() - 3600);
                        // setcookie("user_login_cookie", 'khanh', time() - 3600);
                        // die();
                    }
                    $_SESSION['is_login'] = "đã đăng nhập";
                    // echo "is_login" . $_SESSION['is_login'];
                    header("location:./cart.php");
                }
                else{
                    show_array($info);
                    echo "tài khoản không tồn tại";
                }
            }
            else{
                show_array($error);
            }
        
    }

    ?>
    <h2>Đăng ký tài khoản</h2>
    <form action="" method="POST">

        <label for="username">username: </label>

        <input type="text" name="username" id="username" value="<?php echo set_value_input('remember_value','username'); ?>">
        <?php echo  form_error($error['username']); ?>

        <label for="account">account: </label>
        <input type="text" name="account" id="account" value="<?php echo set_value_input('remember_value','account'); ?>">
        <?php echo  form_error($error['account']); ?>

        <label for="password">password: </label>
        <input type="password" name="password" id="password" value="<?php echo set_value_input('remember_value','password'); ?>">
        <?php echo  form_error($error['password']); ?>
        <label for="phone">phone: </label>
        <input type="tel" name="phone" id="phone" value="<?php echo set_value_input('remember_value','phone'); ?>">
        <?php echo  form_error($error['phone']); ?>
       <br>
        <input type="checkbox" name="remember_me" id="remember_me"> <label for="remember_me" style ="display:inline">remember_me </label>
        <button type="submit" value="register" name="btn-register" class="btn-register">Register</button>

    </form>
</body>

</html>