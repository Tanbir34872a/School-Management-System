<?php
session_start();
if(empty($_SESSION))
    {
        header("location: ../login.php");
    }

if(isset($_GET['logout']))
{
    header("location: ../login.php");
    session_destroy();
}
$servername = "localhost"; 
$username = "root"; 
$password = "";
$dbname = "darussalam"; 
$conn = new mysqli($servername, $username, $password, $dbname);
$sql1 ="SELECT * FROM grave_yard order by pending desc;";
$result = mysqli_query($conn, $sql1);

$message="";
// Check if the form is submitted
if (isset($_GET['del'])) {
    $C_ID = $_GET['grave'];
    $sql2 = "DELETE FROM grave_yard WHERE C_ID='$C_ID'";
    $deleteGrave = mysqli_query($conn, $sql2);

    // Check if the deletion was successful and provide appropriate message
    if ($deleteGrave) {
        $message = "Grave request deleted successfully";
        header("Location: grave_management.php");
    exit();
    } else {
        $message = "Error deleting grave request: " . mysqli_error($conn);
    }
}




   if(isset($_GET['approve']))
{
    $C_ID = $_GET['approve'];
    $sql2 = "UPDATE grave_yard SET pending = 0,rejected=0,booked=1 WHERE C_ID = '$C_ID'";
    mysqli_query($conn, $sql2); 
    
    header("Location: grave_management.php");
    exit();

}
  if(isset($_GET['rejected']))
{
    $C_ID = $_GET['rejected'];
    $sql2 = "UPDATE grave_yard SET rejected = 1,booked = 0,pending=0 WHERE C_ID = '$C_ID'";
    mysqli_query($conn, $sql2); 
    
    header("Location: grave_management.php");
    exit();

}
 mysqli_query($conn, $sql1);
$sql3 = "SELECT COUNT(*) as total_buried FROM grave_yard WHERE booked = 1";
$showTotalBuried = mysqli_query($conn, $sql3);
$totalBuried = mysqli_fetch_assoc($showTotalBuried)['total_buried'];

 

 
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Grave_Management</title>
</head>
<body>
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


  <div style="position: relative; width: 100px; height: 100px; border-radius: 50%; text-align: center; font-size: 15px; color: purple; background-color: goldenrod; float: right; top: 100px;">
    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
        TOTAL Burried
        <?php echo $totalBuried; ?>
    </div>
</div>

   

    <form method="get" action="grave_management.php">
        Delete a Grave Request: <input type="number" name="grave">
    <button type="submit" name="del">Delete</button>
    <?php echo $message;?>

    <br><br>
</form>

           <summary style="border: 2px solid purple; padding: 2px; background-color: #eddded;"><h4 style="color:darkblue; margin: 0;"><center>Grave Request Grant Permission</center></h4></summary>
    <div style="width: 52%; margin: 0 auto; padding: 10px; border: 3px solid purple; height: 300px;overflow: auto;">
        <table border="0" color="blue">
            <tr>
                <th>C_ID</th>
                <th>NAME</th>
                <th>MOBILE</th>
                <th>REPRESENTATIVE NAME</th>
                <th>EXPIRING DATE</th>
                <th>CHECK BOX</th>
                <th>BOOKED</th>
                <th>REJECTED</th>
                <th>PENDING</th>

            </tr>
            <tr>
               
            </tr>
            <tr>
            <?php while($show=mysqli_fetch_assoc($result)) 
        {?>
            
                <form>
            <tr style="background-color: <?php echo $show['pending'] == 1 ? 'goldenrod;' : ''; ?>">
                <td> <?php echo $show['C_ID'] ?></td>
                <td> <?php echo $show['Name'] ?> </td>
                <td> <?php echo $show['mobile'] ?> </td>
                <td> <?php echo $show['Representative_name'] ?> </td>
                <td> <?php echo $show['Expiring_date'] ?> </td>
                <td> <?php echo $show["checkbox"]; ?> </td>
                <td> <?php echo $show['booked'] ?> </td>
                 <td> <?php echo $show['rejected'] ?> </td>
                  <td> <?php echo $show['pending'] ?> </td>
                     <td><button type="submit" name="approve" value="<?php echo $show["C_ID"]; ?>">APPOVE</button> </td>
                     <td><button type="submit" name="rejected" value="<?php echo $show["C_ID"]; ?>">REJECT</button> </td>
            
           
            </tr>

        <?php } ?>
    </form>
            </tr>

        </table>
    </div>




</body>
</html>