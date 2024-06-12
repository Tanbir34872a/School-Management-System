<?php 
    require_once('..\..\Models\db.php');

    function loginReq($id,$pass){
        $sql1 = "select * from login where id = '$id' AND pass = '$pass';";
        $r = mysqli_query(conn(), $sql1);
        if(mysqli_num_rows($r) == 1){
            return array(true, mysqli_fetch_assoc($r)['class']);    
        }
        else{return array(false, '');}
    }
?>