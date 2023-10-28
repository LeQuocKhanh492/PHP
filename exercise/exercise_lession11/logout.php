<?php

// setcookie("is_login_cookie", true, time() - 86400);
// setcookie("user_login_cookie", 'khanh', time() - 86400);
if(isset($_GET['action']))
{
    $tam = $_GET['action'];
}
if($tam == 'logout')
{
setcookie("is_login_cookie", true, time() - 3600);
setcookie("user_login_cookie", 'khanh', time() - 3600); 

 }
    
    header('location:index.php');

?>