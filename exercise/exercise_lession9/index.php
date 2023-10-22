<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    //     Bài tập phần 9
    // 1. Tính số trang $num _page hiển thị khi có tổng số bài $total_rows và sô bài trên mỗi trang $num_per_page.
    // 2. Xuất một mảng số nguyên chẵn từ một mảng số nguyên cho trước
    // 3. Hiển thị mảng danh mục theo đa cấp
    // Giáo dục
    // - - Khuyến học
    // - - Du học
    // Thể thao
    // - - Châu Âu
    // - - Châu
    //bài 1
    $total_row = 100;
    $numper_per_page = 9;
    $page = ceil($total_row / $numper_per_page);
    echo "page = " . $page;

    //bài 2
    $intArr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    $floatArr = [];
    function filerFloatArr($arr)
    {
        if (!empty($arr) && is_array($arr)) {

            foreach ($arr as $arr) {
                if ($arr % 2 != 0) {
                    $floatArr[] = $arr;
                }
            }
        }
        return $floatArr;
    }
    $floatArr = filerFloatArr($intArr);
    echo "<pre>";
    print_r($floatArr);
    echo "</pre>";
    //Bài 3
    $CategoryArr = [
        1 => [
            "cat_id" => "1",
            "cat_title" => "Giáo dục",
            "level" => 0
        ],
        2 => [
            "cat_id" => "2",
            "cat_title" => "Khuyến học",
            "level" => 0
        ],
        3 => [
            "cat_id" => "3",
            "cat_title" => "Du học",
            "level" => 1
        ],
        4 => [
            "cat_id" => "4",
            "cat_title" => "Thể thao",
            "level" => 1
        ],
        5 => [
            "cat_id" => "5",
            "cat_title" => "Du lịch",
            "level" => 0
        ],
        6 => [
            "cat_id" => "6",
            "cat_title" => "leo núi",
            "level" => 2
        ]
    ];
    ?>

    <table>
        <thead>
            <tr>
                <th>
                    ID
                </th>
                <th>
                    Title
                </th>
                <th>
                    Level
                </th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (!empty($CategoryArr)) {
                foreach ($CategoryArr as $item) {
            ?>
                    <tr>
                        <td>
                            <?php echo $item["cat_id"]?>
                        </td>
                        <td>
                        <?php echo str_repeat('--',$item["level"]).  $item["cat_title"]?>

                        </td>
                        <td>
                        <?php echo $item["level"]?>
                        </td>
                    </tr>
            <?php
                }
            }
            ?>

        </tbody>
    </table>
</body>

</html>