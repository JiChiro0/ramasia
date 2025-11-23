<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Ramasia — Job Posting</title>

    <link href="https://fonts.googleapis.com/css2?family=Sarala:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="./css/global-admin-sidebar.css">
    <link rel="stylesheet" href="./css/admin-job-posting.css">
</head>

<body>

    <aside class="sidebar" id="sidebar">
        <div class="brand">
            <div class="brand__logo"><i class="bi bi-building-fill"></i></div>
            <span class="brand__name">RAMASIA</span>
        </div>
        <div class="profile">
            <div
                style="width: 80px; height: 80px; background: #eee; border-radius: 50%; margin: 0 auto 10px; display: flex; align-items: center; justify-content: center;">
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
                <li><a href="admin-applicant-tracking.php"><i class="bi bi-person-vcard-fill"></i> Applicant Tracker</a>
                </li>
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

            <section class="form-container">
                <h1 class="page-title">Create Job Posting</h1>
                <form class="job-form" action="#" method="post">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input id="title" name="title" type="text" placeholder="e.g. Senior Accountant">
                        </div>
                        <div class="form-group">
                            <label for="qualification">Qualification</label>
                            <input id="qualification" name="qualification" type="text"
                                placeholder="e.g. Bachelor's Degree">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="location">Location</label>
                            <input id="location" name="location" type="text" placeholder="e.g. London Branch">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input id="description" name="description" type="text" placeholder="Short job summary...">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group full-width">
                            <label for="role">Job Role / Category</label>
                            <input id="role" name="role" type="text" placeholder="e.g. Finance">
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary"><i class="bi bi-plus-lg"></i> Add Job</button>
                        <a href="admin-job-list.html" class="btn btn-secondary"><i class="bi bi-eye"></i> View Job
                            Listed</a>
                    </div>
                </form>
            </section>

            <footer class="site-footer">
                <p>© 2025 Ramasia — All rights reserved.</p>
            </footer>
        </main>
    </div>

    <script src="./js/admin-sidebar.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.job-form').on('submit', function (e) {
                e.preventDefault();

                const formData = {
                    job_title: $('#title').val(),
                    qualification: $('#qualification').val(),
                    location: $('#location').val(),
                    description: $('#description').val(),
                    role: $('#role').val()
                };

                $.ajax({
                    type: 'POST',
                    url: './actions/job_post.php',
                    data: formData,
                    success: function (response) {
                        alert(response);
                        // Optionally, reset the form or redirect
                        $('.job-form')[0].reset();
                    },
                    error: function () {
                        alert('An error occurred while submitting the form.');
                    }
                });
            });
        });
    </script>
</body>

</html>