<?php
    session_start();
    $conn = new mysqli('localhost','root','','darussalam');

    if(empty($_SESSION)){header("location: ..\login.php");}
    if(isset($_GET['logout'])){session_destroy();header("location: ..\login.php");}

    if(isset($_GET['chngPass'])){header("location: ..\changePass.php");}
    if(isset($_GET['notif'])){header("location: notif.php");}
    if(isset($_GET['account'])){header("location: account.php");}

    $sql1 = "SELECT * FROM student WHERE sId = '".$_SESSION['id']."'";
    $r = mysqli_fetch_assoc(mysqli_query($conn, $sql1));

    $all_notices_sql = "SELECT * FROM class_notice WHERE class = '".$r['class']."' ORDER BY notice_id DESC";
    $all_notices_result = mysqli_query($conn, $all_notices_sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Notices</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="core.css">
    <style>
        table {
            width: 95%;
            border-collapse: collapse;
            margin: 20px 0;
            border: 2px solid #800080;
            margin-left: auto;
            margin-right: auto;
        }

        th, td {
            padding: 8px 12px;
            text-align: center;
            border: 1px solid #ccc;
        }

        th {
            background-color: #800080;
            color: #fff;
        }

        tr:hover {
            background-color: #ddd;
        }

    </style>

</head>
<body>

    <header>
        <h1>Class Notices</h1>
    </header>

    <div class="menu">
        <a href="home.php"><i class="fa-solid fa-house"></i>&nbsp; Home</a>
        <a href="course.php"><i class="fa-solid fa-book"></i>&nbsp; Courses</a>
        <a href="grade.php"><i class="fa-solid fa-scroll"></i>&nbsp; Grades</a>
        <a href="#"><i class="fa-solid fa-check"></i>&nbsp; Assignments</a>
        <a href="#"><i class="fa-solid fa-coins"></i>&nbsp; Financial Information</a>
        <a href="#">Apply for Leave</a>
        <form method="GET" style="right: 30px; top:20px; position:absolute">
            <button name="account" class="fa-solid fa-user"></button>
            <button name="notif" class="fa-solid fa-bell"></button>
            <button name="chngPass" class="fa-solid fa-key"></button>
            <button name="logout" class="fa-solid fa-sign-out-alt"></button>
        </form>
    </div>

    <div class="content">
        <h2>Welcome, <?php echo $r['name']; ?>!</h2>
        <p>Here are all the class notices for your class:</p>

        <table>
            <thead>
                <tr>
                    <th>Serial</th>
                    <th>Notice</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $serial = 1;//setting serial number
                // Display all class notices as rows in the table
                while ($notice = mysqli_fetch_assoc($all_notices_result)) {
                    echo '<tr>';
                    echo "<td> $serial </td>";
                    echo '<td>' . $notice['note'] . '</td>';
                    echo '<td>' . $notice['notice_id'] . '</td>';
                    echo '</tr>';
                    $serial += 1;
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
