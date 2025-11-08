<?php
    include_once '../db/config.php';

    if(isset($_POST["username"]) && isset($_POST["password"])){
        $user = $_POST["username"];
        $pass = $_POST["password"];
        $gender = $_POST["gender"];

        $query = "INSERT INTO `auth`(`username`, `password`, `gender`) VALUES (?,?,?)";
        $hashed_pass = password_hash($pass, PASSWORD_DEFAULT);

        $stmt = mysqli_prepare($conn, $query);

        if($stmt){
            mysqli_stmt_bind_param($stmt, "sss", $user, $hashed_pass , $gender);

            if (mysqli_stmt_execute($stmt)) {
                // echo "New record created successfully!";
            } else {
                echo "Error executing query: " . mysqli_stmt_error($stmt);
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }else{
            echo "Error preparing statement: " . mysqli_error($conn);
        }
    }
    mysqli_close($conn);

?>