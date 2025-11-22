<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Ramasia — Applicant Tracker</title>

    <link href="https://fonts.googleapis.com/css2?family=Sarala:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="./css/admin-applicant-tracking.css">
</head>
<body>

    <aside class="sidebar" id="sidebar">
        <div class="brand">
            <div class="brand__logo"><i class="bi bi-building-fill"></i></div>
            <span class="brand__name">RAMASIA</span>
        </div>
        <div class="profile">
            <div class="profile-img-placeholder">
                <i class="bi bi-person-fill"></i>
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

            <section class="applicant-section">
                <div class="section-header">
                    <h1>Applicant Tracker</h1>
                    <p>Monitor current applicants and their status.</p>
                </div>

                <div class="table-container">
                    <table class="applicant-table">
                        <thead>
                            <tr>
                                <th>Full Name</th>
                                <th>Age</th>
                                <th>Country</th>
                                <th>FRA (Agency)</th>
                                <th>Work</th>
                                <th>Salary Offer</th>
                                <th>Placement Fee</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Juan Dela Cruz</td>
                                <td>28</td>
                                <td>Japan</td>
                                <td>Tokyo Manpower</td>
                                <td>Caregiver</td>
                                <td>¥180,000</td>
                                <td>₱45,000</td>
                            </tr>
                            <tr>
                                <td>Maria Santos</td>
                                <td>32</td>
                                <td>UAE</td>
                                <td>Dubai Recruiters</td>
                                <td>Domestic Helper</td>
                                <td>AED 1,500</td>
                                <td>₱20,000</td>
                            </tr>
                            <tr>
                                <td>Pedro Penduko</td>
                                <td>25</td>
                                <td>Taiwan</td>
                                <td>Taipei Works</td>
                                <td>Factory Worker</td>
                                <td>NT$ 24,000</td>
                                <td>₱35,000</td>
                            </tr>
                             <tr>
                                <td>Ana Reyes</td>
                                <td>30</td>
                                <td>Canada</td>
                                <td>Maple Leaf Agency</td>
                                <td>Nurse</td>
                                <td>$4,000</td>
                                <td>₱80,000</td>
                            </tr>
                        </tbody>
                    </table>
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