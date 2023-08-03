<?php

/*
 Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line.
 There will be no hyphen(-) at starting and ending position.


for ($i = 1; $i <=10 ; $i++) {
    if ($i == 10){
        echo $i;
    }
    else{
        echo "$i-";
    }
}
*/


/*
 Create a script using a for loop to add all the integers
between 0 and 30 and display the total.
 $total = 0;
for ($j = 0; $j <= 30; $j++) {
        $total += $j;
}
echo $total;
*/


// Create a script to construct the following pattern, using a nested for loop.
//*
//* *
//* * *
//* * * *
//* * * * *
//* * * * *
//* * * *
//* * *
//* *
//*

$n=5;
for($i=1; $i<=$n; $i++)
{
    for($j=1; $j<=$i; $j++)
    {
        echo ' * ';
    }
    echo "\n";
}
for ($a=$n; $a>=1; $a--){
    for($c=1; $c<=$a; $c++)
    {
        echo ' * ';
    }
    echo "\n";
}
?>