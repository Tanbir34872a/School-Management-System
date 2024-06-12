<?php 
    session_start();
    $conn = new mysqli('localhost','root','','darussalam');
    if(isset($_GET['logout'])){session_destroy();header("location: ..\login.php");}
    if(empty($_SESSION)){header("location: ..\login.php");}

    $user = $_SESSION['id'];

    if(isset($_GET['chngPass'])){header("location: ..\changePass.php");}
    if(isset($_GET['notif'])){header("location: notif.php");}
    if(isset($_GET['account'])){header("location: account.php");}

    if(isset($_POST['insert'])){
        $sub = $_POST['sub'];
        $app = $_POST['app'];
        
        $sql_Ins="insert into application(subject, letter, student_id) values ('$sub','$app','$user');";
        mysqli_query($conn,$sql_Ins);
    }

    $sql1 = "select * from application where student_id = '".$_SESSION['id']."'  ORDER BY date DESC";
    $res = mysqli_query($conn, $sql1);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Application</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="core.css">
    <style>
        /* Additional CSS for this page */
        table {
            width: 75%;
            border-collapse: collapse;
            margin: 20px 0;
            border: 2px solid #800080;
            margin-left: auto; margin-right: auto;
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
        <h1>Student Application</h1>
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
        <form method="post">
            <table border = "1">
                <tr>
                    <th style="width:500px">Subject</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th colspan="3">Options</th>
                </tr>
                <?php while($r= mysqli_fetch_assoc($res)){ 
                    echo "<tr>";
                    echo "<td>$r[subject]</td>";
                    echo "<td>$r[date]</td>";
                    echo "<td>$r[status]</td>"; 
                    echo "<td><button type='submit' name='view' value='$r[sr]'>View</button></td>";
                    if($r['status']=='Sent')  {  
                        echo "<td><button type='submit' name='edit' value='$r[sr]'>Edit</button></td>";
                        echo "<td><button type='submit' name='delete' value='$r[sr]'>Delete</button></td>";
                    }
                    echo "</tr>";
                } ?>
            </table>
        </form>
        
        <form method="post">
        <?php
            echo "Subject: <input type='text' name = 'sub'><br>";
            echo "Application: <textarea name = 'app' rows='4' cols='50'></textarea><br>";
            echo "<button type='submit' name='insert'>Insert</button>";
        ?>
        </form>

    </div>

</body>
</html>
