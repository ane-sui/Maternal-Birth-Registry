<?php
    // include_once 'layout.view.php';
    include_once 'conn.php';
    include_once('functions.php');

    // $id=$_POST['id'] ?? null;

    // if(!$id){
    //     redirect("index.php");
    // }
if(isset($_POST['submit']))
    $id=$_POST['id'];


    $stmt=$pdo->prepare
    (
        'DELETE FROM maidens WHERE id=:id'
    );
    
    $stmt->execute
    (
        [
            'id'=>$id
        ]
    );
    redirect('../patients.php?update=delete');

?>