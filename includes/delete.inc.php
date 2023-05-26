<?php
    // include_once 'layout.view.php';
    include_once 'conn.php';
    include_once('functions.php');

    $id=$_POST['id'] ?? null;

    if(!$id){
        redirect("index.php");
    }

    $stmt=$pdo->prepare('DELETE FROM maidens WHERE id=:id');
    $stmt->execute(['id'=>$id]);
    redirect('../view_patients.php?update=delete');




    
?>