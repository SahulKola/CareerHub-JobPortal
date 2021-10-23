<?php require 'Headers/_header.php';
    session_start();
    if(!isset($_SESSION['login'])){
        header('Location: User-Login.php');
    }
?>

<link rel="stylesheet" href="CSS/Careers.css">
<title> Careers | Career Club</title>
</head>

<body>
    <div class="bg">
        <div class="head">
            <h2>Careers <span>Club</span></h2> <br>
            <p> Open Positions </p>
        </div>
    </div>
    <div class="box">
        <hr>
        <div class="main-content">
            <?php 
             require 'PHP/db.php';
             $query = "SELECT * FROM CAREERS";
             $result = mysqli_query($conn,$query); 
             while($row = mysqli_fetch_assoc($result)){
                echo "<div class='content-box' >
                    <div class='head-details'>
                        <h4>". $row['POSITION']."</h4>
                        <p>".$row['COMPANYNAME']."</p>
                    </div>
                    <span><i class='fas fa-map-marker-alt'></i>  ".$row['LOCATION']."</span> <br>"
                    .$row['JD']."
                    <div class='details'>
                        <p><span> Skills Required </span> :". $row['SKILLS']."</p>
                        <p><span>Year of Passing </span> :".$row['YEAR']."</p>
                        <p><span>Salary </span>:".$row['SAL']."</p>
                    </div>
                    <a href='#'><button class='' type='button'>Apply Now</button></a>
                    <img src='images/icon.png' alt='CClogo'>
                </div>";
            }
             ?>
        </div>

    </div>
</body>
<?php require 'Headers/_footer.php' ?>