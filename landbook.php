<?php
session_start();
$token = uniqid();
if (!isset($_SESSION['form_tokens'])) 
{
    $_SESSION['form_tokens'] = [];
}
$_SESSION['form_tokens'][] = $token;
$resultSession = 0;
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "darussalam";
$conn = new mysqli($servername, $username, $password, $dbname);
$cookie_value="purple";
$savebox = "";
$numRows = 22;
$numCols = 30;
$cookie_name = "cookie_name";
$session_name="Guest";
$nameError="";
$dateError="";
$mobileError="";
$mobileeError="";
$approvedList = array();
$pendingList = array();
$rejectedList = array();
$cookieList = array();
for ($row = 0; $row < $numRows; $row++) 
{
    for ($col = 0; $col < $numCols; $col++) 
    {
        $approvedList[$row][$col] = "";
        $pendingList[$row][$col] = "";
        $rejectedList[$row][$col] = "";
        $cookieList[$row][$col] = "";
    }
}

if (isset($_POST['checkup'])) 
{
    $mobileeE = $_POST['checkMobile'];
    if (empty($mobileeE)) 
    {
        $mobileeError = "Mobile number is required";
    }
}

if (isset($_POST["checkup"]) && $_POST['checkMobile'] != "")
{
     $_SESSION['on'] = $_POST['checkMobile'];
}
if (isset($_SESSION['on']))
{
    $mobile = $_SESSION['on'];
    // Query the database to fetch the relevant data
    $sql = "SELECT C_ID, name, checkbox, booked, rejected, pending FROM grave_yard WHERE mobile = '$mobile'";
    $resultSession1 = ($conn->query($sql));

    if ($resultSession1->num_rows > 0)
    {
        while ($rowSession = mysqli_fetch_assoc($resultSession1))
        {
            $_SESSION['C_ID'] = $rowSession["C_ID"];
            $_SESSION['name'] = $rowSession["name"];
            $_SESSION['booked'] = $rowSession["booked"];
            $_SESSION['rejected'] = $rowSession["rejected"];
            $_SESSION['pending'] = $rowSession["pending"];
            $_SESSION['mobile'] = $mobile;
            $buttonId = $rowSession["checkbox"];
            list($_, $row, $col) = explode('_', $buttonId);
            if ($row >= 0 && $row < $numRows && $col >= 0 && $col < $numCols && $rowSession["booked"] == 1 && $rowSession["rejected"]==0 && $rowSession["pending"] != 1)
            {
                $approvedList[$row][$col] = $buttonId;
            }
             if ($row >= 0 && $row < $numRows && $col >= 0 && $col < $numCols && $rowSession["pending"] == 1 && $rowSession["booked"] == 1)
            {
                $pendingList[$row][$col] = $buttonId;
            }
             if ($row >= 0 && $row < $numRows && $col >= 0 && $col < $numCols && $rowSession["booked"] == 0 && $rowSession["rejected"]==1)
            {
                $rejectedList[$row][$col] = $buttonId;
            }
        }
    }
    else
    {
        $resultSession = 1;
    }
}

if (isset($_POST["session_del"]))
{
    session_unset();
    session_destroy();
    for ($row = 0; $row < $numRows; $row++) 
    {
        for ($col = 0; $col < $numCols; $col++) 
        {
            $approvedList[$row][$col] = "";
            $pendingList[$row][$col] = "";
            $rejectedList[$row][$col] = "";
        }
    }
}

//cookie starts here
if (isset($_POST['cookie_save']))
{
    for ($row = 0; $row < $numRows; $row++)
    {
        for ($col = 0; $col < $numCols; $col++)
        {
            $buttonId = "land_${row}_${col}";
            list($__, $rowc, $colc) = explode('_', $buttonId);
            if (isset($_POST[$buttonId]))
            {
                list($_, $rowc, $colc) = explode('_', $buttonId);

                if ($rowc >= 0 && $rowc < $numRows && $colc >= 0 && $colc < $numCols)
                {
                    $cookieList[$rowc][$colc] = $buttonId;
                }
                $cookie_name = "cookie_name";
                $savebox= $buttonId;
                //echo $buttonId;
                $cookie_value = "darkcyan";
                setcookie($cookie_name, $cookie_value, time() + 15);
            }
        }
    }
}
if (isset($_POST["cookie_del"]))
{
    $cookie_value="purple";
    setcookie("cookie_name","", time() -3600);
}?>

