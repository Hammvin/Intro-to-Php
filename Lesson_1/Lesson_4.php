<?php
//Use a loop if you want he same block of code to be run over and over again in a row
//Loops:
//while
//do...while
//for..
//foreach


//1. While loop
//Lops if a certain condition is true
//while (condition){
//    code to execute;
//}

$x = 0;
while($x <= 5){
    echo "the number is $x <br>";
    $x++;
    echo "<br>";
}


//do...while
//Executes the block of code once then check the condition and repeat the loop while specified
//condition is true
//do{
   // code to execute;
   // $x++;
//}while(condition)

$y = 0;

do{
    echo "The number is $y<br><br>";
    $y++;
}while($y < 10);


//For Loop
//Executes a block of code a specified number of tomes

//Syntax

//for (init counter;test counter;increment counter){
//    code to execute;
//}

$y = 0;
for ($y = 0; $y < 10; $y++){
    echo "the number is $y<br>";
}
















?>