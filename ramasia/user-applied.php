<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Applied Jobs</title>

    <link href="https://fonts.googleapis.com/css2?family=Sarala:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="./css/global-user-sidebar.css">
    <link rel="stylesheet" href="./css/global-user-navbar.css">
    <link rel="stylesheet" href="./css/user-dashboard.css"> 
    
    <link rel="stylesheet" href="./css/user-applied.css">
</head>
<body>

    <div class="container">
        
        <aside id="sidebar-container" class="sidebar"></aside>

        <main class="dashboard">
            
            <header id="navbar-container" class="navbar"></header>

            <section class="dashboard-content">
                
                <h2>Applied Jobs</h2>
                
                <div class="applied-container">
                    <div class="applied-header">
                        <div class="search-wrapper">
                            <i class="bi bi-search"></i>
                            <input type="text" placeholder="Search job title..." class="search-bar">
                        </div>
                        
                        <div class="sort">
                            <label for="sort">Sort by:</label>
                            <select id="sort">
                                <option>Newest</option>
                                <option>Oldest</option>
                                <option>Status</option>
                            </select>
                        </div>
                    </div>

                    <div class="applied-box">
                        
                        <div class="table-responsive">
                            <table class="job-table">
                                <thead>
                                    <tr>
                                        <th>Job Title</th>
                                        <th>Company</th>
                                        <th>Date Applied</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="job-title-cell">
                                                <span class="title">Senior Frontend Dev</span>
                                                <span class="type">Full-time</span>
                                            </div>
                                        </td>
                                        <td>Tech Solutions Inc.</td>
                                        <td>Oct 24, 2025</td>
                                        <td><span class="status-badge status-interview">Interview</span></td>
                                        <td><button class="btn-view">View</button></td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="job-title-cell">
                                                <span class="title">UI/UX Designer</span>
                                                <span class="type">Contract</span>
                                            </div>
                                        </td>
                                        <td>Creative Minds Studio</td>
                                        <td>Oct 20, 2025</td>
                                        <td><span class="status-badge status-pending">Pending</span></td>
                                        <td><button class="btn-view">View</button></td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="job-title-cell">
                                                <span class="title">React Developer</span>
                                                <span class="type">Remote</span>
                                            </div>
                                        </td>
                                        <td>Global Systems</td>
                                        <td>Sep 15, 2025</td>
                                        <td><span class="status-badge status-rejected">Rejected</span></td>
                                        <td><button class="btn-view">View</button></td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="job-title-cell">
                                                <span class="title">Junior Web Dev</span>
                                                <span class="type">Full-time</span>
                                            </div>
                                        </td>
                                        <td>StartUp Hero</td>
                                        <td>Sep 10, 2025</td>
                                        <td><span class="status-badge status-hired">Hired</span></td>
                                        <td><button class="btn-view">View</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

            </section>
        </main>
    </div>

    <div class="sidebar-overlay"></div>
    <div class="navbar-overlay">
        <nav class="navbar-overlay-menu">
            <a href="#">HOME</a>
            <a href="#">JOB SEEKER</a>
            <a href="#">RESUME APPLICATION</a>
            <a href="#">CONTACT</a>
            <a href="#">ABOUT US</a>
        </nav>
    </div>

    <script src="./js-function/main.js"></script>

</body>
</html>