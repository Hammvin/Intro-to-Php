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


$x = 2;
$y = 3;
if ($x>=$y){
    echo "X is greater than or equal to variable Y";
}else{
    echo "X is not equal to or greater than Y <br><br>";
}




?>