<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'darussalam');

$id=$_SESSION['id'];

if(empty($_SESSION)){header("location: ..\login.php");}
if(isset($_GET['logout'])){session_destroy();header("location: ..\login.php");}

if(isset($_GET['chngPass'])){header("location: ..\changePass.php");}
if(isset($_GET['notif'])){header("location: notif.php");}
if(isset($_GET['account'])){header("location: account.php");}


$classesQuery = "SELECT DISTINCT class FROM grade where student_id='".$_SESSION['id']."';";
$classesResult = mysqli_query($conn, $classesQuery);
$classes = mysqli_fetch_all($classesResult,MYSQLI_ASSOC);

$selectedClass = isset($_GET['class']) ? $_GET['class'] : (isset($classes[0]['class']) ? $classes[0]['class'] : null); //normal if else

$gradesQuery = "SELECT g.course_id, c.course_name, g.class, g.mq1, g.mq2, g.me, g.fq1, g.fq2, g.fe, g.mark, g.comm FROM grade g, course c where g.course_id=c.course_id AND g.student_id='$id' AND g.class='$selectedClass';";
$gradesResult = mysqli_query($conn, $gradesQuery);
$grades = mysqli_fetch_all($gradesResult, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Grades</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="core.css">
    <style>
        table {
            width: 1200px;
            border-collapse: collapse;
            margin: 20px;
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

        .grades-container {
            display: flex;
            justify-content: space-between;
        }

        .class-dropdown {
            margin-bottom: 20px;
        }

    </style>
</head>
<body>

    <header>
        <h1>Grades</h1>
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
        <div class="grades-container">
            <div class="class-dropdown">
                <label for="class">Select Class:</label>
                <select id="class" name="class" onchange="location = this.value;">
                    <?php foreach ($classes as $class) : ?>
                        <option value="grade.php?class=<?php echo $class['class']; ?>" <?php echo ($selectedClass == $class['class']) ? 'selected' : ''; ?>>
                            <?php echo $class['class']; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="table">
                <table border = 1>
                    <tr>
                        <th style="width: 50px;">Course ID</th>
                        <th style="width: 90px;">Course Name</th>
                        <th style="width: 50px;">Mid Quiz 1</th>
                        <th style="width: 50px;">Mid Quiz 2</th>
                        <th style="width: 50px;">Mid Exam</th>
                        <th style="width: 50px;">Final Quiz 1</th>
                        <th style="width: 50px;">Final Quiz 2</th>
                        <th style="width: 50px;">Final Exam</th>
                        <th style="width: 50px;"> Total Marks</th>
                        <th style="width: auto;">Comment</th>
                    </tr>
                    <?php foreach ($grades as $grade) : ?>
                        <tr>
                            <td><?php echo $grade['course_id']; ?></td>
                            <td><?php echo $grade['course_name']; ?></td>
                            <td><?php echo $grade['mq1']; ?></td>
                            <td><?php echo $grade['mq2']; ?></td>
                            <td><?php echo $grade['me']; ?></td>
                            <td><?php echo $grade['fq1']; ?></td>
                            <td><?php echo $grade['fq2']; ?></td>
                            <td><?php echo $grade['fe']; ?></td>
                            <td><?php echo $grade['mark']; ?></td>
                            <td><?php echo $grade['comm']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
