<?php
//Php Conditional Statements
//if..
//if...else...
//if...elseif...else
//switch

//if(condition){
//  code to execute
//}

//if..
$time = date("H");
if($time < "20"){
    echo "Good day";
    echo "<br>";
    echo $time;
    echo "<br>";
}


$x = 3;
$y = 2;
if ($x >= $y){
    echo "X is greater than or equal to variable Y";
}else{
    echo "X is not equal to or greater than Y <br><br>";
}

//if...elseif()...else
if($x >= $y){
    echo "Variable X is greater than or equal to variable y";
    echo "<br>";
}elseif ($x == $y){
    echo "Variable x is equal to variable y";
    echo "<br>";
}elseif ($x == 4){
    echo "variable x is equal to 4";
    echo "<br>";
}else{
    echo "I will run if the conditions are not met";
    echo "<br>";
}



//switch Case
//switch (x){
 //   case test1:
  //      code to execute;
 //       break;

 //   case test2:
 //       code to execute;
 //       break;

//    case test3:
 //       code to execute;
//        break;

 //   default:
   //     code to execute;
//}

$fav_car = "Range Rover";
switch($fav_car){
    case "Benz":
        echo "OG's favourite car is Benz";
        break;

    case "Bently":
        echo "OG's favourite car is Bently";
        break;

    case "Pro-box":
        echo "OG's favourite car is Pro-box";
        break;

    case "Range Rover":
        echo "OG's favourite car is Range Rover";
        break;

    default:
        echo "OG has no taste for the above cars";
        echo "<br>";
        echo "<br>";
        echo "<br>";
}
//Assignment
//create a switch that will output Good morning if the time
//is between 7am and noon and output good afternoon if the time is 12 noon to 4pm
//and output good evening when the time is 4pm to 9pm.

$time = 8.30;

switch ($time){
    case $time <= 11.59;
    echo "Good morning";
    break;

    case $time <= 16.00;
    echo "Good Afternoon";
    break;

    case $time <= 23.00;
        echo "Good Afternoon";
        break;

}




?>