<?php
//php Superglobals
//In php we have variables that are superglobal, meaning they are always
//accessible, regardless of the SCOPE- they can be accessed from any function , class
// or file without having to do anything special.

function get_names($fname, $Lname){
    $fastname = $fname;
    $lastname = $Lname;
    $fullname = $fname. " ". $lastname;

    print $fullname ."<br>";
}

get_names("Brian", "Dev");
echo "<br>";
echo "<br>";

//1.$globals
//2.$_Server
//$_REQUEST
//$_POST
//$_GET
//$_FILES
//$_ENV
//$-COOKIES
//$_SESSION

//1.$GLOBALS
//Superglobal variable which is used to access variables from anywhere in php script(
// function or method). Php stores all globals in an array called $GLOBALS[index]. The
//index holds the name of the variable

$x = 50;
$y = 35;

function addition(){
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];

}

//Accessing the variable z
addition();
echo $z;
echo "<br>";



//2. $_SERVER
// IS A PHP SUPERGLOBAL VARIABLE WHICH HOLDS INFORMATION about headers, paths and scripts locations

echo $_SERVER["PHP_SELF"]. "<BR>";
echo $_SERVER["SERVER_NAME"]."<br>";
echo $_SERVER["REQUEST_METHOD"]."<br>";
//echo $_SERVER["HTTP_HOST"]. "<br>";
//echo $_SERVER['HTTP_REFERER']."<br>";
//echo $_SERVER['HTTP_USER_AGENT']. "<br>";
//echo $_SERVER['SCRIPT_NAME']. "<br>";

echo "<br>";
echo "<br>";


//$_POST
//used to collect data after submitting an html form with a method ='post'


?>
<h1>Processing $_POST</h1>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    <input type="text" name="jina" placeholder="Enter your name..."><br><br>
    <input type="email" name="email" placeholder="Enter your email.."><br><br>
    <input type="password" name="password" placeholder="Enter password.."><br><br>
    <input type="submit" value="Send Data">

</form>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['jina'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    if (empty($name)){
        echo "Please enter your name <br>";
    }
    if (empty($email)){
        echo "Please enter your email <br>";
    }
    if (empty($pass)){
        echo "Please enter your password <br>";
    }
    echo  $name."<br>";
    echo  $email."<br>";
    echo  $pass."<br>";

}



//Php $_GET
//Used to collect data after submitting html form with a method ='get'

?>
<h1>Processing $_GET</h1>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    <input type="text" name="jina" placeholder="Enter your name..."><br><br>
    <input type="email" name="email" placeholder="Enter your email.."><br><br>
    <input type="password" name="password" placeholder="Enter password.."><br><br>
    <input type="submit" value="Send Data">

</form>

<?php

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $name = $_GET['jina'];
    $email = $_GET['email'];
    $pass = $_GET['password'];

    if (empty($name)){
        echo "Please enter your name <br>";
    }
    if (empty($email)){
        echo "Please enter your email <br>";
    }
    if (empty($pass)){
        echo "Please enter your password <br>";
    }
    echo  $name."<br>";
    echo  $email."<br>";
    echo  $pass."<br>";

}
echo "<a href='Lesson_1.php?country=Kenya'> COUNTRY</a>";
$country = $_GET['country'];
echo $country;
?>

