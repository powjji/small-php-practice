<?php

//
//for ($i = 0; $i <4; $i++) {
//    echo "*";
//}echo "\n";
//for ($j = 0; $j < 2 ; $j++) {
//    echo "*    *";
//    echo "\n";
//}
//for ($k = 0; $k <4; $k++) {
//    echo "*";
//}echo "\n";
//for ($j = 0; $j < 2 ; $j++) {
//    echo "*    *";
//    echo "\n";
//}
//for ($k = 0; $k <4; $k++) {
//    echo "*";}

$list = array();
$str='1234-STR';
for ($i = 0; $i <strlen($str) ; $i++) {
    if ($str[$i] == (int)$str[$i]) {
        $temp = (int)$str[$i];
        $list[] = $temp;
    }
}var_dump($list);