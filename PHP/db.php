<?php 
    $server = "remotemysql.com";
    $username="gSISjg7PrJ";
    $password="7SFhNzOXoh";
    $dbname = "gSISjg7PrJ";
    $conn = mysqli_connect($server,$username,$password,$dbname);
if(!$conn){
    die();
    echo "Error";
}
?>