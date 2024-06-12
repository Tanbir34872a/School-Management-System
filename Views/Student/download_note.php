<?php
    $conn = new mysqli('localhost', 'root', '', 'darussalam');

    if (isset($_GET['id'])) {
        $noteId = $_GET['id'];

        $sql = "SELECT filename, filetype, filesize, filecontent FROM course_note WHERE id = '$noteId'";
        $res = mysqli_fetch_assoc(mysqli_query($conn,$sql));

        // Send the file for download
        header("Content-type: $res[filetype]");
        header("Content-length: $res[filesize]");
        header("Content-Disposition: attachment; filename=$res[filename]");
        echo base64_decode($res['filecontent']);
        exit();
    }
?>
