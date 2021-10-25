<?php require 'Admin-Dashboard.php';
if(!isset($_SESSION['adminid'])){
        header('Location: Admin-Login.php');
    } ?>
<div class="box">
    <img src="../images/UnderConstruction.svg" alt="Under Construction Image" id="image">
    <p class="const-contents">
        Oops! Currently this Section is <br>
        <span>Under Construction</span>
    </p>
</div>