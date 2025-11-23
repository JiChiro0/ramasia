<?php
include("../admin_db/config.php");
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_POST['job_title'], $_POST['description'], $_POST['location'])) {
        echo "Required fields are missing.";
        exit;
    } else {
        $job_title = $_POST['job_title'];
        $job_description = $_POST['description'];
        $location = $_POST['location'];
        $qualification = $_POST['qualification'] ?? "";
        $role = $_POST['role'] ?? "";
        $poster_id = $_SESSION['user_id']; // admin/user posting

        $query = "INSERT INTO `job_posting`
        (`poster_id`, `post_title`, `post_quali`, `post_loc`, `post_desc`, `post_job_role`)
        VALUES (?, ?, ?, ?, ?, ?)";

        // Prepare the statement
        if ($stmt = $conn->prepare($query)) {

            $stmt->bind_param(
                "isssss",
                $poster_id,
                $job_title,
                $qualification,
                $location,
                $job_description,
                $role
            );

            if ($stmt->execute()) {
                echo "Job posting added successfully.";
            } else {
                echo "Error executing query: " . $stmt->error;
            }

            $stmt->close();

        } else {
            echo "Error preparing statement: " . $conn->error;
        }
    }
} else {
    echo "Invalid request method.";
}

?>