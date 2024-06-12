<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'darussalam');

if(empty($_SESSION)){header("location: ..\login.php");}
if(isset($_GET['logout'])){session_destroy();header("location: ..\login.php");}

if(isset($_GET['chngPass'])){header("location: ..\changePass.php");}
if(isset($_GET['notif'])){header("location: notif.php");}
if(isset($_GET['account'])){header("location: account.php");}


if (isset($_GET['course'])) {
    $courseId = $_GET['course'];

    // Fetch course details
    $courseQuery = "SELECT * FROM course WHERE course_id = $courseId";
    $courseResult = mysqli_query($conn, $courseQuery);
    $course = mysqli_fetch_assoc($courseResult);

    // Fetch teacher details
    $teacherQuery = "SELECT * FROM teacher WHERE tId = " . $course['teacher_id'];
    $teacherResult = mysqli_query($conn, $teacherQuery);
    $teacher = mysqli_fetch_assoc($teacherResult);

    //Fetch course notice
    $courseNoticeQuery = "SELECT * FROM course_notice WHERE course_id = $courseId order by notice_id desc";
    $courseNoticeResult = mysqli_query($conn, $courseNoticeQuery);
    
    //Fetch course notice
    $courseNoteQuery = "SELECT * FROM course_note WHERE course_id = $courseId ORDER BY uploadDate DESC";
    $courseNoteResult = mysqli_query($conn, $courseNoteQuery);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Course Details</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="core.css">
    <style>
        /* Additional CSS for this page */

        table {
            width: 40%;
            border-collapse: collapse;
            margin: 20px 0;
            border: 2px solid #800080;
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

        .content {
            background-color: #f5f5f5;
            padding: 20px;
            border-radius: 10px;
        }

        .course-title {
            font-size: 24px;
            color: #800080;
        }

        .class-times {
            font-weight: bold;
        }

        .teacher-info {
            margin-top: 20px;
            display: flex;
            align-items: center;
        }

        .teacher-info img {
            border-radius: 20%;
            margin-right: 20px;
            width: 100px;
        }

        .course-section {
            margin-top: 30px;
        }

        .course-section h3 {
            font-size: 20px;
            color: #800080;
            margin-top: 10px;
        }

        .course-notes,
        .course-notices {
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 15px;
            border-radius: 5px;
        }

        .course-notes h4,
        .course-notices h4 {
            font-size: 18px;
            color: #800080;
        }
    </style>
</head>
<body>
    <header>
        <h1>Course Details</h1>
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
        <h2 class="course-title"><?php echo $course['course_name']; ?></h2>
        <table border=1 align="right">
            <thead>
                <tr>
                    <th>Day</th>
                    <th>Time</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $classTimes = explode(',', $course['class_schedule']); // Assuming classTimes is a comma-separated list of class schedule information
                foreach ($classTimes as $classTime) {
                    list($day, $time) = explode(':', $classTime, 2);
                    echo "<tr>";
                    echo "<td>$day</td>";
                    echo "<td>$time</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
      <div class="teacher-info">
            <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $teacher['teacher_pic'] ).'"/>'; ?>
            <h3>Teacher: <?php echo $teacher['name']; ?></h3>
        </div>

        <div class="course-section course-notes">
            <h3>Course Notes</h3>
            <table style="width:1000px; margin-left:auto;margin-right:auto;">
                <th>Title</th>  
                <th style="width:200px;">Upload Date</th>
                <th style="width:100px;">File Size</th>
            <?php
            while ($courseNote = mysqli_fetch_assoc($courseNoteResult)) {
                $filesize=$courseNote['filesize']/1000;
                echo "<tr>";
                echo "<td><b><a href='download_note.php?id=$courseNote[id]'>$courseNote[filename]</a></b></td>";
                echo "<td>$courseNote[uploadDate]</td>";
                echo "<td>$filesize kB</td>";
                echo "</tr>";
            }
            ?>
            </table>
        </div>

        <div class="course-section course-notices">
            <h3>Course Notices</h3>
            <?php 
                while($courseNotice = mysqli_fetch_assoc($courseNoticeResult)){
                    echo "<p>$courseNotice[notice_id] - ";
                    echo "$courseNotice[note]</p>";
                }
            ?>
        </div>
    </div>
</body>
</html>
