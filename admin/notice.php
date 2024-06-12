<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "darussalam";
$conn = new mysqli($servername, $username, $password, $dbname);

$sql1 = "SELECT notice FROM notice";
$noticeResults = mysqli_query($conn, $sql1);
$message = '';

if (isset($_GET['submitNotice'])) {
    if (isset($_GET['notice']) && !empty($_GET['notice'])) {
        $notice = $_GET['notice']; // Assuming your input field name is "notice"

        // Prepare the SQL statement to insert the notice into the database
        $sql2 = "INSERT INTO notice (notice) VALUES ('$notice')";

        if ($conn->query($sql2) === TRUE) {
            $message = "Notice added successfully";
            $noticeResults = mysqli_query($conn, $sql1);
             header("Location: notice.php");
             exit();
        } else {
            $message = "Error occurred: " . $conn->error;
        }
    } else {
        $message = "Notice field is empty";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="\media\logo-darussalam.png" type="image/x-icon">
    <title>ADMIN</title>
</head>
<body style="background-color: #eddded;">

    <table width="100%" height="7px" border="7">
        <tr>
            <td colspan="9" style="position: relative;">
                <video width="100%" height="100px" style="object-fit: cover;" autoplay loop muted>
                    <source src="\media\landingpagevideo.mp4" type="video/mp4">
                    
                </video>
                <img height="100px" src="\media\logo-darussalam.png" style="z-index: 2;position: absolute; left:45%;">
            </td>
        </tr>

         <tr bgcolor="purple">
            <td width="11.1111%" align="center"><b><a href="admin.php" style="color: whitesmoke;">HOME</a></b></td>
            <td width="11.1111%" align="center"><b><a href="donations.php" style="color: whitesmoke;">DONATONS</a></b></td>
     
            <td width="11.1111%" align="center"><b><a href="admin.php" style="color: whitesmoke;">TEACHER</a></b></td>
            <td width="11.1111%" align="center"><b><a href="grave_management.php" style="color: whitesmoke;">GRAVE MANAGEMENT</a></b></td>
           <td width="11.1111%" align="center"><b><a href="admin.php" style="color: whitesmoke;">STUDENTS</a></b></td>
            <td width="11.1111%" align="center"><b><a href="notice.php" style="color: goldenrod;">NOTICE</a></b></td>
            <td width="11.1111%" align="center"><b><a href="admin.php" style="color: whitesmoke;">APPLICATIONS</a></b></td>
            <td width="11.1111%" align="center"><b><a href="admin.php" style="color: whitesmoke;">RESERVATIONS</a></b></td>
        </tr>
    </table>
    <br><br><br>

    <div style="width: 40%; margin: 70px auto 0; text-align: center;">
    <form method="get" action="notice.php">
        Post a notice: <input type="text" name="notice">
        <button type="submit" name="submitNotice">Submit</button>
        <?php echo $message;?>
    </form>
</div>

  <div style="width: 40%;margin: 70px auto 0; padding: 40px; border: 3px solid black;height: 300px;overflow: auto;">
    <!-- Notices will be dynamically added here -->
    <?php
        // Fetch and display notices from the database
        while($notice = mysqli_fetch_assoc($noticeResults)) {
            echo '<div style="margin-bottom: 10px;">' . $notice['notice'] . '</div>';
        }
    ?>

    <br><br>
</div>


</body>
</html>
 