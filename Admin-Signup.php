<?php include 'Headers/_header.php'; 
    $msg = "";
    $class = "";
?>
<link rel="stylesheet" href="CSS/Signup.css">
<title>Admin Sign Up | Career Club</title>
</head>

<?php require 'PHP/db.php';
    if(isset($_POST['submit'])){
    $msg = "";
    $class = "";
    $count =1;
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $fullname = "$firstname $lastname";
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $mobile = $_POST['mobile'];
    if($password != $cpassword ){
        $msg = " Please make sure your passwords match. ";
        $class = "ff0033";
        $count=0;
    }
    if($count){
        $query = "INSERT INTO admins VALUES ('','$fullname','$email','$password','$mobile')";
        $res = mysqli_query($conn,$query);   
        $msg = "Congratulations, You have successfully registered !";
        $class = "198754";
    }
    }
?>

<body>
    <main class="container">
        <div class="box" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000"
            data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false">
            <h2>Career<span>Club</span></h2>
            <h4>Create an Admin Account</h4>
            <p style="color: #aaa;">Please fill in this form to create and account</p>
            <hr>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <?php echo "<p style='color: #$class' >"; echo "$msg </p>"; ?>
                <div class="mob row g-3 align-items-center">
                    <div class="col-6">
                        <label for="inputPassword6" class="col-form-label">First Name</label>
                        <input type="text" id="inputPassword6" name="firstname" class="form-control"
                            placeholder="Brendan" required>
                    </div>
                    <div class="mm-t col-6">
                        <label for="inputPassword6" class="col-form-label" id="last">Last Name</label>
                        <input type="text" id="inputPassword6" name="lastname" class="form-control" placeholder="Eich"
                            required>
                    </div>
                </div>
                <div class="mobe mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" required
                        placeholder="test@gmail.com" aria-describedby="emailHelp" name="email">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mob row g-3 align-items-center m-t">
                    <div class="col-6">
                        <label for="inputPassword6" class="col-form-label">Password </label>
                        <input type="password" id="inputPassword6" name="password" class="form-control" maxlength="20"
                            minlength="8" placeholder="**********">
                    </div>
                    <div class="mm-t col-6">
                        <label for="inputPassword6" class="col-form-label" id="last">Confirm Password</label>
                        <input type="password" id="inputPassword6" name="cpassword" class="form-control" maxlength="20"
                            minlength="8" placeholder="**********">
                    </div>
                </div>
                <div id="passwordHelpBlock" class="m-0 form-text">
                    Your password must be 8-20 characters long, contain letters and numbers.
                </div>
                <div class="mobe input-group mb-3">
                    <span class="input-group-text" id="mobile" id="basic-addon1">+91</span>
                    <input type="text" id="size" class="form-control" name="mobile" placeholder="Mobile Number"
                        aria-label="Mobile Number" aria-describedby="basic-addon1" maxlength=10>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" name="checkbox" value="checkbox" id="exampleCheck1" required>
                    <label class="form-check-label" for="exampleCheck1" >I agree to the <a href="#">Terms of Use</a> & <a
                            href="#">Privacy Policy</a></label>
                </div>
                <button type="submit" name="submit" class="button">Sign Up</button>
                <div class="foot">Already an <b> Admin</b> ? <a href="Admin-Login.php">Login</a> </div>
            </form>
        </div>
        <img src="images/AdminSignup.svg" alt="Signup">
    </main>

</body>
<?php include 'Headers/_footer.php'; ?>