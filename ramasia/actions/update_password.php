<?php
include("../db/config.php");

session_start();

if (isset($_POST['old_password'], $_POST['new_password'], $_POST['confirm_password'])) {

    $old_password = $_POST['old_password'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];
    $user_id = $_SESSION['user_id'];

    print_r($user_id);

    if ($new_password !== $confirm_password) {
        echo "New password and confirm password do not match.";
        exit;
    }

    // 1. Fetch user from DB
    $sql = "SELECT password FROM auth WHERE user_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result()->fetch_assoc();

    if (!$result) {
        echo "User not found.";
        exit;
    }

    $stored_hash = $result['password'];

    // 2. Verify old password
    if (!password_verify($old_password, $stored_hash)) {
        echo "Old password is incorrect.";
        exit;
    }

    // 3. Hash new password
    $new_hash = password_hash($new_password, PASSWORD_BCRYPT);

    // 4. Update password securely
    $sql = "UPDATE auth SET password = ? WHERE user_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $new_hash, $user_id);

    if ($stmt->execute()) {
        echo "Password updated successfully";
    } else {
        echo "Error updating password: " . $conn->error;
    }

} else {
    echo "Required fields are missing.";
}



?>