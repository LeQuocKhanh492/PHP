<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta  >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php
    if(isset($_POST['btn-submit']))
    {
        // echo "<pre>";
        // print_r($_POST);
        // echo "</pre>";
        if(!empty($_POST['gender']))
        {
            foreach($_POST['gender'] as $list)
            {
                echo $list;
            }
            $list_gender = implode(',', $_POST['gender']);
            echo $list_gender;
        }

    }
?>
<form action="" method="post">
    <input type="checkbox" name="gender[]" value="male"> Nam
    <input type="checkbox" name="gender[]" value="female"> Nữ
    <input type="checkbox" name="gender[]" value="other"> Khác
    <input type="submit" value="Gửi" name = "btn-submit">
</form>

</body>
</html>
