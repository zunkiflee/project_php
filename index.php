<?php 
    //include auth.php file on all secure pages
    include('auth.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Weclome Home</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="form">
        <p>Welcome <?php echo $_SESSION['username']; ?>!</p> <!-- แสดงชื่อผู้ใช้ -->
        <p>This is homepage and secure area.</p>
        <p><a href="dashboard.php">Dashboard</a></p> <!-- แสดงชื่อผู้ใช้ -->
        <a href="login.php">Logout</a> <!-- ออกจากระบบ -->
    </div>
</body>
</html>
