<?php 
include_once 'conn.php';
include('functions.php');

if(isset($_POST['register']))
{
    $msg=[];
    // $input = clean($_POST);
    $name= $_POST['user_name'];
    $surname=$_POST['user_surname'];
    $email=$_POST['user_email'];
    // $post=$input['user_work_post'];
    $number=$_POST['user_phone_number'];
    $pwd=$_POST['pwd'];
    $cpwd=$_POST['cpwd'];
   
    // {
        // md5($pwd);
        // md5($cpwd);

        $stmt=$pdo->prepare
        (
            'INSERT INTO users
            (
                user_name,
                user_surname,
                user_email,
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
                ?
            )
            '
        );
        
        $stmt->execute(array($name,$surname,$email,$number,$pwd,$cpwd));
        redirect('../signup.view.php?signup=success');
        exit();
    }
// }