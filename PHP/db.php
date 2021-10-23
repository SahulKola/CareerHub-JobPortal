<?php 
    $server = "localhost";
    $username="root";
    $password="";
    $dbname = "jobportal";
    $conn = mysqli_connect($server,$username,$password,$dbname);
if(!$conn){
    die();
    echo "Error";
}
?>