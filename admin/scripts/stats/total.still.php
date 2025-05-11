<?php 
$host='localhost';
$user='root';
$password='';
$dbname="mbrs";

#SET DNS
$dns='mysql:host='.$host.';dbname='.$dbname;

#CREATE PDO INSTANCE
$pdo =new PDO($dns,$user,$password);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);



// TOTAL NUMBER OF USERS IN SYSTEM 
$stmt =$pdo->prepare( "SELECT * FROM maidens WHERE birthOutcome= 'still'");
$stmt->execute();
$still=$stmt->rowCount();