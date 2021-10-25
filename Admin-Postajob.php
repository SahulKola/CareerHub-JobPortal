<?php require 'Admin-Dashboard.php';
if(!isset($_SESSION['adminid'])){
        header('Location: Admin-Login.php');
    }
$msg = "";
$class = "";
require 'PHP/db.php';
    if(isset($_POST['submit'])){
        $companyname = $_POST['company'];
        $position = $_POST['position'];
        $location = $_POST['location'];
        $jd = $_POST['jd'];
        $skills = $_POST['skills'];
        $year = $_POST['year'];
        $salary = $_POST['salary'];
        $id = $_SESSION['adminid'];
        $query = "INSERT INTO CAREERS VALUES (NULL,'$id','$companyname','$position','$location','$jd','$skills','$year','$salary')";
        $res = mysqli_query($conn,$query);   
        if($res) {
            $msg = "<b> Congrats! </b> You have successfully Posted a Job on Careers Hub ";
            $class = "198754";
            }
    }

?>

<div class="box">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <h4>Post a Job</h4>
        <?php echo "<p style='color: #$class; font-size: 18px;' >"; echo "$msg </p>"; ?>
        <div class="mb-1">
            <label for="exampleFormControlInput1" class="form-label">Company Name</label>
            <input type="text" class="form-control" name="company" required id="exampleFormControlInput1"
                placeholder="Tata Consultancy Services">
        </div>
        <div class="mb-1">
            <label for="exampleFormControlInput1" class="form-label">Position</label>
            <input type="text" class="form-control" name="position" required id="exampleFormControlInput1"
                placeholder="Full Stack Developer">
        </div>
        <div class="mb-1">
            <label for="exampleFormControlInput1" class="form-label">Location</label>
            <input type="text" class="form-control" name="location" required id="exampleFormControlInput1"
                placeholder="Hyderabad">
        </div>
        <div class="mb-1">
            <label for="exampleFormControlTextarea1" class="form-label">Job Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" maxlength="140" name="jd" required rows="3"
                placeholder="Breif about Job Description in Max 15 Words"></textarea>
        </div>
        <div class="mb-1">
            <label for="exampleFormControlInput1" class="form-label">Skills Required</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="skills" required
                placeholder="HTML, CSS, Javascript, MongoDB">
        </div>
        <div class="mb-1">
            <label for="exampleFormControlInput1" class="form-label">Year of Passing</label>
            <input type="text" class="form-control" name="year" required id="exampleFormControlInput1"
                placeholder="2022">
        </div>
        <div class="mb-1">
            <label for="exampleFormControlInput1" class="form-label">Salary</label>
            <input type="text" class="form-control" name="salary" required id="exampleFormControlInput1"
                placeholder="5.5 LPA">
        </div>
        <button type="submit" name="submit" value="Submit">Post</button>
    </form>
</div>