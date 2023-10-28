<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

    // 1.Xây dựng hàm chuyển hướng redirect_to()
    // 2.Xây dựng hàm gọi giao diện
    // get_header()
    // get_footer()

    function redirect_to($route){
        header("location:{$route}");
    }
    function get_header(){
        include "./header.php";
    }
    function get_footer(){
        include "./footer.php";
    }

// get_header();

// get_footer();


if(isset($_GET['action']))
{
    $action = $_GET['action'];
    $file = $action. '.php';
    if(glob($file))
    {

        redirect_to("./header.php");
    }
    else{
       echo "<script> alert('không tìm thấy đường dẫn') </script>";
    }

}

?>
<a href ="?action=header">test</a>
</body>
</html>