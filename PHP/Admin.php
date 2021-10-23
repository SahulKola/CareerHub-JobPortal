<?php require 'db.php';
    if($_SERVER["REQUEST_METHOD"]=="POST"){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $fullname = "$firstname $lastname";
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $mobile = $_POST['mobile'];
    $query = "INSERT INTO admins VALUES ('','$fullname','$email','$password','$mobile')";
    $res = mysqli_query($conn,$query);
    $msg = "";
    $class = "";
    if($res){
        $msg = "Congratulations, You have successfully registered !";
        $class = "success";
        header('Location: ../Admin-Signup.php');
    }
    }
?>