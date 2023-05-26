<?php 
    include_once 'includes/conn.php';
    include_once ('includes/functions.php');
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
<section class="login">
    <!-- <img class="img-fluid" src="img/sunset.jpg" alt=""> -->
        <div class="container-fluid">
             
        <form action="includes/login.inc.php" method="post">
            <?php if(!empty($msg)) echo $msg;?>
                    <div class="row">
                        <div class="col">
                            <label for="">Email:</label>
                            <input type="email" value="<?php if(!empty($_GET['email'])){echo $_GET['email'];}?>" required name="user_email" class="form-control form-control-sm" >
                        </div>    
                        <div class="col">
                            <label for="">Password:</label>
                            <input type="password" required name="pwd" class="form-control form-control-sm" >
                        </div>
                   
                    </div>
                    <p style="color: grey; font-weight:100px;">New User? <a style="text-decoration: none; color:coral; font-weight:100px;" href="signup.view.php">Signup</a></p>         
                        <input type="submit" name="login" value="Login" class="btn btn-warning btn-sm">
                        <a class="btn btn-secondary btn-sm" href="index.php">Back</a>
                </form>
            </div>
        </div>
    </section>
<?php include_once 'footer.php';?>
