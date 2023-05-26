<?php 
   include_once 'layout.view.php';
   include_once '../../includes/conn.php';
   include_once '../../includes/functions.php';
?>
<?php
$msg=[];
if(isset($_GET['update']))
{
    if ($_GET['update']=="added") {
        $msg='<h6 class="ok">ADMIN SUCCESSFULY ADDED</h6>';
    }
    elseif ($_GET['update']=="mismatch") {
        $msg='<h6 class="msg">PASSWORWDS DO NOT MATCH</h6>';
    }
    elseif ($_GET['update']=="pwd") {
        $msg='<h6 class="msg">PASSWORWDS ARE MISSING</h6>';
    }        
   elseif ($_GET['update']=="empty") {
        $msg='<h6 class="msg">PLEASE FILL ALL INPUT FIELDS</h6>';
    }
    elseif ($_GET['update']=="name") {
        $msg='<h6 class="msg">NAME IS MISSING!</h6>';
    }
    elseif ($_GET['update']=="surname") {
        $msg='<h6 class="msg">SURNAME IS MISSING!</h6>';
    }
    elseif ($_GET['update']=="email") {
        $msg='<h6 class="msg">EMAIL IS MISSING!</h6>';
    }
}
?>


<section class="admin">
<img src="../../img/sunset.jpg" alt="" class="img-fluid">        
<div class="container">
<?php if(!empty($msg)){echo $msg;}?>      
        <form action="../scripts/reg.admin.php" method="post">
                    <b> Users Details:</b><br>
                       <div class="form-group">
                            <input type="text" value="<?php if(!empty($_GET['name'])){echo $_GET['name'];}?>" name="a_name" class="form-control form-control-sm" placeholder=" First Name">
                        </div>  
                        <br>              
                        <div class="form-group">
                            <input type="text" value="<?php if(!empty($_GET['last'])){echo $_GET['last'];}?>" name="a_surname" class="form-control form-control-sm" placeholder="Last Name">
                        </div>   
                        <br>
                    <div class="row">
                        <div class="col">
                            <input type="email" value="<?php if(!empty($_GET['email'])){echo $_GET['email'];}?>" name="a_email" class="form-control form-control-sm" placeholder="bond@gmail.com">
                        </div>    
                    </div>
                    <br>
                    <div class="form-group">
                            <input type="password" name="a_pwd" class="form-control form-control-sm" placeholder="Enter Password">
                    <br>
                        <div class="form-group">
                            <input type="password" name="cpwd" class="form-control form-control-sm" placeholder="Repeat Password">
                        </div>    
                    </div>
                    <br>
                        <input type="submit" name="register" value="Register" class="btn btn-success btn-sm">
                        <a class="btn btn-warning btn-sm" href="home.view.php">Back</a>
                </form>
                    </div>
        </div>
    </section>
<?php include_once '../../footer.php';?>