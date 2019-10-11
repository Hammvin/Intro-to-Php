<?php
//initializing variables
$username = $email = $password1 = $password2 = "";

if (isset($_POST['Sign-upBtn'])){

    //GRAB THE POST DATA
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];

    if ($password1 === $password2){
        $newpassword = $password1;

        //Collect and add data to the DB
        $server_name = "localhost";
        $username = "root";
        $password = "";
        $dbname = "Facebook";

        $conn = mysqli_connect($server_name,$username,$password,$dbname);

        //Check connection
        if (!$conn){
            echo "Connection to the DB unsuccessful";
        }else{
            //execute the query
            $sql = "INSERT INTO `users`(`id`, `username`, `email`, `password`) VALUES (NULL ,`$username`,`$email`,`$newpassword`)";

            if (mysqli_query($conn, $sql)){

                //Send the user to the login page
        header("location:login.php");
            }else{
                echo "Saving unsuccessful <br>";
            }
            echo "Connection successful <br>";
        }


    }else {
        header("location:Complete_form.php");
    }



    //echo $username.'<br>';
    //echo $email."<br>";
    //echo $password1."<br>";
    //echo $password2."<br>";

}



?>

<html>
<head>
    <title>Signup form</title>
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

