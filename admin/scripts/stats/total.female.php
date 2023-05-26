<?php 
include_once '../../includes/conn.php';

// TOTAL NUMBER OF USERS IN SYTEM 
$stmt =$pdo->prepare( "SELECT * FROM maidens WHERE sex ='Female'");
$stmt->execute();
$female=$stmt->rowCount();