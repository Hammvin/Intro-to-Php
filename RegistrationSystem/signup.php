<?php include 'header.php';
include 'config.php';
$name = $email = $password1 = $password2 = '';
function cleaner($data){
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripslashes($data);
    return $data;
}
if(isset($_POST['signupBtn'])){
//    grabbing form data
    $name = $_POST['jina'];
    $email = $_POST['arafa'];
    $password1 = $_POST['basswad1'];
    $password2 = $_POST['basswad2'];

//    clean the data
    $name = cleaner($name);
    $email = cleaner($email);
    $password1 = cleaner($password1);
    $password2 = cleaner($password2);


//    check if the user exists in the database: if true ask them to login instead
    $sql = "SELECT * FROM `users` WHERE email ='$email' LIMIT 1";
    $results = mysqli_query($conn,$sql);


    if(mysqli_num_rows($results) > 0){
        header("location:login.php");
        exit();
    }else{

        //Check if passwords match
        if($password1!==$password2){
            $password_err = 'Error, passwords not matching';

            header('location:signup.php');
            exit();

        }else{

//            encrypt the password
            $password1 = md5($password2);

            //Insert user into the database
            $sql = "INSERT INTO `users`(`id`, `name`, `email`, `password`) VALUES (NULL,'$name','$email','$password1')";
            if (mysqli_query($conn,$sql)){
                echo "New record added";
            }else{
                echo "Error: " .$sql . "<br>";
            }

            //Redirect to the login page
            header("location:login.php");
        }
    }
    mysqli_close($conn);
}
?>

<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <form action="signup.php" method="post">
                <div class="form-group">
                    <label for ='username'>Username</label>
                    <input type="text" name="jina" placeholder="Enter Username" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for ='username'>Email</label>
                    <input type="email" name="arafa" placeholder="Enter Email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for ='username'>Password</label>
                    <input type="password" name="basswad1" placeholder="Enter Password" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for ='password'>Confirm Password</label>
                    <input type="password" name="basswad2" placeholder="Confirm Password" class="form-control" required>
                </div>
                <div class="form-group">
                    <input type="submit" name="signupBtn" value="Signup">
                </div>

            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>













<?php include 'footer.php'?>

