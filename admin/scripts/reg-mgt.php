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
    
        if (empty($name)&&empty($surname)&&empty($email)&& empty($pwd)&&empty($cpwd)){
        redirect('../views/reg.admin.php?update=empty');
        exit();
    }
    if(empty($name)){
        redirect("../views/reg.admin.php?update=name&last=$surname&email=$email");
        exit();
    }
    elseif(empty($surname)){
        redirect("../views/reg.admin.php?update=surname&name=$name&last=$surname&email=$email");
        exit();
    }
    elseif(empty($email)){
        redirect("../views/reg.admin.php?update=email&name=$name&last=$surname");
        exit();
    }
    elseif(empty($pwd)){
        redirect("../views/reg.admin.php?update=pwd&name=$name&last=$surname&email=$email");
        exit();
    }

    elseif($pwd!=$rePwd)
    {
        redirect("../views/reg.admin.php?update=mismatch&name=$name&last=$surname&email=$email");
        exit();
    }
else 
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