<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $arr = array(
        1 => array(
            "id"=> "1",
            "name"=> "khánh",
            "address"=> "cần thơ"
        ),       
        2 => array(
            "id"=> "2",
            "name"=> "khánh lê",
            "address"=> "cần thơ 2"
        )
        );
        echo "<pre>";
        print_r($arr);


        
        $arr2 = [
            "1" => ["id"=> "1",
            "name"=> "khánh",
            "address"=> "cần thơ"],
            "2" => ["id"=> "1",
            "name"=> "khánh",
            "address"=> "cần thơ"],
        ];
        print_r($arr);
        $listArr = [1,2,3];
    ?>
</body>
</html>