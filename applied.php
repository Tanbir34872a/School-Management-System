<?php

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "darussalam";


$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Escape user inputs for security
    $name = $conn->real_escape_string($_POST['name']);
    $fathername = $conn->real_escape_string($_POST['fathername']);
    $mothername = $conn->real_escape_string($_POST['mathername']);
    $gender = $conn->real_escape_string($_POST['gender']);
    $guardianname = $conn->real_escape_string($_POST['guardianname']);
    $relationwithguardian = $conn->real_escape_string($_POST['relationwithguardian']);
    $guardiannidno = $conn->real_escape_string($_POST['guardiannidno']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $praddress = $conn->real_escape_string($_POST['praddress']);
    $peaddress = $conn->real_escape_string($_POST['peaddress']);

    
    $student_picture = "";

    // Check if the file was uploaded successfully
    if (isset($_FILES['student_picture']) && $_FILES['student_picture']['error'] === UPLOAD_ERR_OK) {
        $target_dir = "C:\\xampp\\htdocs\\darussalam\\uploads\\"; // Set the correct path to the uploads directory
        $target_file = $target_dir . basename($_FILES["student_picture"]["name"]);

        // Move the uploaded file to the target directory
        if (move_uploaded_file($_FILES["student_picture"]["tmp_name"], $target_file)) {
            $student_picture = $conn->real_escape_string($target_file);
        }
    }


       {

    $sql = "INSERT INTO apply (name, fathername, mothername, gender, guardianname, relationwithguardian, guardiannidno, email, phone, praddress, peaddress, student_picture) 
            VALUES ('$name', '$fathername', '$mothername', '$gender', '$guardianname', '$relationwithguardian', '$guardiannidno', '$email', '$phone', '$praddress', '$peaddress', '$student_picture')";
        }

    if ($conn->query($sql) === TRUE) {
        echo "<!DOCTYPE html>
                <html>
                <head>
                    <title>Application Successful</title>
                </head>
                <body style='display: flex; justify-content: center; align-items: center; height: 100vh;'>
                    <h1>Application successful!</h1>
                </body>
                </html>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


$conn->close();
?>