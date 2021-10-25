<?php require 'Headers/_header.php'; ?>

<link rel="stylesheet" href="CSS/Homepage.css">
<title>Home | Career Hub</title>
</head>

<body>
    <main class="container">
        <div class="head">
            <img src="images/logo.png" alt="logo">
            <h2>Career <span>Hub</span></h2>
            <div class="buttons">
                <a href="Admin-Login.php"> <button class="" type="button">Admin</button></a>
                <a href="User-Login.php"> <button class="" type="button">Users</button></a>
            </div>
        </div>

        <div class="quote">
            Opportunities Don't Happen,
            <span>You</span> Create Them.
        </div>
        <a href="Careers.php"><button type="button" class="find">Find Jobs<i class="fas fa-search"></i></button></a>
    </main>
</body>
<?php include 'Headers/_footer.php'; ?>