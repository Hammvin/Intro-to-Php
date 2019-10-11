<?php
//Php Functions
// A function is a block of code that can be used repeatedly
//it will execute immediately when a page loads
// it will only execute when called

//syntax

//function name_of_the_function(){
 //   code to execute;
//}


//Function Declaration
function greetings(){
    echo 'Hello world';
}

echo greetings();
echo "<br>";
echo "<br>";

$name = 'Vinny';
echo strlen($name);
echo "<br>";
echo "<br>";

//arguments and parameters in functions
function greetings_two($fname){
    echo "Hello $fname";
}

greetings_two("Hammond");
echo "<br>";
echo "<br>";

function sum_numbers($num1, $num2){
    $result = $num1 + $num2;
    echo $result;
    echo "<br>";
}

sum_numbers(100,23);
echo "<br>";
echo "<br>";

//default argument to a function
function greetings_three($name = "Vinny"){
    echo "Hello $name";
    echo "<br>";
}

greetings_three();
greetings_three("php Vinny");
echo "<br>";
echo "<br>";

//create a function that counts the number of characters in someones name
//if the number of characters is less than 5 it should echo "Short Name"
//else it should echo name.

function name($name ){
    if (strlen($name) < 5){
        echo "Short Name";
    }else{
        echo "$name";
    }
}

name("Robert");
echo "<br>";

name("OG");
echo "<br>";
echo "<br>";


//echoing letter i

function name_two($letter){
    $the_name = "";
    $length = strlen($letter);

    for ($i = 0; $i < $length; $i++ ){
        if ($letter[$i] == "i"){
            echo "I is present";
            echo "<br>";
        }else{
           $the_name = $letter;
            echo "<br>";
        }
    }
   echo $the_name;
}

name_two("John");
echo "<br>";
echo "<br>";


function findMe($name){
    $findme ="i";
    $pos = stripos($name , $findme);
    if($pos <= $name){
        echo  "the letter $findme is not in the name $name";
    }else{
        echo $name;
    }
}

findMe ("John");

echo "<br>";

//A function that Returns the output back to the variable

function sum_nums($num1 , $num2){
    $res = $num1 + $num2;
    return $res;
}

$ans = sum_nums(12, 53);

echo $ans;
echo "<br>";
echo "<br>";

//Php Arrays
//It stores multiple data i a single variable

$car1 = "Benz";
$car2 = "Lexus";
$car3 = "Nyayo";

$cars = array("Benz","Lexus", "Nyayo");

echo $cars[0];
echo "<br>";
echo "$cars[1] <br>";
echo $cars[2];
echo "<br>";
echo "<br>";

echo "I like $cars[0], $cars[1] and $cars[2]. <br>";

//Array methods or Functions
//count(): finds the number of items in an array
//Looping through an array

for ($i = 0; $i < count($cars); $i++){
    echo "$cars[$i] <br><br>";

}




//Create a function that takes in an array of fruits(7) as an argument
//the function should print out the fruit with high number of characters



//Associative arrays
//makes use of key and value pair
//Method one
$age = array("John" => "23", "Mary" => "34", "Paul" => "45");

//Method two
$carz["Benz"] = "Blue";
$carz["Audi"] = "Black";
$carz["Range"] = "Red";


//Accessing values in associative arrays

echo "John's age is ".$age['John']. "<br>";
echo  $age['Mary']."<br>";
echo $age['Paul']."<br>";

//Looping through an associative array

foreach ($carz as $x => $y){
    echo "$x get $y <br>";
}

//php Sorting arrays
//the elements of an array can be sorted alphabetically or numerical order
//descending or ascending
//sort() - sort arrays in ascending order
//rsort() - sort arrays in a descending order

//asort() - sort associative arrays in ascending order, according to the value
//ksort() - sort associative arrays in ascending order, according to keys

//arsort() - sorts associative arrays in descending order, according to the value
//krsort() - sort associative arrays in descending order , according to the key

echo "sort associative array in ascending order, according to the value <br>";
$salaries = array("Ben" => "300000", "Josh" => "200000", "Winnie" => "50000", "Stephanie" => "100000");
asort($salaries);
foreach ($salaries as $name => $salo){
    echo "$name earns $salo <br>";
}
echo "<br>";

$salaries = array("Ben" => "300000", "Josh" => "200000", "Winnie" => "50000", "Stephanie" => "100000");
ksort($salaries);
foreach ($salaries as $name => $salo){
    echo "$name earns $salo <br>";
}
echo "<br>";

$salaries = array("Ben" => "300000", "Josh" => "200000", "Winnie" => "50000", "Stephanie" => "100000");
arsort($salaries);
foreach ($salaries as $name => $salo){
    echo "$name earns $salo <br>";
}
echo "<br>";


$salaries = array("Ben" => "300000", "Josh" => "200000", "Winnie" => "50000", "Stephanie" => "100000");
krsort($salaries);
foreach ($salaries as $name => $salo){
    echo "$name earns $salo <br>";
}
echo "<br>";




















?>