<!DOCTYPE html>
<html>
<head>
    <title>Book Landmarks - Darussalam</title>
    <link rel="icon" href="media\logo-darussalam.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        .menu-table 
        {
            width: 100%;
            border: 0;
            border-collapse: collapse;
        }

        .menu-row 
        {
            background-color: purple;
        }

        .menu-button 
        {
            text-decoration: none;
            color: white;
            padding: 9px 20px;
            background: purple;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
            display: inline-block;
            text-align: center;
        }

        .menu-button: 
        {
            background: #b319a6;
            padding: auto;
        }

        label 
        {
            font-size: 1rem;
        }

        .error 
        {
            font-size: 11px;
            color: red;
        }

        legend 
        {
            color: purple;
        }

        body 
        {
            background color: purple;
            background: #f5f5f5;
            font-family: Arial, sans-serif;
        }

        .custom-button 
        {
            color: purple;
            padding: 0 10px 0px 10px;
            animation: border-color-change 5s infinite;
            border-radius: 20px;
            cursor: pointer;
        }

        input[type="submit"]:hover 
        {
            text-decoration-color: white;
            background: #b319a6;
        }

        input[type="text"],
        input[type="email"],
        input[type="number"],
        textarea 
        {
            width: 60%;
            padding: 10px;
            margin-top: 5px;
        }


        input[type="submit"] 
        {
            background: purple;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }

        input[type="button"] 
        {
            background: purple;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }

        fieldset 
        {
            border: 1.8px solid white;
            border-radius: 7px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            animation: border-color-change 5s infinite;
            background-color: white;
        }


        @keyframes border-color-change 
        {
            0% { border-color: rgb(255, 0, 0);}

            25% { border-color: rgb(0, 255, 0);}

            50% { border-color: rgb(0, 0, 255);}

            75% { border-color: rgb(255, 255, 0);}

            100% { border-color: rgb(255, 0, 255);}
        }

        .green-text {
            color: forestgreen;
            font-weight: bold;
        }

        .hidden-checkbox {
            display: none;
        }

        .approved-checkbox {
            display: none;
        }

        .pending-checkbox {
            display: none;
        }

        .color-button {
            width: 15px;
            height: 20px;
            cursor: pointer;
            border: 1px solid #ccc;
            background-color: lightgray;
            display: block;
            position: relative;
        }

        .color-button:hover 
        {
            background-color: dimgray;
        }

        .colorappv-button 
        {
            width: 15px;
            height: 20px;
            cursor: pointer;
            border: 1px solid #ccc;
            background-color: lightgray;
            display: block;
            position: relative;
        }

        .colorpending-button 
        {
            width: 15px;
            height: 20px;
            cursor: pointer;
            border: 1px solid #ccc;
            background-color: lightgray;
            display: block;
            position: relative;
        }

        .red-text 
        {
            color: red;
            font-weight: bold;
        }

        .purple-text 
        {
            color: purple;
            font-weight: bold;
        }

        .hidden-checkbox:checked + .color-button 
        {
            background-color: <?php echo $cookie_value;?>;
        }

        .hidden-checkbox:disabled + .color-button {
            background-color: indianred;
        }

        .approved-checkbox:checked + .colorappv-button {
            background-color: green;
        }

        .approved-checkbox:disabled + .colorappv-button {
            background-color: green;
        }

        .pending-checkbox:checked + .colorpending-button {
            background-color: gold;
        }

        .pending-checkbox:disabled + .colorpending-button {
            background-color: gold;
        }

        table 
        {
            border-collapse: collapse;
            margin: 0 auto;
        }

        td {
            padding: 3px;
        }

        .color-box 
        {
            display: inline-block;
            width: 15px;
            height: 20px;
            margin-right: 10px;
        }

        .lightgray { background-color: lightgray;}

        .yellow { background-color: gold;}

        .cyan { background-color: darkcyan;}

        .darkgreen { background-color: green;}

        .purple { background-color: purple;}

        .indianred { background-color: indianred;}

        .red { background-color: red;}

        .color-container 
        {
            text-align: center;
            margin: 20px;
        }

        .menu-table 
        {
            width: 100%;
            border: 0;
            border-collapse: collapse;
            row
        }

        .menu-row 
        {
            background-color: purple;
            border-collapse: collapse;
        }

        .menu-button 
        {
            text-decoration: none;
            color: white;
            padding: 9px 20px;
            background: purple;
            border: none;
            border-radius: 0px;
            cursor: pointer;
            transition: background 0.3s;
            display: inline-block;
            text-align: center;
        }

        .menu-button:hover 
        {
            background: #b319a6;
            padding: auto;
        }

        .logo-container 
        {
            width: 126px; 
            height: 89px;
            border-radius: 0%; 
            background-color: purple;
            position: absolute;
            top: 48%;
            left: 50%;
            transform: translate(-50%, -50%); 
            transition: box-shadow 0.5s ease-in-out;
            box-shadow: 0 0 20px purple;
        }

        .logo-container:hover { box-shadow: 0 0 20px white;}

        .round-logo 
        {
            width: 124px; 
            height: 87px;
            border-radius: 0%; 
            position: absolute;
            top: 49%;
            left: 50%;
            transform: translate(-50%, -50%); 
            z-index: 2;
        }

        input[type="date"] 
        {
            width: auto;
            padding: 10px;
            margin-top: 5px;
        }

        ::-webkit-scrollbar 
        {
            width: 10px;
        }

        ::-webkit-scrollbar-track 
        {
            box-shadow: inset 0 0 2px grey;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb 
        {
            background: purple;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover 
        {
            background: #b319a6;
        }

    </style>
</head>
<body>
    <table width="100%" height="7px" border="collapse" class="menu-table">
        <tr>
            <td colspan="9" style="position: relative;">
                <video width="100%" height="90px" style="object-fit: cover;" autoplay loop muted>
                    <source src="media\landingpagevideo.mp4" type="video/mp4">
                </video>
                <div class="logo-container">
                    <a href="landing.php">
                        <img src="media\logo-darussalam.png" class="round-logo">
                    </a>
                </div>

            </td>
        </tr>
        <tr class="menu-row">
            <td width="11.1111%" align="center">
                <a href="landing.php" class="menu-button">
                    <b><i class="fa-solid fa-house" style=" margin-right: 5px;"></i>HOME</b>
                </a>

                <a href="donation.php" class="menu-button"><b><i class="fa-solid fa-circle-dollar-to-slot" style=" margin-right: 5px;"></i>DONATE</b></a>
                <a href="#" class="menu-button"><b><i class="fa-solid fa-book" style=" margin-right: 5px;"></i>LIBRARY</b></a>
                <a href="landbook.php" class="menu-button"><b><i class="fa-solid fa-ticket" style=" margin-right: 5px;"></i>GRAVE</b></a>
                <a href="#" class="menu-button"><b><i class="fa-solid fa-bullhorn" style=" margin-right: 5px;"></i>MAHFIL</b></a>
                <a href="admin/admin.php" class="menu-button"><b><i class="fa-solid fa-user-tie" style=" margin-right: 5px;"></i>TRUSTEE</b></a>
                <a href="#" class="menu-button"><b><i class="fa-solid fa-clock-rotate-left" style=" margin-right: 5px;"></i>HISTORY</b></a>
                <a href="login.php" class="menu-button"><b><i class="fa-solid fa-user" style=" margin-right: 5px;"></i>LOGIN</b></a>
                <a href="apply.php" class="menu-button"><b><i class="fa-solid fa-user-plus" style=" margin-right: 5px;"></i>Apply Now</a>
            </td>
        </tr>
    </table>
    <fieldset style="border: 0px"><h1 style="color: purple; text-align: center;">Fill out the Application form below to apply for a new Booking!</h1>
    <div class="color-container">
        <div class="color-box lightgray"></div><label>Choosable</label>
        <div class="color-box indianred"></div><label>Occupied </label>
        <div class="color-box purple"></div><label>Selected </label>
        <div class="color-box cyan"></div><label>Saved choice </label>
        <div class="color-box darkgreen"></div><label>Approved </label>
        <div class="color-box yellow"></div><label>Pending </label>
    </div>
    </fieldset>

    <h5 style="color: solid black; text-align: center;"><marquee behavior="scroll" direction="left" width="80%">To enhance accessibility, transparency, and convenience, we have transitioned our services online. This move is in response to the increasing number of requests and the complexities associated with documentation and authorization.</marquee></h5>
    <br>
    <form method="post">
        <table border="0" style="width: auto;">
            <tr>
                <th>
                    <label for="checkMobile">To check the status of your Application enter the applicant's Mobile Number: </label>
                    <input type="text" name="checkMobile" pattern="01[3-9]\d{8}" maxlength="11" placeholder="Enter your Bangladeshi Mobile Number (e.g., 01XXXXXXXXX)"title="Please enter a valid Bangladeshi mobile number">
                    <input type="submit" name="checkup" value="Check for Update"><br>
                    <span class="error"><?php echo $mobileeError; ?></span><input type="hidden" name="token" value="<?php echo $token; ?>"><br>
                </th>
                <th>
                    <fieldset style="width: auto; max-width: 90%; display: inline-block; text-align: right;">
                        ٱلسَّلَامُ عَلَيْكُمْ,
                        <?php
                        if (isset($_SESSION['on']) && $resultSession != 1 )
                        {
                            echo $_SESSION['name'] ;
                        }
                        else
                        {
                            echo "Ikhwan!" ;
                        }?>
                    </fieldset>
                </th>
            </tr>
            <tr>
                <td>
                    <table border="0" style="color: purple;">
                        <tr>
                            <?php
                            if (isset($_POST["submit"]))
                            {
                                $selectedCheckboxes = array();
                                for ($row = 0; $row < $numRows; $row++) 
                                {
                                    echo '<tr>';
                                    for ($col = 0; $col < $numCols; $col++) 
                                    {
                                        $buttonId = "land_${row}_${col}";
                                        if (isset($_POST[$buttonId]))
                                        {
                                            $selectedCheckboxes[] = $buttonId;
                                        }
                                    }
                                    echo '</tr>';
                                }
                                $name = $_POST['name'];
                                $name = $_POST['name'];
                                $Representative_name = "Self";
                                $expiringDate = $_POST["expiring_date"];
                                $formattedDate = date('Y-m-d', strtotime($expiringDate));
                                $mobile= $_POST['mobile'];

                                if (empty($name))
                                {
                                    $nameError = "Name is required";
                                }

                                if (empty($mobile)) 
                                {
                                    $mobileError = "Mobile Number is required";
                                }

                                if (empty($expiringDate)) 
                                {
                                    $dateError = "Date is required";
                                }

                                if (empty($nameError) && empty($emailError) && empty($mobileError) && empty($amountError))
                                {
                                    $submittedToken = $_POST['token'];
                                    if (in_array($submittedToken, $_SESSION['form_tokens']))
                                    {    
                                        if (is_array($selectedCheckboxes) && !empty($selectedCheckboxes))
                                        {
                                            foreach ($selectedCheckboxes as $checkbox)
                                            {
                                                $sql = "INSERT INTO grave_yard (Name, mobile, Representative_name, Expiring_date, checkbox, booked, rejected, pending) VALUES ('$name',  $mobile, '$Representative_name', '$formattedDate', '$checkbox', 1,0,1)";
                                                $conn->query($sql);
                                            }

                                            echo '<p><b><span class="green-text">Apllication sent Successfully, </span></b>for the Selected Landmark: <b><span class="purple-text">';
                                            echo implode(", ", $selectedCheckboxes);
                                            echo "</b></span>!</p>";
                                            $_SESSION['form_tokens'] = array_diff($_SESSION['form_tokens'], [$submittedToken]);
                                        }
                                    }
                                    else { echo '<span class="red-text">No Landmark selected!</span>'; }
                                }
                        }

                        if(!isset(($_COOKIE['cookie_name'])))
                        {
                            $cookie_value="purple";
                            for ($row = 0; $row < $numRows; $row++) 
                            {
                                for ($col = 0; $col < $numCols; $col++) 
                                {
                                    $cookieList[$row][$col] = "";
                                }
                            }
                        }

                        /*LandMark Generator*/
                        for ($row = 0; $row < $numRows; $row++)
                        {
                            echo '<tr>';
                            for ($col = 0; $col < $numCols; $col++)
                            {
                                $buttonId = "land_${row}_${col}";
                                $sql = "SELECT booked FROM grave_yard WHERE checkbox = '$buttonId' AND booked = 1;";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {$disabled = true;}
                                else { $disabled = false;}

                                if( $cookieList[$row][$col] == $buttonId  )
                                {
                                    echo "<td>";
                                    echo "<input type='checkbox' name='$buttonId' id='$buttonId' class='hidden-checkbox' " . ($disabled ? 'disabled' : '') . " checked>";
                                    echo "<label for='$buttonId' class='color-button'></label>";
                                    echo "</td>";
                                }

                                if(isset($_SESSION['on']) && $approvedList[$row][$col] == $buttonId )
                                {
                                    echo "<td>";
                                    echo "<input type='checkbox' name='$buttonId' id='$buttonId' class='approved-checkbox' " . ($disabled ? 'disabled' : '') . ">";
                                    echo "<label for='$buttonId' class='colorappv-button'></label>";
                                    echo "</td>";

                                }

                                if( isset($_SESSION['on']) && $pendingList[$row][$col] == $buttonId )
                                {
                                    echo "<td>";
                                    echo "<input type='checkbox' name='$buttonId' id='$buttonId' class='pending-checkbox' " . ($disabled ? 'disabled' : '') . ">";
                                    echo "<label for='$buttonId' class='colorpending-button'></label>";
                                    echo "</td>";
                                }

                                else if($cookieList[$row][$col] != $buttonId && $approvedList[$row][$col] != $buttonId && $pendingList[$row][$col] != $buttonId)
                                {
                                    echo "<td>";
                                    echo "<input type='checkbox' name='$buttonId' id='$buttonId' class='hidden-checkbox' " . ($disabled ? 'disabled' : '') . ">";
                                    echo "<label for='$buttonId' class='color-button'></label>";
                                    echo "</td>";
                                }
                            }
                            echo '</tr>';
                        }?>
                    </tr>
                </td>
            </tr>
        </table>
        <td>
            <fieldset style="width: auto; height: auto;">
                <?php
                if (isset($_SESSION['on']) && $resultSession != 1 )
                {
                    echo '<h2 style="color: #7b7805; "><hr>User Information<hr></h2><b>';
                    echo  "Application ID:".$_SESSION['C_ID'] .'<br><hr width="50%">';
                    echo  "Name:".$_SESSION['name'] . '<br><hr width="50%">';
                    echo ' <table border="2">
                        <tr><th>';
                            echo '<b>Applied Landmark</b>
                            </th><b>
                            <th>Status</b></th>
                        </tr>';

                    $sessionMobile = $_SESSION['mobile'];

                    for ($row = 0; $row < $numRows; $row++)
                    {
                        for ($col = 0; $col < $numCols; $col++)
                        {
                            if($approvedList[$row][$col] != "")
                                {
                                    $btn = $approvedList[$row][$col];
                                    $sql2 = "SELECT booked, rejected, pending FROM grave_yard WHERE checkbox = '$btn' AND mobile = '$sessionMobile'";
                                    $result2 = $conn->query($sql2);
                                    if ($result2->num_rows > 0) 
                                    {
                                        $row2 = mysqli_fetch_assoc($result2);
                                        $status = '';
                                        if ($row2['booked'] == 1 && $row2['pending'] != 1)
                                        {
                                            echo '<tr>';
                                            echo '<td>' . $approvedList[$row][$col] . '</td>';
                                            echo '<td><h4 style="color: green; display: inline;">Approved!</h4></td>';
                                            echo '</tr>';
                                        }   
                                        elseif ($row2['rejected'] == 1)
                                        {
                                            echo '<tr>';
                                            echo '<td>' . $approvedList[$row][$col] . '</td>';
                                            echo '<td><h4 style="color: red; display: inline;">Rejected!</h4></td>';
                                            echo '</tr>';
                                        }
                                        elseif ($row2['pending'] == 1)
                                        {
                                            echo '<tr>';
                                            echo '<td>' . $approvedList[$row][$col] . '</td>';
                                            echo 'td><h4 style="color: yellow; display: inline;">Pending!</h4></td>';
                                            echo '</tr>';
                                        }
                                    }
                                }
                            else if($pendingList[$row][$col] != "")
                            {
                                $btn = $pendingList[$row][$col];
                                $sql2 = "SELECT booked, rejected, pending FROM grave_yard WHERE checkbox = '$btn' AND mobile = '$sessionMobile'";
                                $result2 = $conn->query($sql2);
                                if ($result2->num_rows > 0)
                                {
                                    $row2 = mysqli_fetch_assoc($result2);
                                    $status = '';
                                    if ($row2['booked'] == 1 && $row2['pending'] != 1)
                                    {
                                        echo '<tr>';
                                        echo '<td>' . $pendingList[$row][$col] . '</td>';
                                        echo '<td><h4 style="color: green; display: inline;">Approved!</h4></td>';
                                        echo '</tr>';
                                    }
                                    elseif ($row2['rejected'] == 1)
                                    {
                                        echo '<tr>';
                                        echo '<td>' . $pendingList[$row][$col] . '</td>';
                                        echo '<td><h4 style="color: red; display: inline;">Rejected!</h4></td>';
                                        echo '</tr>';
                                    }
                                    elseif ($row2['pending'] == 1)
                                    {
                                        echo '<tr>';
                                        echo '<td>' . $pendingList[$row][$col] . '</td>';
                                        echo '<td><h4 style="color: gold; display: inline;">Pending!</h4></td>';
                                        echo '</tr>';
                                    }
                                }
                            }
                            else if($rejectedList[$row][$col] != "")
                            {
                                $btn = $rejectedList[$row][$col];
                                $sql2 = "SELECT booked, rejected, pending FROM grave_yard WHERE checkbox = '$btn' AND mobile = '$sessionMobile'";
                                $result2 = $conn->query($sql2);
                                if ($result2->num_rows > 0)
                                {
                                    $row2 = mysqli_fetch_assoc($result2);
                                    $status = '';
                                    if ($row2['booked'] == 1 && $row2['pending'] != 1)
                                    {
                                        echo '<tr>';
                                        echo '<td>' . $rejectedList[$row][$col] . '</td>';
                                        echo '<td><h4 style="color: green; display: inline;">Approved!</h4></td>';
                                        echo '</tr>';
                                    }
                                    elseif ($row2['rejected'] == 1)
                                    {
                                        echo '<tr>';
                                        echo '<td>' . $rejectedList[$row][$col] . '</td>';
                                        echo '<td><h4 style="color: red; display: inline;">Rejected!</h4></td>';
                                        echo '</tr>';
                                    }
                                    elseif ($row2['pending'] == 1)
                                    {
                                        echo '<tr>';
                                        echo '<td>' . $rejectedList[$row][$col] . '</td>';
                                        echo '<td><h4 style="color: yellow; display: inline;">Pending!</h4></td>';
                                        echo '</tr>';
                                    }
                                }
                            }
                        }
                    }
                    echo '</table><br>';
                    echo '<input type="submit" name="session_del" value="Log Out">';
                }

                if (isset($_SESSION['on']) && $resultSession == 1 )
                {
                    echo '<h1 style="color: red;">No Information Found!</h1>';
                }?>
                <hr>
                <h2 style="color: #7b7805;"> Aplication Form </h2><hr>
                <label for="name"><b>Name: </b></label><input type="text" name="name" style="width:auto;" placeholder="Enter your Name"><span class="error"><?php echo $nameError; ?></span><br><br>
                <label for="name"><b>Mobile: </b></label>
                <input type="text" name="mobile" pattern="01[3-9]\d{8}" maxlength="11" placeholder="Enter your Bangladeshi Mobile Number (e.g., 01XXXXXXXXX)"title="Please enter a valid Bangladeshi mobile number" style="width:auto;"><span class="error"><?php echo $mobileError; ?></span><br><br>
                <b>Expiring Date: </b><input type="date" name="expiring_date"><span class="error"><?php echo $dateError; ?></span><br><br> <br>
                <input type="submit" name="submit" value="Confirm Selection">
                <input type="submit" name="cookie_save" value="Save choice & Refresh">
                <input type="submit" name="cookie_del" value="Clear Cookies"><br> <br>
            </fieldset>
        </td>
        </table>
    </form>
</body>
</html>