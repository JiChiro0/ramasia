<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Profile</title>

    <link href="https://fonts.googleapis.com/css2?family=Sarala:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="./css/global-user-sidebar.css">
    <link rel="stylesheet" href="./css/global-user-navbar.css">
    <link rel="stylesheet" href="./css/user-dashboard.css">
    
    <link rel="stylesheet" href="./css/user-delete-profile.css">
</head>
<body>

    <div class="container">
        
        <aside id="sidebar-container" class="sidebar"></aside>

        <main class="dashboard">
            
            <header id="navbar-container" class="navbar"></header>

            <section class="dashboard-content">
                
                <h2>Delete Profile</h2>

                <div class="delete-container">
                    
                    <div class="danger-box">
                        
                        <div class="warning-header">
                            <div class="icon-circle">
                                <i class="bi bi-exclamation-triangle-fill"></i>
                            </div>
                            <h3>Are you sure you want to delete your account?</h3>
                            <p>This action is permanent and cannot be undone.</p>
                        </div>

                        <div class="warning-details">
                            <p>By deleting your account, you will lose access to:</p>
                            <ul>
                                <li><i class="bi bi-x"></i> Your detailed Resume/CV profile</li>
                                <li><i class="bi bi-x"></i> All active job applications</li>
                                <li><i class="bi bi-x"></i> Message history with recruiters</li>
                                <li><i class="bi bi-x"></i> Saved job alerts and bookmarks</li>
                            </ul>
                        </div>

                        <form class="delete-form">
                            
                            <div class="form-group">
                                <label for="confirm-pass">To continue, please enter your password</label>
                                <div class="input-wrapper">
                                    <i class="bi bi-lock-fill"></i>
                                    <input type="password" id="confirm-pass" placeholder="Enter your password">
                                </div>
                            </div>

                            <div class="checkbox-group">
                                <input type="checkbox" id="confirm-check">
                                <label for="confirm-check">I understand that my account will be permanently deleted.</label>
                            </div>

                            <div class="form-actions">
                                <button type="button" class="btn-cancel">Keep Account</button>
                                <button type="button" class="btn-delete">Delete My Account</button>
                            </div>
                        </form>
                    </div>
                </div>

                <footer class="footer">
                    © 2025 Ramasia International. All Right Reserved.
                </footer>

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