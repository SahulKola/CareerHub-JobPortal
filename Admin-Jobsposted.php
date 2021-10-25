<?php require 'Admin-Dashboard.php';
    if(!isset($_SESSION['adminlogin'])){
        header('Location: Admin-Login.php');
    }
?>
<div class="box">
    <?php
        require 'PHP/db.php';
        $id = $_SESSION['adminid'];
        $query = "SELECT * FROM CAREERS WHERE ID = '$id'";
        $result = mysqli_query($conn,$query); 
        if($result){
        while($row = mysqli_fetch_assoc($result)){
            echo "<div class='posted'>
                <h3><span># ".$row['JID']."</span> <br> Company Name : ".$row['COMPANYNAME']."</h3> 
            <h5> Open Position : ".$row['POSITION']."</h5>
        <b> Location : </b>".$row['LOCATION']."
        <p> Job Description : ".$row['JD']."</p>
        <p><b>Skills Required : </b>".$row['SKILLS']."</p>
        <p><b>Year of Passing : </b>".$row['YEAR']."</p>
        <p><b>Salary : </b>".$row['SAL']."</p>
            </div>";
            }
        }
        else {
            echo "<h4> Not Posted Any Jobs </h4>";
        }
             ?>
</div>