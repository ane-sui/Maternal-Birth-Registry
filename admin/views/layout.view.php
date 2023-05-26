<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
<title>Add Management</title>
</head>
<body>
<!-- Navigation   -->
    <nav  class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container">
            <a href="home.view.php" class="navbar-brand"> Admin Dashboard </a>
                <ul class="navbar-nav">
                <?php if (isset($_SESSION['email'])):?>
                    <li class="nav-item">
                        <a href="users.view.php" class="nav-link">User requests</a>
                    </li> 
                    <li class="nav-item">
                        <a href="reg.admin.php" class="nav-link">Add Admin</a>
                    </li> 
                    <li class="nav-item">
                        <a href="reg-mgt.php" class="nav-link">Add Management</a>
                    </li> 
                    <!-- <li class="nav-item">
                        <a href="requests.view.php" class="nav-link"> <em><?=$_SESSION['email']?></em></a>
                    </li>  -->
                    <li class="nav-item">
                        <a href="../../includes/logout.inc.php" class="nav-link"> <em> Logout </em></a>
                    </li> 
                    <?php endif;?>
                </ul>
        </div>
    </nav>
