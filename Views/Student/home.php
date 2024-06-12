<?php 
    session_start();
    $conn = new mysqli('localhost','root','','darussalam');
    if(isset($_GET['logout'])){session_destroy();header("location: ..\login.php");}
    
    if(isset($_GET['chngPass'])){header("location: ..\changePass.php");}
    if(isset($_GET['notif'])){header("location: notif.php");}
    if(isset($_GET['account'])){header("location: account.php");}

    if(empty($_SESSION)){header("location: ..\login.php");}
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
        <h1>Welcome to the Student Portal</h1>
    </header>

    <div class="menu">
        <a href="home.php"><i class="fa-solid fa-house"></i>&nbsp; Home</a>
        <a href="course.php"><i class="fa-solid fa-book"></i>&nbsp; Courses</a>
        <a href="grade.php"><i class="fa-solid fa-scroll"></i>&nbsp; Grades</a>
        <a href="#"><i class="fa-solid fa-check"></i>&nbsp; Assignments</a>
        <a href="#"><i class="fa-solid fa-coins"></i>&nbsp; Financial Information</a>
        <a href="application.php"><i class="fa-solid fa-pen-to-square"></i>&nbsp; Application</a>
        <form method="GET" style="right: 30px; top:20px; position:absolute">
            <button name="account" class="fa-solid fa-user"></button>
            <button name="notif" class="fa-solid fa-bell"></button>
            <button name="chngPass" class="fa-solid fa-key"></button>
            <button name="logout" class="fa-solid fa-sign-out-alt"></button>
        </form>
    </div>

    <div class="content">
        <h2>Welcome, <?php echo $r['name']; ?>!</h2>
        <p>This is your student portal. You can access various features and information from here.</p>
    </div>
</body>
</html>
