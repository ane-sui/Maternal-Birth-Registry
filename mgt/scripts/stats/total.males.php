<?php 
include_once '../../includes/conn.php';

// TOTAL NUMBER OF USERS IN SYTEM 
$stmt =$pdo->prepare( "SELECT * FROM maidens WHERE sex ='Male'");
$stmt->execute();
$male=$stmt->rowCount();