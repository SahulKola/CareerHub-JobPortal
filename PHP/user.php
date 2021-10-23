<?php require '../config/db.php';
session_start();
    if($_SERVER["REQUEST_METHOD"]=="POST"){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $fullname = "$firstname $lastname";
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $mobile = $_POST['mobile'];
    $query = "INSERT INTO users VALUES ('','$fullname','$email','$password','$mobile')";
    print_r($query);
    $result = mysqli_query($conn,$query);
    $msg = "";
    print_r($result);
    print_r($conn);
    if($result){
        header('Location: ../User-Signup.php');
        $_SESSION['user'] = 'user';
    }
    }
    mysqli_close($conn);

?>