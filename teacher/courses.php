<?php
    session_start();
    $conn = new mysqli('localhost','root','','darussalam');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    if(isset($_GET['logout'])){session_destroy();header("location: ..\login.php");}
    if(empty($_SESSION)){header("location: ..\login.php");}
    $user = $_SESSION['id'];

    // Fetch courses assigned to the logged-in teacher
    $sql = "SELECT * FROM course WHERE teacher_id = '$user'";
    $result=mysqli_query($conn,$sql);   
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

    <main>
       <h2>View Courses</h2>
        <?php
        // Display courses in a table
        if ($result->num_rows > 0) {
            echo "<table border='1'>
                    <tr>
                        <th>Course ID</th>
                        <th>Course Name</th>
                        <th>Class</th>
                        <th>Schedule</th>
                    </tr>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["course_id"] . "</td>
                        <td>" . $row["course_name"] . "</td>
                        <td>" . $row["class"] . "</td>
                        <td>" . $row["class_schedule"] . "</td>

                    </tr>";
            }

            echo "</table>";
        } else {
            echo "No courses assigned.";
        }

        $conn->close();
        ?>
    </main>

</body>

</html>