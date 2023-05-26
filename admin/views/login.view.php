<?php
include_once 'layout.view.php';
include_once '../../includes/conn.php';
include_once '../../includes/functions.php';

if(is_user_authenticated()){
    redirect('home.view.php');
    die();
}
if (isset($_GET['login'])) 
{
    $msg=[];
    if($_GET['login']=="invalid")
    {
        $msg='<h6 class="msg">ACCESS DENIED,PLEASE TRY AGAIN!</h6>';
    }
}
?>

<section class="admin-login">
    <div class="container-fluid"> 
        <form action="../scripts/login.inc.php" method="post">
            <?php if(!empty($msg)) echo $msg;?>
                
            <div class="row">
                    <div class="col">
                        <label for="">Email:</label>
                        <input type="email" value="<?php if(!empty($_GET['email'])){echo $_GET['email'];}?>" name="a_email" class="form-control form-control-sm" placeholder="bond@gmail.com">
                    </div>    
                </div>
                <div class="row">
                    <div class="col">
                        <label for="">Password:</label>
                        <input type="password" value="<?php if(!empty($_GET['pwd'])){echo $_GET['email'];}?>" name="a_pwd" class="form-control form-control-sm" placeholder="Enter Password">
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <input type="submit" name="login" value="Login" class="btn btn-warning btn-sm">
                    <a class="btn btn-danger btn-sm" href="../../index.php">Cancel</a>
                </div>
            </form>
        </div>
        </div>
    </div>
</section>
        <?php include_once '../../footer.php';?>