<?php require 'Headers/_header.php'; ?>
<link rel="stylesheet" href="CSS/Login.css">
<title>User Login | Career Club</title>
</head>

<body>
    <main class="container">
        <div class="box" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000"
            data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false">
            <h2>Career<span>Club</span></h2>
            <h4>User Login</h4>
            <hr>
            <form action="register.php">
                <div class="input-fields">
                <div class="input-group flex-nowrap icons">
                    <span class="input-group-text" id="addon-wrapping"><img src="images/user-icon.gif" /></span>
                    <input type="email" class="form-control" placeholder="Email Address" aria-label="Username"
                        aria-describedby="addon-wrapping">
                </div>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping"><img src="images/user-password.gif" /></span>
                    <input type="password" class="form-control" placeholder="Password" aria-label="Username"
                        aria-describedby="addon-wrapping">
                </div>
                </div>
                <button type="submit" class="button">Login</button>
                <div class="foot">Not a Member ? <a href="User-Signup.php">Sign Up</a> </div>
            </form>
        </div>
        <img class="banner banner-login" src="images/UserLogin.svg" alt="Login">
    </main>
</body>
<?php include 'Headers/_footer.php'; ?>