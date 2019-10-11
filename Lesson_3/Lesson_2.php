<?php
//1.Remove white spaces
//2.Remove special characters e.g (\)
$username = $email = $password1 = $password2 = '';
//above states that all of them are equal to an empty string so that we tell php that we are
//about to start filling those variables with data
//    $email = $_POST['email'];
//    $password1 = $_POST['password1'];
//    $password2 = $_POST['password2'];

//    function rm_trash($data)
//    {
//        $data = trim($data);
//        $data = stripslashes($data);
//        $data = htmlspecialchars($data);
////$data which comes after is different from $data
////trim removes white spaces from $data then reassigns the info to the next $data
////stripslashes removes slashes and reassigns the info to the next $data e.t.c
////the last $data will now be clean without the white spaces, slashes & spclchrs
//
 //       return $data;
 //   }

//}
//Now to apply this you do:

function rm_trash($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = rm_trash($_POST['username']);
    $email = rm_trash($_POST['email']);
    $password1 = trim($_POST['password1']);
    $password2 = trim($_POST['password2']);

    if (empty($username)){
        echo "Please enter your name <br>";
    }
    if (empty($email)){
        echo "Please enter your email <br>";
    }
    if (empty($password1)){
        echo "You must fill in password <br>";
    }
    if (empty($password2)){
        echo "You must confirm password <br>";
    }


    echo $username."<br>";
    echo $email."<br>";
    echo $password1."<br>";
    echo $password2."<br>";

}


//Assignment: Practice on functions that take a variable and return it






?>