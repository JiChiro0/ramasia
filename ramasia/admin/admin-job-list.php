<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Ramasia — Job List</title>

    <link href="https://fonts.googleapis.com/css2?family=Sarala:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="./css/global-admin-sidebar.css">
    <link rel="stylesheet" href="./css/admin-job-listing.css">
</head>
<body>

    <aside class="sidebar" id="sidebar">
        <div class="brand">
            <div class="brand__logo"><i class="bi bi-building-fill"></i></div>
            <span class="brand__name">RAMASIA</span>
        </div>
        <div class="profile">
            <div style="width: 80px; height: 80px; background: #eee; border-radius: 50%; margin: 0 auto 10px; display: flex; align-items: center; justify-content: center;">
                <i class="bi bi-person-fill" style="font-size: 40px; color: #ccc;"></i>
            </div>
            <p class="profile__role">Administrator</p>
        </div>
        <nav class="menu">
             <ul>
                <li class="active"><a href="#"><i class="bi bi-people-fill"></i> Users</a></li>
                <li><a href="admin-job-posting.php"><i class="bi bi-briefcase-fill"></i> Job Posting</a></li>
                <li><a href="admin-job-list.php"><i class="bi bi-list-check"></i> Job List</a></li>
                <li><a href="admin-expense-tracking.php"><i class="bi bi-cash-coin"></i> Expense Tracker</a></li>
                <li><a href="admin-applicant-tracking.php"><i class="bi bi-person-vcard-fill"></i> Applicant Tracker</a></li>
                <li><a href="#"><i class="bi bi-box-arrow-right"></i> Logout</a></li>
            </ul>
        </nav>
    </aside>

    <button class="toggle-btn" id="sidebarToggle" onclick="toggleSidebar()">
        <i class="bi bi-chevron-double-right" id="toggleIcon"></i>
    </button>

    <div class="overlay" id="overlay" onclick="toggleSidebar()"></div>

    <div class="main-content-wrapper">
        <main class="main-content">
            
            <section class="top-stats">
                <div class="stat-card">
                    <div class="stat-icon"><i class="bi bi-file-earmark-text-fill"></i></div>
                    <div>
                        <p class="stat-number">11</p>
                        <p class="stat-label">Requests</p>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon"><i class="bi bi-person-check-fill"></i></div>
                    <div>
                        <p class="stat-number">64</p>
                        <p class="stat-label">Registered Users</p>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon"><i class="bi bi-clock-history"></i></div>
                    <div>
                        <p class="stat-number">11</p>
                        <p class="stat-label">Pending</p>
                    </div>
                </div>
            </section>

            <section class="job-list-section">
                <div class="section-header">
                    <h1>Job List</h1>
                    <p>Manage your active job postings here.</p>
                </div>
                
                <div class="empty-state">
                    <i class="bi bi-clipboard-data"></i>
                    <p>No jobs listed yet.</p>
                </div>

                <div class="add-job-container">
                    <a href="admin-job-posting.html" class="add-job-btn">
                        <i class="bi bi-plus-lg"></i> Add Job
                    </a>
                </div>
            </section>

            <footer class="site-footer">
                <p>© 2025 Ramasia — All rights reserved.</p>
            </footer>

        </main>
    </div>

    <script src="./js/admin-sidebar.js"></script>
</body>
</html>