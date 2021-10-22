<?php require 'Headers/_header.php' ?>

<link rel="stylesheet" href="CSS/Admin.css">
<title> Admin Dashboard | Career Club</title>
</head>

<body>
    <main class="header-section">
        <div class="title">Admin Dashboard</div>
        <div class="icon">
            <span><i class="fas fa-user-shield"></i> Sahul Kola</span>
        </div>
    </main>
    <aside>
        <ul>
            <a href="Admin-Homepage.php">
                <li><i class="fas fa-user"></i>Candidates Applied</li>
            </a>
               <a href="Admin-Postajob.php">
                <li><i class="fas fa-file"></i>Post a Job</li>
            </a>
            <a href="Underconstruction.php">
                <li><i class="fas fa-briefcase"></i>Internships</li>
            </a>
            <a href="Underconstruction.php">
                <li><i class="fas fa-address-card   "></i>Projects</li>
            </a>
            <a href="Logout.php">
                <li><i class="fas fa-sign-out-alt"></i>Logout</li>
            </a>
        </ul>
    </aside>
</body>

<?php require 'Headers/_footer.php' ?>