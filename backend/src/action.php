<?php
$sum = 0;
for ($x = 1; $x <= 5; $x++) {
    $sum += (int)$_POST["value$x"];

    echo "입력값:"  . (int)$_POST["value$x"];
}

echo "평균" . $sum;

// $a = $_POST["value"];
// $b =  $_POST['value'];
// $c =  $_POST['value'];
// $d =  $_POST['value'];
// $e =  $_POST['value'];

// $sum = $a + $b + $c + $d + $e;


// echo $sum;
