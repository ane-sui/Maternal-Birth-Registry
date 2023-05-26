<?php
include_once 'layout.view.php';
include('includes/functions.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Landing Page </title>
</head>
<body>
    <header id="showcase">
    <h1>GOKWE SOUTH DISTRICT HOSPITAL</h1>
        <p class=" text-center p-5">
            <a href="login.view.php" class=" btn btn-success button">MIDWIFE-NURSE</a> 
            <a href="admin/views/login.view.php" class="btn btn-danger button">SYSTEM-ADMINISTRATOR</a> 
            <a href="mgt/mgt-login.php" class="btn btn-secondary button">MANAGEMENT</a> 
        </p> 

    </header>
    
<?php include_once 'footer.php';?>