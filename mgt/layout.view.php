<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body >
<?php if (isset($_SESSION['email'])):?>
<header>
    <nav  class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container">
            <a href="index.php" class="navbar-brand">MATERNAL BIRTH REGISTRY SYSTEM</a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="views/reports.php" class="nav-link">Reports</a>
                </li> 
                <li class="nav-item">
                    <a href="views/patients.php" class="nav-link">Patients</a>
                </li> 
                <li class="nav-item">
                    <a href="visuals.php" class="nav-link">Data Visualization</a>
                </li> 
                <li class="nav-item">
                    <a href="#" class="nav-link"><?=$_SESSION['name']." ".$_SESSION['surname']?></a>
                </li>
                <li class="nav-item">
                    <a href="../inc/logout.inc.php" class="nav-link">Logout</a>
                </li> 
            </ul>
        </div>
    </nav>
<?php endif;?>
</header>
<!-- <?php if (!isset($_SESSION['email'])):?>
<header>
    <nav  class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container">
            <a href="index.php" class="navbar-brand">MATERNAL BIRTH REGISTRY SYSTEM</a>
            <ul class="navbar-nav">
                <!-- <li class="nav-item">
                    <a href="search.view.php" class="nav-link">Search</a>
                </li> -->
                <!-- <li class="nav-item">
                    <a href="views/reports.php" class="nav-link">Reports</a>
                </li> 
                <li class="nav-item">
                    <a href="patients.php" class="nav-link">Patients</a>
                </li> 
                <li class="nav-item">
                    <a href="visuals.php" class="nav-link">Data Visualization</a>
                </li> 
                <li class="nav-item">
                    <a href="#" class="nav-link"><?=$_SESSION['name']." ".$_SESSION['surname']?></a>
                </li> -->
                <!-- <li class="nav-item">
                    <a href="../inc/logout.inc.php" class="nav-link">Logout</a>
                </li>  -->
            </ul>
        </div>
    </nav>
<?php endif;?>
</header> -->