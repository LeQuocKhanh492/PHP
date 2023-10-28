<?php
session_start();
// unset($_COOKIE['is_login_cookie']);
echo "session = ";
echo var_dump($_SESSION['is_login']);
echo "<br>";
echo "cookie is login= ";
echo  var_dump($_COOKIE['is_login_cookie']);
echo "<br>";
echo "cookie user = ";
echo  var_dump($_COOKIE['user_login_cookie']);
echo "<br>";
$timestamp = "2023-10-25T06:34:25.609Z";
$dateTime = new DateTime($timestamp);
echo $dateTime->format('Y-m-d H:i:s');
echo "<br>";
echo date('H:i:s');

?>
<a href ="logout.php?action=logout">outlog</a>