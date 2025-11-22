<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>

    <link href="https://fonts.googleapis.com/css2?family=Sarala:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="./css/global-user-sidebar.css">
    <link rel="stylesheet" href="./css/global-user-navbar.css">
    <link rel="stylesheet" href="./css/user-dashboard.css">
    <link rel="stylesheet" href="./css/user-changepassword.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>

    <div class="container">

        <aside id="sidebar-container" class="sidebar"></aside>

        <main class="dashboard">

            <header id="navbar-container" class="navbar"></header>

            <section class="dashboard-content">
              
                <h2>Change Password</h2>

                <div class="password-container">

                    <div class="password-box">
                        <div class="box-header">
                            <i class="bi bi-shield-lock"></i>
                            <p>Ensure your account is using a long, random password to stay secure.</p>
                        </div>

                        <form class="password-form">

                            <div class="form-group">
                                <label for="current-pass">Current Password</label>
                                <div class="input-wrapper">
                                    <i class="bi bi-key"></i>
                                    <input type="password" id="current-pass" placeholder="Enter current password">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="new-pass">New Password</label>
                                <div class="input-wrapper">
                                    <i class="bi bi-lock"></i>
                                    <input type="password" id="new-pass" placeholder="Enter new password">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="confirm-pass">Confirm New Password</label>
                                <div class="input-wrapper">
                                    <i class="bi bi-lock-fill"></i>
                                    <input type="password" id="confirm-pass" placeholder="Re-enter new password">
                                </div>
                            </div>

                            <ul class="requirements">
                                <li><i class="bi bi-check-circle-fill text-success"></i> At least 8 characters long</li>
                                <li><i class="bi bi-circle text-muted"></i> Contains a number or symbol</li>
                            </ul>

                            <div class="form-actions">
                                <button type="button" class="btn-cancel">Cancel</button>
                                <button type="submit" class="btn-save">Update Password</button>
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

    <script>
        $(document).ready(function () {
            $(".password-form").submit(function (e) {
                e.preventDefault();

                var old_password = $("#current-pass").val();
                var new_password = $("#new-pass").val();
                var repass = $("#confirm-pass").val();

                console.log("Old Password: " + old_password);
                console.log("New Password: " + new_password);
                console.log("Re-enter Password: " + repass);


                $.ajax({
                    type: "POST",
                    url: "./actions/update_password.php",
                    data: {
                        old_password: old_password,
                        new_password: new_password,
                        confirm_password: repass
                    },
                    success: function (response) {
                        console.log(response);
                    }
                });

            });

        });
    </script>

</body>

</html>