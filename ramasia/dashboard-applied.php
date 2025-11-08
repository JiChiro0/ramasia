<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Applied Jobs</title>
    <link rel="stylesheet" href="applied.css">
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
                <a href="#" class="active"><i class="icon">📤</i> My Applied</a>
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

            <!-- Applied Jobs Section -->
            <section class="dashboard-content">
                <h2>Applied Jobs</h2>
                <div class="applied-container">
                    <div class="applied-header">
                        <input type="text" placeholder="Search..." class="search-bar">
                        <div class="sort">
                            <label for="sort">Sort by:</label>
                            <select id="sort">
                                <option>Newest</option>
                                <option>Oldest</option>
                            </select>
                        </div>
                    </div>

                    <div class="applied-box">
                        <p class="no-app">No Application Found</p>
                    </div>
                </div>
            </section>
        </main>
    </div>
</body>
</html>
