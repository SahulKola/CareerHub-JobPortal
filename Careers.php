<?php require 'Headers/_header.php';
  session_start();
  if(!isset($_SESSION['userid'])){
    header('Location: User-Login.php');
  }
?>

<link rel="stylesheet" href="CSS/Careerspage.css">
<title> Careers | Career Hub</title>
</head>

<body>
  <div class="bg">
    <div class="head">
      <h2>Careers <span>Hub</span></h2> <br>
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
                    <a href='#id=".$row['JID']."'><button type='button' class='button' data-bs-toggle='modal' data-bs-target='#staticBackdrop'>Apply Now</button></a>
                    <img src='images/icon.png' alt='CClogo'>
                </div>";
            }
            ?>
    </div>
  </div>
  <?php
    require 'PHP/db.php'; 
    if(isset($_POST['apply'])){
      
      $name = $_POST['name'];
      $company = $_POST['company'];
      $position = $_POST['position'];
      $qual = $_POST['qualification'];
      $stream = $_POST['stream'];
      $percent = $_POST['percentage'];
      $year = $_POST['year'];
      $uid = $_SESSION['userid'];
      $query = "SELECT JID FROM CAREERS WHERE COMPANYNAME = '$company' AND POSITION = '$position'";
      $res = mysqli_query($conn,$query);
      $row = mysqli_fetch_assoc($res);
      if(!$row){
        echo "<script> alert('Please make sure CompanyName and Position must be same as in Careers Page') </script>";
      }
      else{
          $jid = $row['JID'];
          $que = "INSERT INTO CAPPLIED VALUES(NULL,'$jid','$uid','$name','$qual','$stream','$percent','$year')";
          $res = mysqli_query($conn,$que);
          if($res){
            echo "<script> alert('Thank you for you intrest. Your Application has been Sent !') </script>";
          }
        }
      }
  ?>
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="staticBackdropLabel">Apply for Job</h4>
          <button type="button" class="btn-close" id="close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
          <div class="modal-body">
            <label for="qualification" class="mb-1">Full Name</label>
            <input type="text" class="form-control mb-2" name="name" placeholder="Brendan Eich" required>
            <label for="qualification" class="mb-1">Company Name </label>
            <input type="text" class="form-control mb-2" name="company" placeholder="Tata Consultancy Services"
              required>
            <label for="qualification" class="mb-1">Applying For</label>
            <input type="text" class="form-control mb-2" name="position" placeholder="Full Stack Web Developer"
              required>
            <label for="qualification" class="mb-1">Highest Qualification</label>
            <input type="text" class="form-control mb-2" name="qualification" placeholder="B.Tech" required>
            <label for="qualification" class="mb-1">Stream</label>
            <input type="text" class="form-control mb-2" name="stream" placeholder="Computer Science & Engineering"
              required>
            <label for="qualification" class="mb-1">Percentage / GPA </label>
            <input type="text" class="form-control mb-2" name="percentage" placeholder="8.5" required>
            <label for="qualification" class="mb-1">Year of Passing </label>
            <input type="text" class="form-control mb-1" name="year" placeholder="2022" maxlength="4" required>
            <p class="mb-5">* Please Confirm details and Click Apply</p>
            <button type="submit" name="apply" class="button b-p">Apply</button>
        </form>
      </div>
    </div>
  </div>
  </div>

</body>
<?php require 'Headers/_footer.php' ?>