<?php
//Php operators
//OP are used for arithmetic and logical operations

//1.Arithmetic operators

$x= 10;
$y=2;
//Addition
$result=$x+$y;

echo "$x+$y=$result";
echo "<br>";

//Subtraction
$result= $x-$y;

echo "$x-$y=$result";
echo "<br>";

//Multiplication
$result=$x*$y;

echo "$x*$y=$result";
echo "<br>";

//Division
$result=$x/$y;

echo "$x/$y= $result";
echo "<br>";

//Modulus
$result=$x%$y;
echo "$x%$y=$result";
echo "<br>";

//exponential
$result=$x**$y;
echo "$x**$y=$result";
echo "<br>";


//2.Assignment OP
$a = 'b';
$x = $x+1;
$x +=1;
echo $x;
echo "<br>";

$x = $x-1;
$x -=1;
echo $x;
echo "<br>";

$x = $x*1;
$x *=1;
echo $x;
echo "<br>";

$x = $x%1;
$x %=1;
echo $x;
echo "<br>";

$x = $x**1;
$x **=1;
echo $x;
echo "<br>";
echo "<br>";



//Comparison op
//Equal
$x==$y;
var_dump($x == $y);
echo "<br>";

//identical (===) returns if $x and $y are equal and are of the same datatype

var_dump($x === $y);
echo "<br>";

//Not Equal (!=)returns true if variable $x is not equal to $y
var_dump($x != $y);
echo "<br>";

//Not Identical (!==) returns true if variable $x is not equal to $y and they are not identical
var_dump($x !== $y);
echo "<br>";
echo "<br>";
echo "<br>";


//>,<,>=,<=

$x =100;
$y =50;

var_dump($x > $y);
echo  "<br>";

var_dump($x < $y);
echo  "<br>";

var_dump($x <= $y);
echo  "<br>";

var_dump($x >= $y);
echo  "<br>";
echo "<br>";
echo "<br>";

//Php Increment and Decrement Op
//Increment op are used to increase the value of a variable
//Decrement op are used to decrease the value of a variable

$a= 0;
//Pre-increment
++$a;
echo $a;
echo "<br>";

//Post-increment

$a= 0;
$a++;
echo $a;
echo "<br>";

//Logical Operator
//Logical And/&&: returns true if both conditions are true.

$x= 12;
$y= 50;
if ($x<$y and $y> 49){
    echo "Hello world";
    echo "<br>";
    echo "<br>";

}

//Or/||: returns true if both conditions is true
if ($x<$y or $y> 49){
    echo "Hello world";
    echo "<br>";
    echo "<br>";

}


//Not/!: return true if a variable is not true
$x = 100;
if ($x !==80){
    echo "$x is not equal to 80";
    echo "<br>";
    echo "<br>";
}
































?>