<?php include 'header.php';



if (isset($_SESSION['logged-in'])){
    echo '<h1>Welcome to Your profile.</h1>';
}else{
    header('location:login.php');
}

?>
