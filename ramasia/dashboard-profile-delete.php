<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Resume</title>
    <link rel="stylesheet" href="resume.css">
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
                <h3 class="user-name">Alden Recharge Sample</h3>
            </div>

            <nav class="menu">
                <a href="#"><i class="icon">🏠</i> User Dashboard</a>
                <a href="#" class="active"><i class="icon">📄</i> My Resume</a>
                <a href="#"><i class="icon">📤</i> My Applied</a>
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

            <!-- Edit Resume Section -->
            <section class="dashboard-content">
                <h2>Edit Resume</h2>

                <!-- My Resume Section -->
                <div class="resume-section">
                    <h3>My Resume</h3>
                    <label>CV Attachment</label><br>
                    <button class="btn-upload">Browse</button>
                    <p class="file-note">Upload file (pdf, doc, docx)</p>
                </div>

                <!-- Education Section -->
                <div class="resume-section">
                    <h3>Education</h3>
                    <input type="text" placeholder="Education 1" class="input-field">
                    <button class="btn-add">Add Another Education</button>
                </div>

                <!-- Experience Section -->
                <div class="resume-section">
                    <h3>Experience</h3>
                    <input type="text" placeholder="Experience 1" class="input-field">
                    <button class="btn-add">Add Another Experience</button>
                </div>

                <!-- Portfolio Section -->
                <div class="resume-section">
                    <h3>Portfolio</h3>
                    <button class="btn-upload">Browse</button>
                </div>
            </section>
        </main>
    </div>
</body>
</html>
