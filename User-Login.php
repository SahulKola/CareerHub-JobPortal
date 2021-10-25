<?php require 'Headers/_header.php';
    session_start();
    $msg = "";
    $class = "";
?>
<link rel="stylesheet" href="CSS/Login.css">
<title>User Login | Career Hub</title>
</head>

<?php require 'PHP/db.php';
    if(isset($_POST['submit'])){
    $msg = "";
    $class = "";
    $count =1;
    $email = $_POST['email'];
    $password = $_POST['password'];
    if($count){
        $query = "SELECT * FROM USERS WHERE EMAIL='$email' AND PASSWORD ='$password' LIMIT 1";
        $result = mysqli_query($conn,$query);   
        $row = mysqli_fetch_assoc($result);
        $count = mysqli_num_rows($result);
        if($count == 1){
            $_SESSION['userlogin'] = 'loggedin';
            $_SESSION['username'] = $row['FULLNAME'];
            $_SESSION['userid'] = $row['ID'];
            header('Location: Careers.php');
        }else {
            $msg = "Incorrect Username or Password !";
            $class = "ff0033";
        }
    }
    }
?>

<body>
    <main class="container">
        <div class="box" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000"
            data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false">
            <h2>Career<span>Hub</span></h2>
            <h4>User Login</h4>
            <hr>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <div class="input-fields">
                    <?php echo "<p style='color: #$class' >"; echo "$msg </p>"; ?>

                    <div class="input-group flex-nowrap icons">
                        <span class="input-group-text" id="addon-wrapping"><img src="images/User-icon.gif"></span>
                        <input type="email" class="form-control" name="email" required placeholder="Email Address" aria-label="Username"
                            aria-describedby="addon-wrapping">
                    </div>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping"><img src="images/User-password.gif"></span>
                        <input type="password" class="form-control" name="password" required placeholder="Password" aria-label="Username"
                            aria-describedby="addon-wrapping">
                    </div>
                </div>
                <button type="submit" name="submit" class="button">Login</button>
                <div class="foot">Not a Member ? <a href="User-Signup.php">Sign Up</a> </div>
            </form>
        </div>
        <img class="banner banner-login" src="images/UserLogin.svg" alt="Login">
    </main>
</body>
<?php include 'Headers/_footer.php'; ?>