<?php
include_once '../views/layout.view.php';
include_once '../../includes/conn.php';
include_once '../../includes/functions.php';

if(isset($_POST['register']))
{
        $name=$_POST['name'];
        $surname=$_POST['surname'];
        $email=$_POST['email'];
        $phoneNumber=$_POST['phoneNumber'];
        $pwd=md5($_POST['pwd']);
        $rePwd=md5($_POST['rePwd']);
    
    {
        $stmt=$pdo->prepare
        (
            'INSERT INTO mgt
            (
                name,
                surname,
                email,
                phoneNumber,
                pwd,
                rePwd
            )
             VALUES 
            (
                ?,
                ?,
                ?,
                ?,
                ?,
                ?
            )
        '
        );
        $stmt->execute
        (
            array
            (
                $name,
                $surname,
                $email,
                $phoneNumber,
                $pwd,
                $rePwd
            )
        );
        
        redirect('../views/reg-mgt.php?update=m-added');

    }
}