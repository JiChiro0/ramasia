<?php
    include_once '../db/config.php';

    if(isset($_POST["username"]) && isset($_POST["password"])){
        $user = $_POST["username"] ?? "";
        $pass = $_POST["password"] ?? "";
        $gender = $_POST["gender"] ?? "";
        $role = "user";

        $query = "INSERT INTO `auth`(`username`, `password`, `gender` , `role`) VALUES (?,?,?,?)";
        $hashed_pass = password_hash($pass, PASSWORD_DEFAULT);

        $stmt = $conn -> prepare($query);
        $stmt -> bind_param("ssss", $user, $hashed_pass, $gender , $role);

        if($stmt -> execute()){
            echo "Registration successful! Welcome, " . htmlspecialchars($user);
        } else {
            echo "Error: " . $stmt -> error;
        }     
    }
    mysqli_close($conn);

?>