<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }
        th,td{
            padding: 20px;
        }
    </style>
    <title>Document</title>
</head>

<body>
    <?php
    // BÀI TẬP PHẦN 7
    // 1. Tạo mảng lưu các số lẻ từ 3->150
    // 2. Tạo mảng đa chiều quản lý các bài viết trong website tin tức
    // 3. Tạo mảng đa chiều quản lý các sản phẩm trong website bán hàng
    // 4. Hiển thị danh sách bài viết lên giao diện
    // 5. Hiển thị danh sách sản phẩn lên giao diện

    //Bai1:
    $oddArr = [];
    for ($i = 3; $i <= 150; $i += 1) {
        $oddArr[] = $i;
    }
    echo "<pre>";
    // print_r($oddArr);
    echo "<br>";
    //Bai2
    $postArr = [
        [["postId" => "1"], ["category" => "News"], ["description" => "dsadasdsdas"]],
        [["postId" => "2"], ["category" => "Hots"], ["description" => "dsadasasdad"]]
    ];
    $productArr = [
        [["productId" => "1"], ["category" => "Nước ép"], ["description" => "nước ép nguyên liệu tự nhiên"]],
        [["productId" => "2"], ["category" => "Nước ngọt"], ["description" => "nước ngọt ngon"]]
    ];
    ?>
    <table border-collapse="boder">
        <tr>
            <th>postId</th>
            <th>category</th>
            <th>description</th>
        </tr>
        <?php
        foreach ($postArr as  $value) {
        ?>
        <tr>
            <td><?php echo $value[0]['postId'] ?></td>
            <td><?php echo $value[1]['category'] ?></td>
            <td><?php echo $value[2]['description'] ?></td>
        </tr>
        <?php
        }
        ?>
    </table>

    <table border-collapse="boder">
        <tr>
            <th>productId</th>
            <th>category</th>
            <th>description</th>
        </tr>
        <?php
        foreach ($productArr as  $value) {
        ?>
        <tr>
            <td><?php echo $value[0]['productId'] ?></td>
            <td><?php echo $value[1]['category'] ?></td>
            <td><?php echo $value[2]['description'] ?></td>
        </tr>
        <?php
        }
        ?>
    </table>

</body>

</html>