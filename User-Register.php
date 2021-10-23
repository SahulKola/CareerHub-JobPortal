<?php require 'Headers/_header.php'; 
      session_start(); ?>
<link rel="stylesheet" href="CSS/Signup.css">
<title>User Sign Up | Career Club</title>
</head>
<body>
    <main class="container">
        <div class="box" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000"
            data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false">
            <h2>Career<span>Club</span></h2>
            <h4>Create an User Account</h4>
            <p style="color: #aaa;">Please fill in this form to create and account</p>
            <hr>
            <form action="PHP/user.php" method="POST">
                <div class="mob row g-3 align-items-center">
                    <div class="col-6">
                        <label for="inputPassword6" class="col-form-label">First Name</label>
                        <input type="text"  name="firstname" id="inputPassword6" class="form-control" placeholder="Brendan" required>
                    </div>
                    <div class="mm-t col-6">
                        <label for="inputPassword6" class="col-form-label" id="last">Last Name</label>
                        <input type="text" name="lastname" id="inputPassword6" class="form-control"  placeholder="Eich" required>
                    </div>
                </div>
                <div class="mobe mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" required
                        placeholder="test@gmail.com" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mob row g-3 align-items-center m-t">
                    <div class="col-6">
                        <label for="inputPassword6" class="col-form-label">Password </label>
                        <input type="password" name="password" id="inputPassword6" class="form-control"  maxlength="20" minlength="8"
                            placeholder="**********">
                    </div>
                    <div class="mm-t col-6">
                        <label for="inputPassword6" class="col-form-label" id="last">Confirm Password</label>
                        <input type="password" name="cpassword" id="inputPassword6" class="form-control"  maxlength="20" minlength="8"
                            placeholder="**********">
                    </div>
                </div>
                <div id="passwordHelpBlock" class="m-0 form-text">
                    Your password must be 8-20 characters long, contain letters and numbers.
                </div>
                <div class="mobe input-group mb-3">
                    <span class="input-group-text" id="mobile" id="basic-addon1">+91</span>
                    <input type="text" name="mobile" id="size" class="form-control" placeholder="Mobile Number"   aria-label="Mobile Number"
                        aria-describedby="basic-addon1" maxlength=10>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">I agree to the <a href="#">Terms of Use</a> & <a
                            href="#">Privacy Policy</a></label>
                </div>
                <button type="submit" class="button">Sign Up</button>
                <div class="foot">Already a <b> User</b> ? <a href="User-Login.php">Login</a> </div>
            </form>
        </div>
        <img src="images/Usersignup.svg" alt="Signup" class="banner banner-user"/>
    </main>
     <?php 
    if(isset($_SESSION['user'])){
        echo "<script> alert('Congratulations, You have successfully registered'); </script>";
    } ?>
</body>
<?php include 'Headers/_footer.php'; ?>