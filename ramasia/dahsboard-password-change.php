<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link rel="stylesheet" href="./css/dahsboard-password-change.css">
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
                <h3 class="user-name">Alden Richards</h3>
            </div>

            <nav class="menu">
                <a href="#"><i class="icon">🏠</i> User Dashboard</a>
                <a href="#"><i class="icon">📄</i> My Resume</a>
                <a href="#"><i class="icon">📤</i> My Applied</a>
                <a href="#"><i class="icon">💬</i> Messages</a>
                <a href="#" class="active"><i class="icon">🔒</i> Change Password</a>
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

            <!-- Change Password Section -->
            <section class="dashboard-content">
                <h2>Change Password</h2>
                <div class="password-container">
                    <form class="password-form">
                        <label for="old-password">Old Password</label>
                        <input type="password" id="old-password" placeholder="Old Password">

                        <label for="new-password">New Password</label>
                        <input type="password" id="new-password" placeholder="New Password">

                        <label for="confirm-password">Confirm Password</label>
                        <input type="password" id="confirm-password" placeholder="Confirm Password">

                        <button type="submit" class="btn-change">Change Password</button>
                    </form>
                </div>

                <footer class="footer">
                    © 2025 Ramasia International. All Right Reserved.
                </footer>
            </section>
        </main>
    </div>
</body>
</html>
