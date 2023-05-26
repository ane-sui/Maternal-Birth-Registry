<?php 
include_once '../../includes/conn.php';

// TOTAL NUMBER OF USERS IN SYTEM 
$stmt =$pdo->prepare( "SELECT * FROM maternity ORDER BY id");
$stmt->execute();
$mothers=$stmt->rowCount();