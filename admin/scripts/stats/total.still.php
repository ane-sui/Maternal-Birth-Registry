<?php 
include_once '../../includes/conn.php';

// TOTAL NUMBER OF USERS IN SYTEM 
$stmt =$pdo->prepare( "SELECT * FROM maternity WHERE birth_status= 'still-birth'");
$stmt->execute();
$still=$stmt->rowCount();