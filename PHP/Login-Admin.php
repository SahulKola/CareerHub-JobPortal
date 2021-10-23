<?php include '../config/db.php';
session_start();
    if($_SERVER["REQUEST_METHOD"]=="POST"){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM ADMINS WHERE EMAIL = '$email' AND PASSWORD = '$password'";
    $res = mysqli_query($conn,$query);
    $msg = "";
    $count = mysqli_num_rows($res);
    if($res){
        header('Location: ../Admin-Signup.php');
        $_SESSION['success'] = 'success';
    }
    }
    mysqli_close($conn);
?>