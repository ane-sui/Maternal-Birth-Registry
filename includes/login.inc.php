<?php 
include_once 'conn.php';
include('functions.php');

if(is_user_authenticated()){
    redirect('index.php');
    die();
}
if(isset($_POST['login']))
{
    if(!empty($_POST['user_email'] && $_POST['pwd']))
    {
        $input = clean($_POST);
        $email=$input['user_email'];
        $pwd=md5($input['pwd']);
        
        $stmt=$pdo->prepare('SELECT *  FROM real_users WHERE (user_email=? and user_password=?);');
        $stmt->execute(array($email,$pwd));
        $row = $stmt->rowCount();
        $fetch = $stmt->fetch();
    if($row > 0) 
    {
        session_start();
        $_SESSION["name"]=$fetch->user_name;
        $_SESSION["surname"]=$fetch->user_surname;
        $_SESSION["email"]=$fetch->user_email;
        $_SESSION["post"]=$fetch->user_post;
        redirect("../home.php");
    } 
    else
    {
        redirect("../login.view.php?login=invalid&email=$email");
    }


    }
}
