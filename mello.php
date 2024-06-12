<?php
$conn = new mysqli('localhost', 'root', '', 'complaint');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$fileList = [];

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    // Download file
    $fileId = $_GET['id'];

    $sql = "SELECT filename, filetype, filesize, filecontent FROM files WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $fileId);
    $stmt->execute();
    $stmt->bind_result($filename, $filetype, $filesize, $filecontent);

    if ($stmt->fetch()) {
        // Send the file for download
        header("Content-type: $filetype");
        header("Content-length: $filesize");
        header("Content-Disposition: attachment; filename=$filename");
        echo base64_decode($filecontent);
        exit();
    } else {
        echo "File not found.";
    }

    $stmt->close();
} else {
    // View list of files
    $sql = "SELECT id, filename FROM files";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $fileList[] = $row;
        }
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Files</title>
</head>

<body>
    <?php if (empty($fileList)): ?>
        <p>No files available.</p>
    <?php else: ?>
        <h2>List of Available Files</h2>
        <ul>
            <?php foreach ($fileList as $file): ?>
                <li>
                    <a href="?id=<?php echo $file['id']; ?>">
                        <?php echo $file['filename']; ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</body>

</html>
