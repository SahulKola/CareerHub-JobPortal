<?php require 'Headers/_header.php'; ?>
<link rel="stylesheet" href="alogin.css">
<title>Admin Login | Career Club</title>
</head>

<body>
    <main class="container">
        <div class="box" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000"
            data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false">
            <h2>Career<span>Club</span></h2>
            <h4>Create an Admin Account</h4>
            <p style="color: #aaa;">Please fill in this form to create and account</p>
            <hr>
            <form action="register.php">
                <div class="row g-3 align-items-center">
                    <div class="col-6">
                        <label for="inputPassword6" class="col-form-label">First Name</label>
                        <input type="text" id="inputPassword6" class="form-control" placeholder="Brendan" required>
                    </div>
                    <div class="col-6">
                        <label for="inputPassword6" class="col-form-label" id="last">Last Name</label>
                        <input type="text" id="inputPassword6" class="form-control" placeholder="Eich" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" required
                        placeholder="test@gmail.com" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="row g-3 align-items-center m-t">
                    <div class="col-6">
                        <label for="inputPassword6" class="col-form-label">Password </label>
                        <input type="password" id="inputPassword6" class="form-control" maxlength="20" minlength="8"
                            placeholder="**********">
                    </div>
                    <div class="col-6">
                        <label for="inputPassword6" class="col-form-label" id="last">Confirm Password</label>
                        <input type="password" id="inputPassword6" class="form-control" maxlength="20" minlength="8"
                            placeholder="**********">
                    </div>
                </div>
                <div id="passwordHelpBlock" class="m-0 form-text">
                    Your password must be 8-20 characters long, contain letters and numbers.
                </div>
                <div class="input-group mb-3 mobile">
                    <span class="input-group-text" id="basic-addon1">+91</span>
                    <input type="text" class="form-control" placeholder="Mobile Number" aria-label="Username"
                        aria-describedby="basic-addon1">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">I agree to the <a href="#">Terms of Use</a> & <a
                            href="#">Privacy Policy</a></label>
                </div>
                <button type="submit" class="button">Sign Up</button>
                <div class="foot">Already an Admin ? <a href="#">Login</a> </div>
            </form>
        </div>
        <img src="images/Signup.svg" alt="Signup">
    </main>
</body>
<?php include 'Headers/_footer.php'; ?>