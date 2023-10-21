<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
// __LINE__ Số dòng hiện tại khi gọngiá trị hẳng _ LINE
// __FILE__ Đường dẫn đến file được gọi hằng
// __DIR__Đường dẫn đến folder chứa file hiện hành
// __CLASS__ Lớp được gọi trong lập trình OOP
// __METHOD__ Phương thức được gọi trong lập trinh OOP
// __NAMESPACE__ Tên NAMESPACE trong lập trinh OOP
    define("MINSIZE","50");
    echo "MINSIZE= " . MINSIZE;
    echo "<br>";
    echo "__FILE__ = " . __FILE__;
    echo "<br>";
    echo "__DIR__ = " . __DIR__;
    ?>
</body>
</html>