<?php
$conn = new mysqli('localhost', 'root', '', 'complaint');


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fileName = $_FILES["fileToUpload"]["name"];
    $fileTmpName = $_FILES["fileToUpload"]["tmp_name"];
    $fileType = $_FILES["fileToUpload"]["type"];
    $fileSize = $_FILES["fileToUpload"]["size"];

    $fileContent = file_get_contents($fileTmpName);
    $fileContent = base64_encode($fileContent);

    $sql = "INSERT INTO files (filename, filetype, filesize, filecontent) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssis", $fileName, $fileType, $fileSize, $fileContent);

    if ($stmt->execute()) {
        echo "File uploaded successfully.";
    } else {
        echo "Error uploading file: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
        <label for="fileToUpload">Choose file to upload:</label>
        <input type="file" name="fileToUpload" id="fileToUpload" required>
        <br>
        <input type="submit" value="Upload File">
    </form>
</body>

</html>
