<?php
/*Write a Program to create given pattern with * using for loop
*
**
***
****
*****


*/

for ($i=0; $i < 5 ; $i++) {
    for ($j = 0; $j <=$i; $j++) {
        echo "*";
    }
    echo  "<br>";
}