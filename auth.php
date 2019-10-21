<?php 
//เช็คผู้ใช้ที่ login เช้ามา
    session_start();
    if(!isset($_SESSION['username'])) {
        header("Location: login.php");
        exit();
    }

?>