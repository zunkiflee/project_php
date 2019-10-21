<?php 
// เอาข้อมูลจาก auth.php and db
require('db.php');
include('auth.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="form">
        <p>Dashboard</p>
        <p>This is Dashboard and secure area.</p>
        <p><a href="index.php">HOME</a></p> <!-- ไปหน้า index.php -->
        <a href="logout.php">Logout</a> 
    </div>  
</body>
</html>