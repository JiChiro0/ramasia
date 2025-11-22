<?php
include("../db/config.php");
$uploadDirectory = './resume';

if (isset($_FILES['pdf'])){
    $education = $_POST["education"];
    $schoolField = $_POST["schoolField"];
    $jobTitle = $_POST["jobTitle"];
    $companyTitle = $_POST["companyTitle"];
    $username = $_POST["username"];

    print_r($username);
    $fileName = basename($_FILES['pdf']['name']);
    $targetFilePath = $uploadDirectory . '/' . $fileName;
    $fileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));

    if (move_uploaded_file($_FILES['pdf']['tmp_name'], $targetFilePath)) {
        $query = "INSERT INTO `resume_table`(`email`, `degree`, `university`, `job_title`, `company`, `resume_path`) VALUES(?,?,?,?,?,?)";
        $stmt = $conn->prepare($query);

        $stmt->bind_param("ssssss", $username, $education, $schoolField, $jobTitle, $companyTitle, $targetFilePath);
        if ($stmt->execute()) {
            echo json_encode(['message' => 'Resume saved successfully']);
        } else {
            echo json_encode(['message' => 'Error: ' . $stmt->error]);
        }
       
    } else {
        echo json_encode(['message' => 'Error uploading file.']);
    }

} else {
    echo json_encode(['message' => 'No file was uploaded.']);
}

?>