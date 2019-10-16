
<?php
//initializing variables
$username = $email = $password1 = $password2 = "";

if (isset($_POST['Sign-upBtn'])){

    //GRAB THE POST DATA
    $name = $_POST['username'];
    $email = $_POST['email'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];

    if ($password1 === $password2) {
        $newpassword = $password1;

        //Config for the DB
        $server_name = "localhost";
        $username = "root";
        $password = "";
        $dbname = "Facebook";

        $conn = mysqli_connect($server_name, $username, $password, $dbname);

        //Check connection
        if (!$conn) {
            die("Connection unsuccessful: " . mysqli_connect_error());
        }
        //execute the query
        $sql = "INSERT INTO `users`(`id`, `username`, `email`, `password`) VALUES (NULL ,'$name','$email','$newpassword')";

        if (mysqli_query($conn, $sql)){
            echo "New record created successfully";

            header("location:login.php");
        }else{
            echo "Error:" .$sql ."<br>" . mysqli_error($conn);
        }
    }


    //echo $username.'<br>';
    //echo $email."<br>";
    //echo $password1."<br>";
    //echo $password2."<br>";

}



?>

<html>
<head>
    <title>Sign-up form</title>
</head>
<body>
<form action="Complete_form.php" method="post">
    <input type="text" placeholder="Username" name="username" required><br><br>
    <input type="email" placeholder="Email" name="email" required><br><br>
    <input type="password" placeholder="Password" name="password1" required><br><br>
    <input type="password" placeholder="Confirm Password" name="password2" required><br><br>
    <input type="submit"  name="Sign-upBtn" value="Signup">
</form>
</body>
</html>
