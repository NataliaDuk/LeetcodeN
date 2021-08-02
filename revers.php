<?php

$x = -123;


$y = strrev($x);
if ((-pow(2, 31)) <= $y and $y <= pow(2, 31)) {
    echo $y;
} else echo 0;


//echo $v1=str_split(strval($v));
//print_r (explode(',', str_split((string)$v)));


//foreach ($rev1 as $value1) {
//    echo implode('', $value1);
//}
//
//foreach ($rev2 as $value2) {
//   echo implode('', $value2);
//}

