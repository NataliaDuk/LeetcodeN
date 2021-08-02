<?php
$l1 = [4, 6, 8];
$l2 = [1, 3, 4];
$rev1 = array_reverse($l1);
$rev2 = array_reverse($l2);
$r1 = implode('', $rev1);
$r1 = (int)$r1;

$r2 = implode('', $rev2);
$r2 = (int)$r2;
$r = $r1 + $r2;
$v=(strrev($r));
$r3=explode(',', $v);

//echo $v1=str_split(strval($v));
//print_r (explode(',', str_split((string)$v)));





//foreach ($rev1 as $value1) {
//    echo implode('', $value1);
//}
//
//foreach ($rev2 as $value2) {
//   echo implode('', $value2);
//}

