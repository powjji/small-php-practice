<?php
//Write a program which will count the "r" characters in the text.
$s = 0;
$chr = "o";
$word = "hello world bojak hoursman";
for ($i = 0; $i <=strlen($word) ; $i++) {
    $found = strpbrk($word[$i], $chr);
    if ($found){
        $s++;
    }
}echo $s;