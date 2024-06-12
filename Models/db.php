<?php 
    function conn(){
        $servername = "localhost";
        $username = "root";
        $pass = "";
        $dbname = "darussalam";
        $conn = new mysqli($servername, $username, $pass, $dbname);
        return $conn;
    }
?>