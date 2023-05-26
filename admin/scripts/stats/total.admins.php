<?php 
include_once '../../includes/conn.php';

// TOTAL NUMBER OF USERS IN SYTEM 
$stmt =$pdo->prepare( "SELECT * FROM admins ORDER BY id");
$stmt->execute();
$row=$stmt->rowCount();