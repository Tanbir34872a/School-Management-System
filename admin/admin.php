<?php
session_start();
if(empty($_SESSION))
    {
        header("location:  ..\login.php");
    }

if(isset($_GET['logout']))
{
    header("location: ..\login.php");
    session_destroy();
}
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "darussalam";
$conn = new mysqli($servername, $username, $pass, $dbname);

$sql1 = "SELECT SUM(Amount) as total_funds FROM donators";
$res = mysqli_query($conn, $sql1);
$totalFunds = mysqli_fetch_assoc($res)['total_funds'];
$sql2 = "SELECT notice from notice";
$noticeResults = mysqli_query($conn, $sql2);



?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADMIN</title>
</head>
<body style="background-color: #eddded;">

    <table width="100%" height="7px" border="7">
        <tr>
            <td colspan="9" style="position: relative;">
                <video width="100%" height="100px" style="object-fit: cover;" autoplay loop muted>
                    <source src="/media/landingpagevideo.mp4" type="video/mp4">
                    
                </video>
                <img height="100px" src="/media/logo-darussalam.png" style="z-index: 2;position: absolute; left:45%;">
            </td>
        </tr>

        <tr bgcolor="purple">
            <td width="11.1111%" align="center"><b><a href="admin.php" style="color: goldenrod;">HOME</a></b></td>
            <td width="11.1111%" align="center"><b><a href="donations.php" style="color: whitesmoke;">DONATONS</a></b></td>
     
            <td width="11.1111%" align="center"><b><a href="admin.php" style="color: whitesmoke;">TEACHER</a></b></td>
            <td width="11.1111%" align="center"><b><a href="grave_management.php" style="color: whitesmoke;">GRAVE MANAGEMENT</a></b></td>
           <td width="11.1111%" align="center"><b><a href="admin.php" style="color: whitesmoke;">STUDENTS</a></b></td>
            <td width="11.1111%" align="center"><b><a href="notice.php" style="color: whitesmoke;">NOTICE</a></b></td>
            <td width="11.1111%" align="center"><b><a href="admin.php" name="logout" style="color: whitesmoke;">APPLICATIONS</a></b></td>
            <form>
            <td width="11.1111%" align="center"><button type="submit" name="logout" style="color: whitesmoke;background: none;border: none;font-size: 15px;"><b>LOGOUT</b></button></td>
        </form>
        </tr>
    </table>
    <br><br><br>

    
   Total Funds <br>
    <div style="width: 100px; height: 100px; background-color: red; border-radius: 50%; text-align: center; line-height: 100px; font-size: 20px; color: white;">
         <?php echo $totalFunds; ?>
    </div>

    Total Students <br>
    <div style="width: 100px; height: 100px; background-color: yellow; border-radius: 50%; text-align: center; line-height: 100px; font-size: 20px; color: white;">
         
    </div>



  <div style="width: 20%;margin: -200px auto 0; padding: 10px; border: 3px solid black; float: right;height: 200px;overflow: auto;">
    <!-- Notices will be dynamically added here -->
    <legend align="center"><h2 style="color: orangered;">NOTICE</h2></legend>
    <?php
        // Fetch and display notices from the database
        while($notice = mysqli_fetch_assoc($noticeResults)) {
            echo '<div style="margin-bottom: 10px;">' . $notice['notice'] . '</div>';
        }
    ?>
</div>



</body>
</html>
 