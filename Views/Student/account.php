<?php
session_start();

if(empty($_SESSION)){header("location: ..\login.php");}
if(isset($_GET['logout'])){session_destroy();header("location: ..\login.php");}

if(isset($_GET['chngPass'])){header("location: ..\changePass.php");}
if(isset($_GET['notif'])){header("location: notif.php");}
if(isset($_GET['account'])){header("location: account.php");}

$user=$_SESSION['id'];

$conn = new mysqli('localhost', 'root', '', 'darussalam');

$sql = "SELECT a.student_id, a.name, s.class, a.fathername, a.mothername, a.gender, a.dob, a.guardianname, a.relationwithguardian, a.guardiannidno, a.email, a.phone, a.praddress, a.peaddress, a.student_picture from apply a, student s where a.student_id=s.sId and a.student_id=789;";
$result = mysqli_fetch_assoc(mysqli_query($conn, $sql));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="core.css">

    <style>
        table {
            width: 90%;
            margin: 20px 0;
            margin-right: auto; margin-left: auto;
            border-collapse: collapse;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #800080;
            color: #fff;
        }

        img {            
            border-radius: 20%;
            width: 400px;
            height: auto;
            margin-top: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

    <header>
        <h1>Welcome to the Student Portal</h1>
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
        <h2>Student Information</h2>

        <table>
            <tr>
                <td style="width: 20%;">ID</td>
                <td style="width: 45%;"><?php echo $result['student_id']; ?></td>
                <td style="text-align: center; vertical-align:top;" rowspan='100'><?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['student_picture'] ).'"/>'; ?></td>
            </tr>
            <tr>
                <td>Name</td>
                <td><?php echo $result['name']; ?></td>
            </tr>
            <tr>
                <td>Class</td>
                <td><?php echo $result['class']; ?></td>
            </tr>
            <tr>
                <td>Father's Name</td>
                <td><?php echo $result['fathername']; ?></td>
            </tr>
            <tr>
                <td>Mother's Name</td>
                <td><?php echo $result['mothername']; ?></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td><?php echo $result['gender']; ?></td>
            </tr>
            <tr>
                <td>Date of Birth</td>
                <td><?php echo $result['dob']; ?></td>
            </tr>
            <tr>
                <td>Guardian's Name</td>
                <td><?php echo $result['guardianname']; ?></td>
            </tr>
            <tr>
                <td>Relation with Guardian</td>
                <td><?php echo $result['relationwithguardian']; ?></td>
            </tr>
            <tr>
                <td>Guardian ID Number</td>
                <td><?php echo $result['guardiannidno']; ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><?php echo $result['email']; ?></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><?php echo $result['phone']; ?></td>
            </tr>
            <tr>
                <td>Permanent Address</td>
                <td><?php echo $result['praddress']; ?></td>
            </tr>
            <tr>
                <td>Present Address</td>
                <td><?php echo $result['peaddress']; ?></td>
            </tr>
        </table>
    </div>
</body>
</html>
