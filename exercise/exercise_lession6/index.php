<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    // BÀI TẬP PHẦN 6
    // 1. Tính tổng các số chẵn từ 1 đến n(n>=2)
    // T1 = 2 + 4 + 6 + ... + n
    // 2. Tính tổng nghịch đảo các số chia hết cho 3 từ 3 đến n(n>=3)
    // Т2 = ⅓ + ⅙ + ... + 1/n
    // 3. Tính tổng chuỗi
    // T3 = 1/2 + 2/3 + 3/4 + ... n/n+1 (n>=1)
    // 4. Giải phương trình bậc 2

    //Bai 1
    echo "Bài 1<br> ";
    $n = 4;
    $T = 0;
    if ($n >= 2) {
        for ($i = 2; $i <= $n; $i += 2) {
            $T += $i;
        }
        echo "T= ", $T;
    } else {
        echo "n >= 2";
    }

    function countNumberEven($n)
    {
        $T = 0;
        if ($n >= 2) {
            for ($i = 2; $i <= $n; $i += 2) {
                $T += $i;
            }
            echo "T= ", $T;
        } else {
            echo "n >= 2";
        }
    }
    echo "<br>";
    countNumberEven(4);
    echo "<br>";
    // Bai2
    echo "Bài 2 <br>";
    $n = 9;
    $T2 = 0;
    if ($n >= 3) {
        for ($i = 3; $i <= $n; $i += 3) {
            $T2 += (1 / $i);
        }
        echo "T2 = ", $T2;
    }
    echo "<br>";
    function totalInverse($n)
    {
        $T2 = 0;
        if ($n >= 3) {
            for ($i = 3; $i <= $n; $i += 3) {
                $T2 += (1 / $i);
            }
            echo "T2 = ", $T2;
        }
    }
    totalInverse(9);
    echo "<br>";
    echo "Bài 3 <br>";
    $n = 3;
    $T2 = 0;
    if ($n >= 1) {

        for ($i = 1; $i <= $n; $i++) {
            $T2 += $i / ($i + 1);
        }
        echo "T2= " . $T2;
    }
    echo "<br>";
    echo "Bài 4 <br>";
    $a = 1;
    $b = -4;
    $c = 4;
    $denta = ($b * $b) - (4 * $a * $c) ;
    if( $a != 0)
    {
        if($denta > 0)
        {
            $x1 = ((-$b + sqrt($denta)) / (2 * $a));
            $x2 = ((-$b - sqrt($denta)) / (2 * $a));
            echo " phương trình có nghiệm  X1 = {$x1}";
            echo " phương trình có nghiệm  X2 = {$x2}";
        }
        elseif($denta < 0)
        {
            echo "phương trình vô nghiệm";
        }
        else{
            $x1 = -$b / (2 * $a);
            $x2 = $x1;
            echo " phương trình có nghiệm kép X1 VÀ X2 = {$x1}";
        }
    }
    else
    {
        echo "a phải khác 0";
    }
    ?>
</body>

</html>