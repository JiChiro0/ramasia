<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ramsia";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$user = $_SESSION["username"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Resume</title>

    <link href="https://fonts.googleapis.com/css2?family=Sarala:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="./css/global-user-sidebar.css">
    <link rel="stylesheet" href="./css/global-user-navbar.css">

    <link rel="stylesheet" href="./css/user-dashboard.css">
    <link rel="stylesheet" href="./css/user-resume.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        margin-bottom: 25px;
    }

    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>

<body>
    <?php

    ?>

    <div class="container">

        <aside id="sidebar-container" class="sidebar"></aside>

        <main class="dashboard">

            <header id="navbar-container" class="navbar"></header>
            <h1 hidden id="username"><?php echo $user ?></h1>
            <section class="dashboard-content">
                <h2>My Resume</h2>
                <form method="post" id="uploadResume">
                    <div class="resume-section">
                        <h3>My Resume</h3>
                        <p class="section-description">Upload your single, most up-to-date CV or resume. This will be
                            attached to all your applications.</p>

                        <div class="file-upload-wrapper">
                            <input type="file" id="cv-upload" class="file-input" hidden>
                            <label for="cv-upload" class="btn btn-primary">
                                <i class="bi bi-upload"></i> Browse File
                            </label>
                            <span class="file-note">Accepted: PDF, DOC, DOCX (Max 5MB)</span>
                        </div>
                        <span id="file-name"></span>
                    </div>

                    <div class="resume-section">
                        <h3>Education</h3>
                        <p class="section-description">List your most recent educational achievements. Add as many as
                            you need.</p>
                        <div class="resume-section">
                            <h3>Education</h3>
                            <table class="table">
                                <tr>
                                    <th>School/University</th>
                                    <th>Degree/Certificate</th>
                                </tr>
                                <?php
                                $stmt = $conn->prepare("SELECT * FROM resume_table WHERE email = ?");
                                $stmt->bind_param("s", $user); // "s" for string
                                $stmt->execute();
                                $result = $stmt->get_result();
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<tr>";
                                        echo "<td>" . htmlspecialchars($row['university']) . "</td>";
                                        echo "<td>" . htmlspecialchars($row['degree']) . "</td>";
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='2'>No university found</td></tr>";
                                }
                                ?>
                            </table>
                        </div>
                        <div class="form-group">
                            <label for="edu-1">Degree or Certificate</label>
                            <input type="text" id="edu-1" placeholder="e.g., B.S. in Computer Science"
                                class="input-field">
                        </div>
                        <div class="form-group">
                            <label for="edu-school-1">School or University</label>
                            <input type="text" id="edu-school-1" placeholder="e.g., University of Example"
                                class="input-field">
                        </div>

                        <button class="btn btn-secondary">
                            <i class="bi bi-plus-circle"></i> Add Another Education
                        </button>
                    </div>

                    <div class="resume-section">
                        <h3>Experience</h3>
                        <p class="section-description">Detail your relevant work experience, starting with the most
                            recent.</p>
                        <div class="resume-section">
                            <h3>Experience</h3>
                            <table class="table">
                                <tr>
                                    <th>Job Title</th>
                                    <th>Company</th>
                                </tr>
                                <?php
                                $stmt = $conn->prepare("SELECT * FROM resume_table WHERE email = ?");
                                $stmt->bind_param("s", $user); // "s" for string
                                $stmt->execute();
                                $result = $stmt->get_result();
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<tr>";
                                        echo "<td>" . htmlspecialchars($row['job_title']) . "</td>";
                                        echo "<td>" . htmlspecialchars($row['company']) . "</td>";
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='2'>No experiences found</td></tr>";
                                }
                                ?>
                            </table>
                        </div>

                        <div class="form-group">
                            <label for="exp-1">Job Title</label>
                            <input type="text" id="exp-1" placeholder="e.g., Front-end Developer" class="input-field">
                        </div>
                        <div class="form-group">
                            <label for="exp-company-1">Company</label>
                            <input type="text" id="exp-company-1" placeholder="e.g., Example Inc." class="input-field">
                        </div>

                        <button class="btn btn-secondary">
                            <i class="bi bi-plus-circle"></i> Add Another Experience
                        </button>
                    </div>

                    <div class="resume-section-footer">
                        <button class="btn btn-primary btn-save" type="submit">
                            <i class="bi bi-check-circle-fill"></i> Save All Changes
                        </button>
                    </div>
                </form>
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

<script>

    $(document).ready(function () {

        const fileInput = document.getElementById('cv-upload');
        const fileNameSpan = document.getElementById('file-name');

        fileInput.addEventListener('change', function () {
            if (this.files.length > 0) {
                fileNameSpan.textContent = this.files[0].name;
            } else {
                fileNameSpan.textContent = "Accepted: PDF, DOC, DOCX (Max 5MB)";
            }
        });

        $("#uploadResume").on('submit', function (e) {
            e.preventDefault();

            let education = $("#edu-1").val();
            let schoolField = $("#edu-school-1").val();
            let jobTitle = $("#exp-1").val();
            let companyTitle = $("#exp-company-1").val();
            const usernameElement = document.getElementById("username");
            const username = usernameElement.textContent;
            const formData = new FormData(this);

            if (fileInput.files.length > 0) {
                formData.append("pdf", fileInput.files[0]);
                formData.append("education", education);
                formData.append("schoolField", schoolField);
                formData.append("jobTitle", jobTitle);
                formData.append("companyTitle", companyTitle);
                formData.append("username", username);
            }

            $.ajax({
                type: "POST",
                url: "./actions/uploadResume.php",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    console.log(response);
                },
                error: function (xhr, status, error) {
                    console.log("AJAX Error:", error);
                }
            });
        });

    });

</script>