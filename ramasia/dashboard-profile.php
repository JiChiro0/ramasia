<?php
session_start();
require_once './vendor/autoload.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="./css/dashboard-profile.css">
    <link href="https://fonts.googleapis.com/css2?family=Sarala:wght@400&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <div class="container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="logo">
                <img src="../image-source/transparent-ramasialredlogo-navbar.png" alt="RAMASIA">
            </div>

            <div class="user-info">
                <img src="https://img.freepik.com/premium-vector/vector-flat-illustration-grayscale-avatar-user-profile-person-icon-gender-neutral-silhouette-profile-picture-suitable-social-media-profiles-icons-screensavers-as-templatex9xa_719432-2210.jpg?semt=ais_hybrid&w=740&q=80"
                    alt="User photo" class="user-photo">
                <h3 class="user-name"><?php echo $_SESSION["username"] ?></h3>
            </div>

            <nav class="menu">
                <a href="#" class="active"><i class="icon">🏠</i> User Dashboard</a>
                <a href="#"><i class="icon">📄</i> My Resume</a>
                <a href="#"><i class="icon">📤</i> My Applied</a>
                <a href="#"><i class="icon">💬</i> Messages</a>
                <a href="#"><i class="icon">🔒</i> Change Password</a>
                <a href="#"><i class="icon">🗑️</i> Delete Profile</a>
                <a href="./actions/logout.php" class="btn"><i class="icon">🚪</i>Logout</a></button>
            </nav>
        </aside>

        <!-- Main Dashboard -->
        <main class="dashboard">
            <!-- Top Navbar -->
            <header class="navbar">
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">JOB SEEKER</a></li>
                    <li><a href="#">RESUME APPLICATION</a></li>
                    <li><a href="#">CONTACT</a></li>
                    <li><a href="#">ABOUT US</a></li>
                </ul>
            </header>

            <!-- Dashboard Content -->
            <?php

            ?>
            <section class="dashboard-content">
                <h2>User Dashboard</h2>
                <div class="profile-section">
                    <div class="profile-card">
                        <img src="https://img.freepik.com/premium-vector/vector-flat-illustration-grayscale-avatar-user-profile-person-icon-gender-neutral-silhouette-profile-picture-suitable-social-media-profiles-icons-screensavers-as-templatex9xa_719432-2210.jpg?semt=ais_hybrid&w=740&q=80"
                            alt="User photo" class="profile-pic">
                        <h3><?php echo $_SESSION["username"] ?></h3>
                        <p>Details</p>
                    </div>

                    <div class="stats">
                        <div class="stat-box">
                            <div class="icon">💼</div>
                            <p>Applied Jobs</p>
                            <h3>0</h3>
                        </div>
                        <div class="stat-box">
                            <div class="icon">📋</div>
                            <p>Shortlisted</p>
                            <h3>0</h3>
                        </div>
                        <div class="stat-box">
                            <div class="icon">💬</div>
                            <p>Review</p>
                            <h3>0</h3>
                        </div>
                        <div class="stat-box">
                            <div class="icon">👁️</div>
                            <p>Views</p>
                            <h3>0</h3>
                        </div>
                    </div>
                </div>

                <div class="profile-views">
                    <h3>Your Profile Views</h3>
                    <div class="graph-placeholder">📈 Graph Placeholder</div>
                </div>
            </section>
        </main>
    </div>
</body>

</html>

<script>
    $(document).ready(function () {
        $(".btn").click(function () {
            localStorage.removeItem('token');
        });
    });
</script>