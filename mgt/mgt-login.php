<?php 
    include_once '../includes/conn.php ';
    include_once ('../includes/functions.php');
    include_once 'layout.view.php';

    if (isset($_GET['login'])) 
    {
        $msg=[];
        if($_GET['login']=="invalid")
        {
            $msg='<h6 class="msg">ACCESS DENIED,PLEASE TRY AGAIN!</h6>';
        }
    }
    ?>
    
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<title> Patients </title>

<title>Management Login</title>
<section class=" mid">
    <!-- <img class="img-fluid" src="../img/flower.jpg" alt=""> -->
        <div class="container-fluid">
        <form action="../includes/mgt-login.php" method="post">
            <?php if(!empty($msg)) echo $msg;?>
                    <div class="row">
                        <div class="col">
                            <label for="">Email:</label>
                            <input type="email" value="<?php if(!empty($_GET['email'])){echo $_GET['email'];}?>" required name="email" class="form-control form-control-sm" >
                        </div>    
                        <div class="col">
                            <label for="Password">Password:</label>
                            <input type="password" required name="pwd" class="form-control form-control-sm" >
                        </div>
                    </div>
                    <br>
                    <!-- <p style="color: grey; font-weight:300;">New User? <a style="text-decoration: none; color:coral; font-weight:bolder;" href="signup.view.php">Signup</a></p>                        -->
                        <input type="submit" name="login" value="Login" class="btn btn-warning btn-sm">
                        <a class="btn btn-secondary btn-sm" href="../index.php">Back</a>
                    <br>
                </form>
            </div>
        </div>
    </section>
<?php include_once '../footer.php';?>
