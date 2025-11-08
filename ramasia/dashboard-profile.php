<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
    <link href="https://fonts.googleapis.com/css2?family=Sarala:wght@400&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="logo">
                <img src="https://via.placeholder.com/120x40?text=RAMASIA+LOGO" alt="RAMASIA">
            </div>

            <div class="user-info">
                <img src="https://via.placeholder.com/60" alt="User photo" class="user-photo">
                <h3 class="user-name">Alden Recharge Sample</h3>
            </div>

            <nav class="menu">
                <a href="#" class="active"><i class="icon">🏠</i> User Dashboard</a>
                <a href="#"><i class="icon">📄</i> My Resume</a>
                <a href="#"><i class="icon">📤</i> My Applied</a>
                <a href="#"><i class="icon">💬</i> Messages</a>
                <a href="#"><i class="icon">🔒</i> Change Password</a>
                <a href="#"><i class="icon">🗑️</i> Delete Profile</a>
                <a href="#"><i class="icon">🚪</i> Logout</a>
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
            <section class="dashboard-content">
                <h2>User Dashboard</h2>

                <div class="profile-section">
                    <div class="profile-card">
                        <img src="https://via.placeholder.com/100" alt="User photo" class="profile-pic">
                        <h3>Alden Recharge Sample</h3>
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
