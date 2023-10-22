<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .error{
            color:red;
        }

    </style>
    <title>Document</title>
</head>
<body>
<?php
    if (isset($_POST['btn-login'])) {
        $error = [];

        if(empty($_POST['account'])) {
            $error["account"] = 'tài khoản không được để trống';
        }
       else{
        $account = $_POST['account'];
       }

       if(empty($_POST['password'])) {
      
        $error["password"] = 'mật khẩu không được để trống';
        }
        else{
            $password = $_POST['password'];
        }

    //     if(!empty($error))
    //     {
    //         echo "<pre>";
    //         echo print_r($error);
    //         echo "</pre>";
    //     }
    //    else
    //    {
    //     echo $account;
    //     echo $password;
    //    }
    }


    if (isset($_POST['btn-register'])) {
        $error = [];

        if(empty($_POST['gender'])) {
            $error["gender"] = 'bạn cần chọn 1 giới tính';
        }
       else{
        $gender = $_POST['gender'];
       }
    }
    ?>
    <form action="" method="POST">
        <label for="account">account: </label>
        <input type="text" name="account" id="account" value ="<?php  if(!empty($account)){echo $account;}?>" autocomplete="off">
        <p class ="error"><?php if(!empty($error["account"])){echo $error["account"];}?></p>
        <br>
        <br>
        <label for="password">password: </label>
        <input type="password" name="password" id="password">
        <p class ="error"><?php if(!empty($error["password"])){echo $error["password"];}?></p>
        <br>
        <br>
        <button type="submit" name="btn-login">login</button>
    </form>
    <br>
    <br>
    <form action="" method="POST">
        <label for="gender">Giới tính: </label>
        <select name="gender" id="gender">
            <option value="">--chọn--</option>
            <option value="male"  <?php if(!empty($gender) && $gender == "male"){ echo "selected='select'";}?> >nam</option>
            <option value="female" <?php if(!empty($gender) && $gender == "female"){ echo "selected='select'";}?> >nữ</option>
        </select>
        <p class ="error"><?php if(!empty($error["gender"])){echo $error["gender"];}?></p> 
        <br>
        <br>
        <button type="submit" name="btn-register">login</button>
    </form>
</body>
</html>