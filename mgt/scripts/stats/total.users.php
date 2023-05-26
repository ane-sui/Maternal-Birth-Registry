<?php 
include_once '../../includes/conn.php';

// TOTAL NUMBER OF USERS IN SYTEM 
$stmt =$pdo->prepare( "SELECT * FROM real_users ORDER BY id");
$stmt->execute();
$users=$stmt->rowCount();