<?php 
include_once 'conn.php';
include('functions.php');

if(is_user_authenticated()){
    redirect('index.php');
    die();
}

if(isset($_POST['login']))
{
    if(!empty($_POST['email'] && $_POST['pwd']))
    {
        $input = clean($_POST);
        $email=$input['email'];
        $pwd=md5($input['pwd']);
        
        
        $stmt=$pdo->prepare('SELECT *  FROM mgt WHERE (email=? and pwd=?);');
                
        // $pwdCheck=password_verify($pwd,$fetch->user_password);
        $stmt->execute(array($email,$pwd));

        $row = $stmt->rowCount();
        $fetch = $stmt->fetch();
    
    if($row == 0) 
    {
        echo "
        <script>alert('Invalid Email or Password')</script>
        ";
        redirect("../mgt/mgt-login.php?login=invalid&email=$email");
    
    } 

    else
    {
        session_start();
        $_SESSION["name"]=$fetch->name;
        $_SESSION["surname"]=$fetch->surname;
        $_SESSION["email"]=$fetch->email;
        redirect("../mgt/index.php");
    }


    }
}

// else if(isset($_POST['login']))
// {
//     if(!empty($_POST['user_email'] && $_POST['pwd']))
//     {
//         $input = clean($_POST);
//         $email=$input['user_email'];
//         $pwd=$input['pwd'];
//         $stmt=$pdo->prepare('SELECT *  FROM admins WHERE (a_email=? and a_pwd=?);');
            
//         // $pwdCheck=password_verify($pwd,$fetch->user_password);
//         $stmt->execute(array($email,$pwd));
    
//         $row = $stmt->rowCount();
//         $fetch = $stmt->fetch();
        
//         if($row == 0) {
//             echo "
//             <script>alert('Invalid Email or Password')</script>
//             ";
        
//         } else
//         {
//             session_start();
//             $_SESSION["a_email"]=$fetch->a_email;
//             redirect("home.php");
//         }
//     }
// }