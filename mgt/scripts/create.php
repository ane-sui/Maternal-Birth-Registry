<?php
include_once '../views/layout.view.php';
include_once '../../includes/conn.php';
include_once '../../includes/functions.php';

$id=$_GET['id'] ?? null;

if(!$id){
    redirect('view_patients.php');
}

$sql='SELECT * FROM users WHERE id=:id';
$stmt=$pdo->prepare($sql);

$stmt->execute(['id'=> $id]);

$results=$stmt->fetchAll();

foreach ($results as $result) {
    $stmt=$pdo->prepare('INSERT INTO real_users(user_name,user_surname,user_email,user_post,user_phone_number,user_password) VALUES (?,?,?,?,?,?)');
     
    $stmt->execute(array($result->user_name,$result->user_surname,$result->user_email,$result->user_work_post,$result->user_phone_number,$result->user_password));
    if($stmt=true)
    {
        $stmt=$pdo->prepare('DELETE FROM users WHERE id=:id');
        $stmt->execute(['id'=>$id]);
        redirect('../views/users.view.php?update=create');
    }  
}