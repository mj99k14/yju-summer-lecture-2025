<?php

// echo sum(1, 2);

// function sum($a, $b)
// {
//     return $a  + $b;
// }


// //hoisting o
// //overloading x
// //call-by-value & call-by-reference
//First-class citizen


// $foo = 2;
// $bar = function() use ($foo)
// {
//     echo "배고파<br>".$foo
// };

// $foo =10;

// $bar();

function sum($a, $b)
{
    echo $a + $b;
}

$test = "sum";
$test(2, 3);
