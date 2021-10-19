<?php 

$server = "remotemysql.com";
$dbname="gSISjg7PrJ";
$username = "gSISjg7PrJ";
$password = "7SFhNzOXoh";

$conn = mysqli_connect($server,$username,$password,$dbname);
if(!$conn){
    die();
}

if($_SERVER['REQUEST_METHOD']=="POST"){
    $username = $_POST['Username'];
    $password = $_POST['Password'];

    $query = "SELECT * FROM USER_DETAILS WHERE NAME ='$username' AND PASSWORD='$password'";

    $run = mysqli_query($conn,$query);
    $values = mysqli_num_rows($run);
    if( $values == 1){
        header("Location:index.html");
    }
    else{
        echo "SELECT * FROM USER_DETAILS WHERE USERNAME ='$username' limit 1";
    }

}
else {
    echo "Hott";
}
?>