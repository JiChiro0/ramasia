<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Messages</title>

    <link href="https://fonts.googleapis.com/css2?family=Sarala:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="./css/global-user-sidebar.css">
    <link rel="stylesheet" href="./css/global-user-navbar.css">
    <link rel="stylesheet" href="./css/user-dashboard.css">
    
    <link rel="stylesheet" href="./css/user-messages.css">
</head>
<body>

    <div class="container">
        
        <aside id="sidebar-container" class="sidebar"></aside>

        <main class="dashboard">
            
            <header id="navbar-container" class="navbar"></header>

            <section class="dashboard-content">
                
                <div class="content-header">
                    <h2>Messages</h2>
                    <button class="btn-compose">
                        <i class="bi bi-pencil-square"></i> Compose
                    </button>
                </div>

                <div class="messages-container">
                    
                    <div class="msg-list-header">
                        <span>Inbox (2 New)</span>
                        <div class="msg-actions">
                            <i class="bi bi-funnel"></i> Filter
                            <i class="bi bi-check-all"></i> Mark all read
                        </div>
                    </div>

                    <div class="message-list">
                        
                        <div class="message-item unread">
                            <div class="msg-avatar text-avatar">TS</div>
                            <div class="msg-body">
                                <div class="msg-top">
                                    <h4 class="msg-sender">Tech Solutions Inc. <span class="badge">New</span></h4>
                                    <span class="msg-date">10:42 AM</span>
                                </div>
                                <p class="msg-subject">Interview Invitation: Senior Frontend Developer</p>
                                <p class="msg-preview">Hello Alden, we were impressed by your profile and would like to schedule...</p>
                            </div>
                        </div>

                        <div class="message-item unread">
                            <img src="https://via.placeholder.com/40" alt="HR" class="msg-avatar">
                            <div class="msg-body">
                                <div class="msg-top">
                                    <h4 class="msg-sender">Maria Clara (HR) <span class="badge">New</span></h4>
                                    <span class="msg-date">Yesterday</span>
                                </div>
                                <p class="msg-subject">Application Update - UI/UX Designer</p>
                                <p class="msg-preview">Thank you for applying. We are currently reviewing your portfolio and...</p>
                            </div>
                        </div>

                        <div class="message-item">
                            <div class="msg-avatar text-avatar secondary">GS</div>
                            <div class="msg-body">
                                <div class="msg-top">
                                    <h4 class="msg-sender">Global Systems</h4>
                                    <span class="msg-date">Oct 20</span>
                                </div>
                                <p class="msg-subject">Receipt of Application</p>
                                <p class="msg-preview">This is an automated message to confirm we have received your resume...</p>
                            </div>
                        </div>

                        <div class="message-item">
                            <div class="msg-avatar text-avatar secondary">SH</div>
                            <div class="msg-body">
                                <div class="msg-top">
                                    <h4 class="msg-sender">StartUp Hero</h4>
                                    <span class="msg-date">Sep 15</span>
                                </div>
                                <p class="msg-subject">Welcome to the team!</p>
                                <p class="msg-preview">Hi Alden, we are thrilled to offer you the position. Please see attached...</p>
                            </div>
                        </div>

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