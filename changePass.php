<?php
    session_start();

    $conn = new mysqli('localhost', 'root', '', 'darussalam');
    
    $oldPassWrong = '';
    $newPassWrong = '';
    $conPassWrong = '';

    if(empty($_SESSION)){
        header("location: ../login.php");
    }

    if(isset($_POST['ChangePassword'])){
        $user_id = $_SESSION['id'];
        $old_pass = $_POST['old_pass'];
        $new_pass = $_POST['new_pass'];
        $confirm_pass = $_POST['confirm_pass'];

        // Check if fields are empty
        if(empty($old_pass) || empty($new_pass) || empty($confirm_pass)) {
            $conPassWrong = 'Fill all Fields';
        } else {
            // Check if the old password is correct
            $oldPass = "SELECT * FROM login WHERE id = '$user_id' AND pass = '$old_pass'";
            $oldPassRes = mysqli_num_rows(mysqli_query($conn, $oldPass));

            if($oldPassRes == 1) {
                // Validation for new password
                if(strlen($new_pass) < 8 || !preg_match("/[a-z]/", $new_pass) || !preg_match("/[A-Z]/", $new_pass) || !preg_match("/[0-9]/", $new_pass) || !preg_match("/[!@#$%^&*()-_=+{};:,<.>]/", $new_pass)) {
                    $newPassWrong = 'New password must be at least 8 characters long and include at least 1 uppercase letter, 1 lowercase letter, 1 number, and 1 special character.';
                }

                // Check if the new password and confirm password match
                if($new_pass != $confirm_pass) {
                    $conPassWrong = 'Confirm password does not match the new password.';
                }

                // Update the password in the database if validation passes
                if(empty($newPassWrong) && empty($conPassWrong)){
                    // Update the password in the database (without hashing for now)
                    $update_sql = "UPDATE login SET pass = '$new_pass' WHERE id = '$user_id'";
                    $update_result = mysqli_query($conn, $update_sql);

                    if($update_result) {
                        // Password updated successfully
                        echo "<a href='login.php'>Password updated successfully. Click me to go back</a>";
                    } else {
                        // Handle database update failure
                        echo "Error updating password. Please try again.";
                    }
                }
            } else {
                $oldPassWrong = 'Incorrect old password.';
            }
        }
    }
?>

<!doctype html>
<html>
<head>
    <title>Change Password</title>
    <link rel="icon"  href="media\logo-darussalam.png" type="image/x-icon">
    <style>
        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body style="background-color:#EDDDED;">
    <center>
        <fieldset style="width: 30%; border: 5px #800080 solid; position:relative; top:200px; background-color: #FFFFFF;">
            <h1>Change Password</h1>
            <form method="post">
                <input style="font-size: 20px; width: 300px;" type="password" name="old_pass" placeholder="Old Password">
                <br><span style="color:#FF0000;"><?php echo $oldPassWrong?></span>

                <br><input style="font-size: 20px; width: 300px;" type="password" name="new_pass" placeholder="New Password">
                <br><span style="color:#FF0000;"><?php echo $newPassWrong?></span>

                <br><input style="font-size: 20px; width: 300px;" type="password" name="confirm_pass" placeholder="Confirm New Password">
                <br><span style="color:#FF0000;"><?php echo $conPassWrong?></span>

                <br><button style="font-size: 20px; width: 310px; background-color: #800080; color:#FFFFFF;" type="submit" name="ChangePassword">Change Password</button><br><br>
            </form>
        </fieldset>
    </center>
</body>
</html>
