<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Ramasia — Users Management</title>

    <link href="https://fonts.googleapis.com/css2?family=Sarala:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="./css/global-admin-sidebar.css">
    <link rel="stylesheet" href="./css/admin-home.css">
</head>
<body>

    <aside class="sidebar" id="sidebar">
        <div class="brand">
            <div class="brand__logo"><i class="bi bi-building-fill"></i></div>
            <span class="brand__name">RAMASIA</span>
        </div>

        <div class="profile">
            <img src="https://via.placeholder.com/100" alt="Admin" class="avatar">
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

    <div class="layout">
        <main class="main-content">
            
            <section class="metrics-container">
                <div class="metric-card">
                    <div class="metric-icon"><i class="bi bi-file-earmark-text-fill"></i></div>
                    <div>
                        <h2>11</h2>
                        <p>Requests</p>
                    </div>
                </div>

                <div class="metric-card">
                    <div class="metric-icon"><i class="bi bi-person-check-fill"></i></div>
                    <div>
                        <h2>64</h2>
                        <p>Registered Users</p>
                    </div>
                </div>

                <div class="metric-card">
                    <div class="metric-icon"><i class="bi bi-clock-history"></i></div>
                    <div>
                        <h2>11</h2>
                        <p>Pending</p>
                    </div>
                </div>
            </section>

            <section class="content-split">
                
                <div class="filter-panel">
                    <button class="search-btn">
                        <i class="bi bi-search"></i> Search User
                    </button>

                    <div class="filter-box">
                        <h3>Filter</h3>
                        
                        <div class="filter-group">
                            <h4>Regions</h4>
                            <label><input type="checkbox" checked> UK (111)</label>
                            <label><input type="checkbox" checked> US (89)</label>
                            <label><input type="checkbox" checked> France (45)</label>
                        </div>
                         <div class="filter-group">
                            <h4>Branches</h4>
                            <label><input type="checkbox" checked> London (111)</label>
                            <label><input type="checkbox"> Liverpool (12)</label>
                            <label><input type="checkbox"> Manchester (5)</label>
                        </div>

                        <div class="filter-group">
                            <h4>Divisions</h4>
                            <label><input type="checkbox" checked> Management (43)</label>
                            <label><input type="checkbox"> Finance (10)</label>
                            <label><input type="checkbox"> Legal (1)</label>
                        </div>

                        <button class="clear-btn">Clear Filters</button>
                    </div>
                </div>

                <div class="results-panel">
                    <div class="results-header">
                        <span class="results-count">Results Found: <b>12</b></span>
                    </div>

                    <table class="user-table">
                        <thead>
                            <tr>
                                <th>Full Name</th>
                                <th>Location</th>
                                <th>Job Role</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Trabis Scott</td>
                                <td>Abu Dhabi</td>
                                <td>Domestic Helper</td>
                                <td><span class="status inprogress">Pending</span></td>
                            </tr>
                            <tr>
                                <td>Chrismart Brownie</td>
                                <td>London</td>
                                <td>Domestic Helper</td>
                                <td><span class="status hired">Hired</span></td>
                            </tr>
                            <tr>
                                <td>Chris Baker</td>
                                <td>Manchester</td>
                                <td>Domestic Helper</td>
                                <td><span class="status hired">Hired</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </section>
        </main>
    </div>

    <script src="./js/admin-sidebar.js"></script>
</body>
</html>