<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .error {
            color: red;
        }
    </style>
    <title>Document</title>
</head>

<body>
    <?php
    require_once "../../../function.php";
    echo $_SERVER["HTTPS"];
    echo "<br>";
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
    $host = $_SERVER['HTTP_HOST'];
    echo "<br>";
    echo $host;
    echo "<br>";
    $uri = $_SERVER['REQUEST_URI'];
    echo "<br>";
    echo $uri;
    echo "<br>";
    $currentURL = $protocol . "://" . $host . $uri;
    echo "<br>";
    echo $currentURL;
    echo "<br>";
    echo "<br>";
    if (isset($_POST['btn-login'])) {
        $error = [];
        $remember_user_login_info = [];
        // validation account
        // if (empty($_POST['account']) || empty($_POST['password'])) {
        //     if (empty($_POST['account'])) {
        //         $error["account"] = 'tài khoản không được để trống';
        //     }
        //     if (empty($_POST['password'])) {
        //         $error["password"] = 'mật khẩu không được để trống';
        //     }
        // }
        if (empty($_POST['account'])) {
            $error["account"] = 'tài khoản không được để trống';
        } else {
           
            if (check_len_login($_POST['account'])) {
                $remember_user_login_info["account"] = $_POST['account'];
                if (!is_username($_POST['account'])) {
                    $error["account"] = 'Account cho phép sử dụng chuỗi ký tự a-z, A-Z, 0-9 và có số lượng ký tự từ 6-32 ký tự';
                } else {
                    $account = $_POST['account'];
                }
            } else {
                $remember_user_login_info["account"] = $_POST['account'];
                $error["account"] = "số lượng ký tự nhập vào chưa hợp lệ độ dài accout từ 6-32 ký tự";
            }
        }
        //validation password
        if (empty($_POST['password'])) {
            $error["password"] = 'mật khẩu không được để trống';
        } else {
            if (check_len_login($_POST['password'])) {
                $remember_user_login_info["password"] = $_POST['password'];
                if (!is_password($_POST['password'])) {
                    $error["password"] = 'password cho phép sử dụng chuỗi ký tự a-z, A-Z, 0-9 bắt đầu bằng chuỗi ký từ a-z, A-Z và có số lượng ký tự từ 6-32 ký tự';
                } else {
                    $password = $_POST['password'];
                }
            } else {
                $remember_user_login_info["password"] = $_POST['password'];
                $error["password"] = "số lượng ký tự nhập vào chưa hợp lệ độ dài password từ 8-32 ký tự";
            }
        }
        if (empty($error)) {
            $login[] = $_POST['redirect_to'];
        }
    }
    ?>
    <form action="" method="POST">
        <label for="account">account: </label>
        <input type="text" name="account" id="account" value="<?php neg_empty($remember_user_login_info["account"]) ?>" autocomplete="off">
        <p class="error"><?php form_error($error["account"]) ?></p>
        <br>
        <br>
        <label for="password">password: </label>
        <input type="password" name="password" id="password" value="<?php neg_empty($remember_user_login_info["password"]) ?>" autocomplete="off">
        <p class="error"><?php form_error($error["password"]) ?></p>
        <input type="hidden" name="redirect_to" value=" <?php if (!empty($login["redirect_to"])) {
                                                            echo $login["redirect_to"];
                                                        } ?>">
        <br>
        <br>
        <button type="submit" name="btn-login">login</button>
    </form>
</body>

</html>