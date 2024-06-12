<?php
session_start();
if(empty($_SESSION))
    {
        header("location: ../login.php");
    }

if(isset($_GET['logout']))
{
    header("location:../login.php");
    session_destroy();
}
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "darussalam";
$conn = new mysqli($servername, $username, $pass, $dbname);

$sql1 = "SELECT * from donators";
$sql5 = "SELECT * from event";
$showAllDonations= mysqli_query($conn, $sql1);
$showAllDonations1= mysqli_query($conn, $sql1);

$message="";
$totalFunds=0;
$searchTransaction = null;

if (isset($_GET['del'])) {
    $SL = $_GET['trx'];
    $sql2 = "DELETE FROM donators WHERE SL='$SL'";
    $deleteTransaction = mysqli_query($conn, $sql2);


   if ($deleteTransaction) {
        $message="Record deleted successfully";
        $showAllDonations= mysqli_query($conn, $sql1);
        header("Location: donations.php");
    exit();
    } else {
        $message="Error deleting record: " . mysqli_error($conn);
    }
}

   if (isset($_GET['ser'])) {
    $SL = mysqli_real_escape_string($conn, $_GET['trx']); // Sanitize user input
    $sql3 = "SELECT * FROM donators WHERE SL='$SL'";
    $searchTransaction = mysqli_query($conn, $sql3);

    if ($searchTransaction) {
        $message = "Search found";
        $searchDonations = $searchTransaction;
    } else {
        $message = "No message found: " . mysqli_error($conn);
    }


}

if (isset($_POST['enterEvent'])) {
    $eventName=$_POST['eventName'];
    $status=$_POST['status'];
    $goal=$_POST['goal'];
    $description=$_POST['description'];
    if($status==1)
    {
        $sql6 = "UPDATE event SET status = 0";
        mysqli_query($conn, $sql6); 
    }
    // Check if any of the fields is empty
        $sql4 = "INSERT INTO event(eventName,status,goal,description)VALUES ('$eventName', '$status', '$goal', '$description')";
        mysqli_query($conn, $sql4);
    
    
}

if(isset($_POST['launch']))
{
    $sql6 = "UPDATE event SET status = 0";
    mysqli_query($conn, $sql6); 
    $eventId = $_POST['launch'];
    $sql6 = "UPDATE event SET status = 1 WHERE eventId = '$eventId'";
    mysqli_query($conn, $sql6); 
    
    header("Location: donations.php");
    exit();

}

if(isset($_POST['deactivate']))
{
    $sql7 = "UPDATE event SET status = 1 WHERE eventId = 0";
    mysqli_query($conn, $sql7); 
    $eventId = $_POST['deactivate'];
    $sql7 = "UPDATE event SET status = 0 WHERE eventId = '$eventId'";
    mysqli_query($conn, $sql7); 
    
    header("Location: donations.php");
    exit();

}




$sql1 = "SELECT SUM(Amount) as total_funds FROM donators";
$showtotalfunds = mysqli_query($conn, $sql1);
$totalFunds = mysqli_fetch_assoc($showtotalfunds)['total_funds'];


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Donations</title>
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
    <br><br>


	<div style="color:goldenrod;font-size: 20px;"><h1><center>DONATIONS</center></h1></div>
    <div style="position: relative; width: 100px; height: 100px; border-radius: 50%; text-align: center; font-size: 20px; color: purple; background-color: lavenderblush; float: right;">
    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
           TOTAL
        <?php echo $totalFunds; ?> /-
    </div>
</div>
<fieldset style="width: 600px;background-color: lavenderblush;">
<details>
       <summary>Create an event</summary>
       <br><br>
    <form method="post" action="donations.php">
    Enter Event Name: <input type="text" name="eventName"><br><br>
    Status:              <input type="number" name="status"><br><br>
    Goal:             <input type="number" name="goal"><br><br>
    Description:      <input type="text" name="description"><br><br>
    <button name="enterEvent">ENTER</button>

    </form>

    </details>
    </fieldset>

    <br><br>
</details> 

<fieldset style="width: 600px;background-color: lavenderblush;">
<details>
    <form method="get" action="donations.php">
        <details>
    <summary>Delete  a transaction</summary>
    Delete a Transaction: <input type="number" name="trx">
    <button name="del">ENTER</button>
    <?php echo $message;?>
    </details>

    <br><br>
