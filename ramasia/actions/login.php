<?php
 include_once '../db/config.php';
 // Check if form submitted
if (isset($_POST['username']) && isset($_POST['password'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // Prepare SQL statement
    $query = "SELECT `password` FROM auth WHERE username = ?";
    $stmt = mysqli_prepare($conn, $query);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "s", $user);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);

        // Check if username exists
        if (mysqli_stmt_num_rows($stmt) > 0) {
            mysqli_stmt_bind_result($stmt, $hashed_pass);
            mysqli_stmt_fetch($stmt);

            // Verify password
            if (password_verify($pass, $hashed_pass)) {
                echo "Login successful! Welcome, " . htmlspecialchars($user);
            } else {
                echo "Invalid password!";
            }
        } else {
            echo "Username not found!";
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Error preparing statement: " . mysqli_error($conn);
    }
}

mysqli_close($conn);


?>