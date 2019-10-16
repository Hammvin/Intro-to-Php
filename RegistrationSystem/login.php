<?php include 'header.php';
include 'config.php';

$email = $password1 = '';
function cleaner($data){
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripslashes($data);
    return $data;
}
if(isset($_POST['loginBtn'])){

//    grabbing form data
    $email = $_POST['arafa'];
    $password = $_POST['password'];

//    clean the data
    $email = cleaner($email);
    $password = cleaner($password);

    //encrypt the password
    $password = md5($password);


//    check if the user exists in the database: if true ask them to login instead
    $sql = "SELECT `email`, `password` FROM `users` WHERE email = '$email' AND password = '$password'";
    $results = mysqli_query($conn,$sql);


    if(mysqli_num_rows($results) > 0){

        $_SESSION['logged-in'] = true;

        //Redirect if user is present
        header("location:index.php");
        exit();
    }else{
            //Redirect to the login page
            header("location:signup.php");

    }
    mysqli_close($conn);
}
?>

<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <form action="login.php" method="post">
                <div class="form-group">
                    <label for ='username'>Email</label>
                    <input type="email" name="arafa" placeholder="Enter Email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for ='username'>Password</label>
                    <input type="password" name="password" placeholder="Enter Password" class="form-control" required>
                </div>
                <div class="form-group">
                    <input type="submit" name="loginBtn" value="login">
                </div>

            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>













<?php include 'footer.php'?>

