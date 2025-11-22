<?php
require_once '../vendor/autoload.php';
include_once '../db/config.php';
use Firebase\JWT\JWT;
use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();
session_start();

if (isset($_POST['username']) && isset($_POST['password'])) {
    $user = $_POST['username'] ?? "";
    $pass = $_POST['password'] ?? "";


    // Prepare SQL statement
    $query = "SELECT `password` , `username`, `id`, `role` FROM auth WHERE username = ?";

    $stmt = $conn->prepare($query);

    $stmt->bind_param("s", $user);



    if ($stmt->execute()) {
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $hashed_pass = $row['password'];
            $username = $row['username'];
            $user_id = $row['id'];
            $role = $row['role'];
            // Verify password
            $auth = password_verify($pass, $hashed_pass);
            if ($auth) {
                $payload = [
                    'username' => $user,
                    'iat' => time(),
                    'exp' => time() + 3600 // Token valid for 1 hour
                ];

                $jwt = JWT::encode($payload, $_ENV['SECRET_KEY'], 'HS256');
                $_SESSION['jwt'] = $jwt;
                $_SESSION['username'] = $username;
                $_SESSION['user_id'] = $user_id;

                if ($role == 'admin') {
                    echo "admin";
                } else {
                    echo "user";
                }
                exit();
            } else {
                echo "err";
            }
        } else {
            echo "User not found";
        }
    }




    // $stmt = mysqli_prepare($conn, $query);

    // if ($stmt) {
    //     mysqli_stmt_bind_param($stmt, "s", $user);
    //     mysqli_stmt_execute($stmt);
    //     mysqli_stmt_store_result($stmt);

    //     // Check if username exists
    //     if (mysqli_stmt_num_rows($stmt) > 0) {
    //         mysqli_stmt_bind_result($stmt, $hashed_pass);
    //         mysqli_stmt_fetch($stmt);

    //         // Verify password
    //         if (password_verify($pass, $hashed_pass)) {
    //             echo "Login successful! Welcome, " . htmlspecialchars($user);
    //         } else {
    //             echo "Invalid password!";
    //         }
    //     } else {
    //         echo "Username not found!";
    //     }

    //     mysqli_stmt_close($stmt);
    // } else {
    //     echo "Error preparing statement: " . mysqli_error($conn);
    // }
}

mysqli_close($conn);


?>