</form>
<summary>DELETE TRANSACTION</h4></summary>
    <div style="width: 70%; margin: 0 auto; padding: 20px; border: 3px solid purple; height: 300px;overflow: auto;">
        <!-- Notices will be dynamically added here -->
        <table border="0" color="blue">
            <tr>
                <th>Serial Number</th>
                <th>Email</th>
                <th>Name</th>
                <th>Region</th>
                <th>Amount</th>
                <th>Message</th>

            </tr>
            <tr>
               
            </tr>
            <tr>
            <?php while($show=mysqli_fetch_assoc($showAllDonations)) 
        {?>
            
                <form>
            <tr>
                <td> <?php echo $show['SL'] ?></td>
                <td> <?php echo $show['Email'] ?> </td>
                <td> <?php echo $show['Name'] ?> </td>
                <td> <?php echo $show['Region'] ?> </td>
                <td> <?php echo $show['Amount'] ?> </td>
                <td> <?php echo $show["Email"]; ?> </td>
                <td> <?php echo $show['Message'] ?> </td>
            
           
            </tr>

        <?php } ?>
    </form>
            </tr>
        </table>
</details> 
</fieldset>
 <br><br>


<fieldset style="width: 600px;background-color: lavenderblush;">
<details>
    
<summary>SHOW ALL TRANSACTION HISTORY</h4></summary>
    <div style="width: 70%; margin: 0 auto; padding: 20px; border: 3px solid purple; height: 300px;overflow: auto;">

        <table border="0" color="blue">
            <tr>
                <th>Serial Number</th>
                <th>Email</th>
                <th>Name</th>
                <th>Region</th>
                <th>Amount</th>
                <th>Message</th>

            </tr>
            <tr>
               
            </tr>
            <tr>
            <?php while($show=mysqli_fetch_assoc($showAllDonations1)) 
        {?>
            
                <form>
            <tr>
                <td> <?php echo $show['SL'] ?></td>
                <td> <?php echo $show['Email'] ?> </td>
                <td> <?php echo $show['Name'] ?> </td>
                <td> <?php echo $show['Region'] ?> </td>
                <td> <?php echo $show['Amount'] ?> </td>
                <td> <?php echo $show["Email"]; ?> </td>
                <td> <?php echo $show['Message'] ?> </td>
            
           
            </tr>

        <?php } ?>
    </form>
            </tr>
        </table>
</details>
</fieldset>

<br><br>
<fieldset style="width: 600px; background-color: lavenderblush;">
<details>
    
<summary>SHOW ALL EVENTS HISTORY</h4></summary>
    <div style="width: 70%; margin: 0 auto; padding: 20px; border: 3px solid purple; height:150px;overflow: auto">

        <table border="0" color="blue">
            <tr>
                <th>EVENT ID</th>
                <th> </th>
                <th>EVENT NAME</th>
                <th> </th>
                <th>STATUS</th>
                <th> </th>
                <th>GOAL</th>
                <th> </th>
                <th>DESCRIPTION</th>
               
            </tr>
            <tr>
               
            </tr>
            <tr>
            <?php 
            $showAllEvents= mysqli_query($conn, $sql5);
            while($show=mysqli_fetch_assoc($showAllEvents)) 
        {?>
            
                <form method="post">
             <tr style="background-color: <?php echo $show['status'] == 0  ? 'goldenrod;' : ''; ?>">
                <td> <?php echo $show['eventId'] ?></td>
                <td> </td>
                <td> <?php echo $show['eventName'] ?> </td>
                <td> </td>
                <td> <?php echo $show['status'] ?> </td>
                <td> </td>
                <td> <?php echo $show['goal'] ?> </td>
                <td> </td>
                <td> <?php echo $show['description'] ?> </td>
                <td> </td>
                <td><button type="submit" name="launch" value="<?php echo $show["eventId"]; ?>">LAUNCH</button> </td>
                <td> </td>
                <td><button type="submit" name="deactivate" value="<?php echo $show["eventId"]; ?>">DEACTIVATE</button> </td>
            </tr>

        <?php } ?>
    </form>
            </tr>
        </table>
    </div>
</details>
</fieldset>
<br><br><br>




    <form method="get" action="donations.php">
        <legend><center>Search a Transaction: <input type="number" name="trx">
        <button name="ser">ENTER</button></center></legend>
    </form>
    <br>

    
    <div style="width: 600px; margin: 0 auto; padding: 20px; border: 3px solid purple; height: 50px; overflow: auto;">
        <table border="1" color="blue" width="100%">
            <tr>
                <th>Serial Number</th>
                <th>Email</th>
                <th>Name</th>
                <th>Region</th>
                <th>Amount</th>
                <th>Message</th>
            </tr>
<?php
if ($searchTransaction) {
    while ($show = mysqli_fetch_assoc($searchTransaction)) {
        ?>
        <form>
            <tr>
                <td><?php echo $show['SL'] ?></td>
                <td><?php echo $show['Email'] ?></td>
                <td><?php echo $show['Name'] ?></td>
                <td><?php echo $show['Region'] ?></td>
                <td><?php echo $show['Amount'] ?></td>
                <td><?php echo $show["Email"]; ?></td>
                <td><?php echo $show['Message'] ?></td>
            </tr>
        </form>
        <?php
    }
} else {
    echo "<tr><td colspan='7'>No results found.</td></tr>";
}
?>
        </table>
    </div>
</body>
</html>