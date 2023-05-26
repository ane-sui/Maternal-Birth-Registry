<?php 
include_once 'conn.php';
include('functions.php');

if(isset($_POST['register']))
{
    $msg=[];
    $input = clean($_POST);
    $name= $input['user_name'];
    $surname=$input['user_surname'];
    $email=$input['user_email'];
    $post=$input['user_work_post'];
    $number=$input['user_phone_number'];
    $pwd=md5($input['pwd']);
    $cpwd=$input['cpwd'];
   
    if(empty($name)&&empty($surname)&&empty($email)&&empty($post)&&empty($number)&&empty($pwd)&&empty($cpwd)){
        redirect("../signup.view.php?signup=empty");
        exit();
    }
    else if(empty($name)||empty($surname)||empty($email)||empty($post)||empty($number)||empty($pwd)||empty($cpwd)){
        redirect("../signup.view.php?signup=fempty&name=$name&surname=$surname&email=$email&number=$number");
        exit();
    }
    else if($pwd!=$cpwd) 
    {
        redirect("../signup.view.php?signup=mismatch&name=$name&surname=$surname&email=$email&number=$number");
        exit();
    }

    else
    {
        $stmt=$pdo->prepare
        (
            'INSERT INTO users
            (
                user_name,
                user_surname,
                user_email,
                user_work_post,
                user_phone_number,
                user_password,
                rePwd
            ) 

            VALUES 
            
            (
                ?,
                ?,
                ?,
                ?,
                ?,
                ?,
                ?
            )
            '
        );
        
        $stmt->execute(array($name,$surname,$email,$post,$number,$pwd,$rePwd));
        redirect('../signup.view.php?signup=success');
        exit();
    }
}