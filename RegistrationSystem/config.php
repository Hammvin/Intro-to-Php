<?php
//Config for the DB
$server_name = "localhost";
$username = "root";
$password = "";
$dbname = "testDb";

$conn = mysqli_connect($server_name, $username, $password, $dbname);

//Check connection
if (!$conn) {
    die("Connection unsuccessful: " . mysqli_connect_error());
}

?>