<?php
//Write a program to check student grade based on marks

$marks = 40;

if ($marks > 60){
    echo "A";

}
elseif ($marks>=49){
    echo "B";
}
elseif($marks>=30){
    echo "D";
}
else{
    echo "F";
}