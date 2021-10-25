<?php require 'Headers/_header.php'; 
session_start();
?>

<link rel="stylesheet" href="CSS/Admin.css">
<title> Admin Dashboard | Career Hub</title>
</head>

<body>
    <main class="header-section">
        <div class="title">Admin Dashboard</div>
        <div class="icon">
            <span><i class="fas fa-user-shield"></i> <?php echo $_SESSION['adminname'];?></span>
        </div>
    </main>
    <aside>
        <ul>
            
            <a href="Admin-Homepage.php">
                <li><i class="fas fa-user"></i>Candidates Applied</li>
            </a>
            <a href="Admin-Jobsposted.php">
                <li><i class="fas fa-file-alt"></i>Jobs Posted </li>
            </a>
               <a href="Admin-Postajob.php">
                <li><i class="fas fa-file-upload"></i>Post a Job</li>
            </a>
            <a href="Underconstruction.php">
                <li><i class="fas fa-briefcase"></i>Internships</li>
            </a>
            <a href="Underconstruction.php">
                <li><i class="fas fa-address-card"></i>Projects</li>
            </a>
            <a href="PHP/logout.php">
                <li><i class="fas fa-sign-out-alt"></i>Logout</li>
            </a>
        </ul>
    </aside>
</body>

<?php require 'Headers/_footer.php' ?>