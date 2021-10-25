<?php require 'Admin-Dashboard.php'; 
    session_start();
    if(!isset($_SESSION['adminid'])){
        header('Location: Admin-Login.php');
    }
?>

<div class="box">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Job Id</th>
                <th scope="col">User Id</th>
                <th scope="col">Candidate Name</th>
                <th scope="col">Company</th>
                <th scope="col">Position</th>
                <th scope="col">Qualification</th>
                <th scope="col">Stream</th>
                <th scope="col">Percentage</th>
                <th scope="col">Year</th>
            </tr>
        </thead>
        <tbody>
            <?php 
             require 'PHP/db.php';
             $query = "SELECT * FROM CAPPLIED";
             $result = mysqli_query($conn,$query);
             $row = mysqli_fetch_assoc($result);
            
             while($row = mysqli_fetch_assoc($result)){
                 $jid = $row['JID'];
                 $que = "SELECT * FROM CAREERS WHERE JID = '$jid'";
                 $ans = mysqli_query($conn,$que);
                 $roww = mysqli_fetch_assoc($ans);
                echo "<tr>
                <th scope='row'>".$row['AID']."</th>
                <td>".$row['JID']."</td>
                <td>".$row['ID']."</td>
                <td>".$row['FULLNAME']."</td>
                <td>".$roww['COMPANYNAME']."</td>
                <td>".$roww['POSITION']."</td>
                <td>".$row['QUAL']."</td>
                <td>".$row['STREAM']."</td>
                <td>".$row['GPA']."</td>
                <td>".$row['YEAR']."</td>";
             }
                    ?> 
            </tbody>
    </table>
</div>