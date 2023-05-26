<?php
include_once '../views/layout.view.php';
include_once '../../includes/conn.php';
include_once '../../includes/functions.php';

if(isset($_POST['register']))
{
        $name=$_POST['a_name'];
        $surname=$_POST['a_surname'];
        $email=$_POST['a_email'];
        $pwd=$_POST['a_pwd'];
        $cpwd=$_POST['cpwd'];
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

    elseif($pwd!=$cpwd)
    {
        redirect("../views/reg.admin.php?update=mismatch&name=$name&last=$surname&email=$email");
        exit();
    }
else 
    
    {
        $stmt=$pdo->prepare('INSERT INTO admins(a_name,a_surname,a_email,a_pwd) VALUES (?,?,?,?)');
        $stmt->execute(array($name,$surname,$email,$pwd));
        redirect('../views/reg.admin.php?update=added');

    }

}
   