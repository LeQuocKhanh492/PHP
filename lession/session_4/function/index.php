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

    require_once "../../../function.php";
    Showshape();
    function sumMultiNumber()
    {
        // echo func_num_args();
        $list_args = func_get_args();
        $t = 0;
        foreach ($list_args as $value) {
            $t += $value;
        }
        echo $t;
    }
    sumMultiNumber(1,2,3);

    $listArr = [2,3,4];
    function sumMultiNumberArr($listArr = []){
        if(is_array($listArr)){
            $t = 0;
            foreach ($listArr as $value) {
                $t += $value;
            }
            echo $t;
        }
    }

    sumMultiNumberArr($listArr);

    function create_input_text($name, $value, $option = array())
    {
        // if(empty($name) || empty($value) || empty($option))
        // {
        //     return "phải có đủ tham số";
        // }
        $name = func_get_arg(0);
        $value = func_get_arg(1);
        $option = func_get_arg(2);
        if(!empty($option))
        {
            $id = $option["id"];
            $class = $option["class"];
        }
        $inputHtml = "<input type = 'text' name = {$name} value = {$value} id = {$id} class = {$class}>";
        echo $inputHtml;
    }
    $option = ["id" => "input_id", "class" => "input_class"];
   echo  create_input_text("username",12,$option);

   $a = 2;
   $b = 2;
    function sum1 (){
    //    return $GLOBALS['a'] + $GLOBALS['b'];
        global $a , $b;
       return $a + $b;
    }
    echo sum1();
    ?>

</body>
</html>