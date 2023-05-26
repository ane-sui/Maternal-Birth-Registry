<?php 
include_once '../../includes/conn.php';

// TOTAL NUMBER OF USERS IN SYTEM 
$stmt =$pdo->prepare( "SELECT * FROM maidens WHERE birthOutcome ='live'");
$stmt->execute();
$live=$stmt->rowCount();

