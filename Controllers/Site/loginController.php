<?php
    require_once('../../Models/Site/loginModel.php');
    
    session_start();

    $u_wrong = $p_wrong = '';

    if(isset($_POST['LogIn'])){
        if($_POST['id'] == ''){$u_wrong = 'Please enter username';}
        if($_POST['pass'] == ''){$p_wrong = 'Please enter password';}
        else{
            $access = loginReq($_POST['id'],$_POST['pass']);
        //print_r($r);
            if($access[0]){
                $_SESSION['id'] = $_POST['id'];
                switch($access[1]){
                    case 's': header("location: /Views/Student/home.php"); break;
                    case 't': header("location: /Views/Teacher/home.php"); break;
                    case 'a': header("location: /Views/Admin/admin.php"); break;
                    default: echo 'error'; break;
                }
            }
            else{$p_wrong = 'Incorrect Password';}
        }
    }
?>