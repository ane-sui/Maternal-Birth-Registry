<?php 
include_once '../../includes/conn.php';
include('../../includes/functions.php');

if(is_user_authenticated()){
    redirect('index.php');
    die();
}

if(isset($_POST['login']))
{
    if(!empty($_POST['a_email'] && $_POST['a_pwd']))
    {
        $input = clean($_POST);
        $email=$input['a_email'];
        $pwd=$input['a_pwd'];
        
        $stmt=$pdo->prepare('SELECT *  FROM admins WHERE (a_email=? and a_pwd=?);');
                
        // $pwdCheck=password_verify($pwd,$fetch->user_password);
        $stmt->execute(array($email,$pwd));

        $row = $stmt->rowCount();
        $fetch = $stmt->fetch();
    
        if($row == 0) 
        {
            echo "
            <script>alert('Invalid Email or Password')</script>
            ";
            redirect("../views/login.view.php?login=invalid&email=$email");

        } 

        else
        {
            session_start();
            $_SESSION["name"]=$fetch->a_name;
            $_SESSION["surname"]=$fetch->a_surname;
            $_SESSION["email"]=$fetch->a_email;
            redirect("../views/home.view.php");
        }


    }
}
