<?php
function showArr($arr)
{
    echo "<br>";
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    echo "<br>";
}
function Showshape()
{
    echo "<br>##======================================================================<br>";
    echo "<br>##======================================================================<br>";
    echo "<br>##...<br>";
    echo "<br>##======================================================================<br>";
    echo "<br>##======================================================================<br>";
}
function is_username($account)
{
    $partten = "/^[A-Za-z0-9_\.]{8,32}$/";
    if (!preg_match($partten, $account, $matchs)) {
        return false;
    } else {
        return true;
    }
}
function is_password($password)
{
    $partten = "/^([A-Za-z]){1}([\w_\.!@$%^&*()]+){7,32}$/";
    if (!preg_match($partten, $password, $matchs)) {
        return false;
    } else {
        return true;
    }
}

function check_len_login($nameInput)
{
    if (strlen($nameInput) >= 8 && strlen($nameInput) <= 32)
        return true;
    else
        return false;
}
function neg_empty($name)
{
    global $name;
    if (!empty($name))
        return $name;
    // return 0;
}
function form_error($name)
{
    global $error;
    if (!empty($name)) {
        echo $name;
    }
}
// function validate_login($account, $password)
// {
//     $error = [];
//     $remember_user_login_info = [];
//     // validation account
//     if (empty($account)) {
//         $error["account"] = 'tài khoản không được để trống';
//     } else {
//         if (check_len_login($account)) {
//             $remember_user_login_info["account"] = $account;
//             if (!is_username($account)) {
//                 $error["account"] = 'Account cho phép sử dụng chuỗi ký tự a-z, A-Z, 0-9 và có số lượng ký tự từ 6-32 ký tự';
//             } else {
//                 $account = $account;
//             }
//         } else {
//             $remember_user_login_info["account"] = $password;
//             $error["account"] = "số lượng ký tự nhập vào chưa hợp lệ độ dài accout từ 6-32 ký tự";
//         }
//     }

//     //validation password
//     if (empty($_POST['password'])) {
//         $error["password"] = 'mật khẩu không được để trống';
//     }
//     else{
//         if (check_len_login($password)) {
//             $remember_user_login_info["password"] = $password;
//             if (!is_password($password)) {
//                 $error["password"] = 'password cho phép sử dụng chuỗi ký tự a-z, A-Z, 0-9 bắt đầu bằng chuỗi ký từ a-z, A-Z và có số lượng ký tự từ 6-32 ký tự';
//             } else {
//                 $password = $password;
//             }
//         } else {
//             $remember_user_login_info["password"] = $_POST['password'];
//             $error["password"] = "số lượng ký tự nhập vào chưa hợp lệ độ dài password từ 8-32 ký tự";
//         }
//     }
   
// }
// if(isset($_POST['btn-submit'])){
//     $abc =  $_POST['name'];
//     echo $abc;
//    echo  check_len_login(  $abc);
// }
?>
<!-- <form action="" method ="post">
    <input type="text" name = "name">
    <button type ="submit" name ="btn-submit">gửi</button>
</form> -->