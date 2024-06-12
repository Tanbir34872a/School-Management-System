<?php
    session_start();
    $conn = new mysqli('localhost','root','','darussalam');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    if(isset($_GET['logout'])){session_destroy();header("location: ..\login.php");}
    if(empty($_SESSION)){header("location: ..\login.php");}
    $user = $_SESSION['id'];

    $message = '';

    if(isset($_POST['post'])){
        if(!empty($_POST['course_id']) && !empty($_POST['note'])){
            $course_id = $_POST['course_id'];
            $note = $_POST['note'];
            $sqlInsert = "INSERT INTO course_notice(course_id, note) VALUES ('$course_id','$note');";
            mysqli_query($conn,$sqlInsert);
            $message = 'Successfully Posted';
        }
        else{
            $message = 'Please Fill all the feilds!';
        }
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Teacher Portal</title>
    <style>
        /* Reset default margin and padding */
        body,
        ul {
            margin: 0;
            padding: 0;
        }

        /* Basic styling */
        body {
            font-family: Arial, sans-serif;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            text-align: center;
        }

        nav ul li {
            display: inline;
            margin: 0 10px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
        }

        nav ul li a:hover {
            text-decoration: underline;
        }

        main {
            padding: 20px;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>
    <header>
        <h1>Teacher Portal</h1>
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="courses.php">View Courses</a></li>
                <li><a href="#">View Students</a></li>
                <li><a href="#">Add Assignment</a></li>
                <li><a href="notification.php">Notification</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>

    <br><br><br>

    <fieldset style="width:40%; margin-left:auto; margin-right:auto;">
        <form method="post">
            Course = <input type="text" name="course_id"><br><hr>
            Notice = <textarea name="note" rows="4" cols="70"></textarea><br><hr>
            <button name='post'>Post Notice</button>
            <span><?php echo $message?></span>
        </form>

    </fieldset>

</body>

</html>