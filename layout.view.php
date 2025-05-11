<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<body >
<?php if (isset($_SESSION['email'])):?>
<!-- Navigation   -->
<header>
    <nav  class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container">
            <a href="home.php" class="navbar-brand">MATERNAL BIRTH REGISTRY SYSTEM</a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="view_patients.php" class="nav-link">Patients</a>
                </li> 
                <li class="nav-item">
                    <a href="bcletter.php" class="nav-link">Birth Confirmation Letter</a>
                </li> 
                <li class="nav-item">
                    <a href="profile.php" class="nav-link">User Profile</a>
                </li>
                

                <li class="nav-item">
                    <a href="adv-search.php" class="nav-link">Advanced Search</a>
                </li>
                
                <li class="nav-item">
                    <a href="includes/logout.inc.php" class="nav-link">Logout</a>
                </li> 
            </ul>
        </div>
    </nav>
<?php endif;?>
<?php if (!isset($_SESSION['email'])):?>
<nav  class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container">
        <a href="index.php" class="navbar-brand">MATERNAL BIRTH REGISTRY SYSTEM</a>
        <ul class="navbar-nav">
            <!-- <li class="nav-item">
                <a href="signup.view.php" class="nav-link">Register</a>
            </li>  -->
            <!-- <li class="nav-item">
                <a href="articles.php" class="nav-link">Departments</a>
            </li>
            <li class="nav-item">
                <a href="about.php" class="nav-link">About</a>
            </li>
        -->
            <!-- <li class="nav-item">
                <a href="admin/views/login.view.php" class="nav-link">Admin</a>
            </li>
  -->
        </ul>
    </div>
    </nav>
    <?php endif;?>
    <?php if (isset($_SESSION['a_email'])):?>
    <nav  class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container">
            <a href="" class="navbar-brand">ADMIN DASHBOARD | MATERNAL BIRTH REGISTRY SYSTEM </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="admin/users.php" class="nav-link"> <em>Users</em></a>
                </li> 
                <li class="nav-item">
                    <a href=".php" class="nav-link"> <em></em></a>
                </li> 
            </ul>
        </div>
    </nav>
    <?php endif;?>
</header>