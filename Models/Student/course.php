<?php 
    session_start();
    $conn = new mysqli('localhost','root','','darussalam');
    if(isset($_GET['logout'])){session_destroy();header("location: ..\login.php");}
    if(empty($_SESSION)){header("location: ..\login.php");}

    if(isset($_GET['chngPass'])){header("location: ..\changePass.php");}
    if(isset($_GET['notif'])){header("location: notif.php");}
    if(isset($_GET['account'])){header("location: account.php");}

    $sql1 = "select * from student where sId = '".$_SESSION['id']."'";
    $r = mysqli_fetch_assoc(mysqli_query($conn, $sql1));
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Portal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="core.css">
</head>
<body>

    <header>
        <h1>Courses</h1>
        <style>
            .course-list {
                list-style: none;
                padding: 0;
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
            }

            .course-item {
                background-color: #f5f5f5;
                margin: 10px;
                padding: 15px;
                border-radius: 5px;
                width: calc(25% - 20px);
                text-align: center;
            }

            .course-item button {
                background-color: #800080;
                color: #fff;
                border: none;
                padding: 20px 40px;
                border-radius: 5px;
                cursor: pointer;
                font-size: 20px;
                transition: background-color 0.2s;
            }

            .course-item button:hover {
                background-color: #5B005B;
            }
        </style>
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
        <?php
        $sql2 = "SELECT * FROM course WHERE class = '" . $r['class'] . "'";
        $res = mysqli_query($conn, $sql2);
        ?>
        <form method="get" action="course_teacher.php">    
            <ul class="course-list">
                <?php
                while ($rc = mysqli_fetch_assoc($res)) {
                    echo "<li class='course-item'><button type='submit' name='course' value='$rc[course_id]'>$rc[course_name]</button></li>";
                }
                ?>
             </ul>
            </form>
    </div>
</body>
</html>
