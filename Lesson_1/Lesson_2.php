<?php
//php data types
//data types is a way of organizing data in a program
//php data types
//1.Strings
//2.Integers
//3.Float
//4.Boolean
//5.Arrays
//6.Objects
//7.Null
//8.Resources

//STRINGS
//a string is a sequence of characters enclosed in double or single quotes eg. "Hello World"
// 'php is ow-some'

$greetings ="Hello php dev";

// A function is a key word/name that does something specific
//counting characters
echo  strlen("Hello");
echo "<br>";
//counting words
echo str_word_count("hello world, Php is owesome");
echo "<br>";
//Reversing the order of Characters
echo strrev('FizzBuzz');
echo "<br>";
//Searching for a word within a sting
echo strpos('hello world', "world");
echo "<br>";
//Replace a text within a string
echo str_replace("world", "Dolly","Hello world");
echo "<br>";


//Numbers
//a.Integers
//php has the following functions to check if the type of a variable is integer
//is_int()
//is_long()
$x=6453;
var_dump($x);
echo "<br>";

var_dump(is_int($x));
echo "<br>";

//Php constant
//To create a constant use the define() function
//syntax
//define(name, value, case-insensitive)
//name:the specific name of the constant
//value: The specific value of the constant
//case-insensitive: Specifies whether the constant is name shoild be case-insensitive
//case-sensitive: false by default

define("pi", 3.142);
echo pi;
echo "<br>";
echo Pi;
echo "<br>";

//case-insensitive
define("water","h20", true);
echo water;
echo "<br>";
echo Water;
echo "<br>";
echo wAter;
echo "<br>";
echo WATER;







?>