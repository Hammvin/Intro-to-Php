<?php include 'header.php';


$name = $email = $password1 = $password2 = "";

function cleaner($data){
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripslashes($data);

    return $data;
}

if (isset($_POST['signupBtn'])){

    //grabbing form data
    $name = $_POST['jina'];
    $email = $_POST['email'];
    $password1 = $_POST['basswad1'];
    $password2 = $_POST['basswad2'];

    //cleaning data
    $name = cleaner($name);
    $email = cleaner($email);
    $password1 = cleaner($password1);
    $password2 = cleaner($password2);


    //Confirm passwords are matching
    if ($password1 !==$password2){
        header('location:signup.php');
    }

    //encrypting the password
    $password2 = md5($password2);

    //database conn
include 'config.php';

    //sql instruction
    $sql = "INSERT INTO `users`(`id`, `name`, `email`, `password`) VALUES (NULL ,'$name',' $email','$password2')";

    if(mysqli_query($conn, $sql)){
        echo "Records inserted successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }

// Close connection
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
                    <input type="email" name="email" placeholder="Enter Email" class="form-control" required>
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

