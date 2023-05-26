<?php 
    include_once 'includes/conn.php';
    include('includes/functions.php');
    include('layout.view.php');
    $msg=[];
    $msgs=[];

    if (isset($_GET['signup'])) {
        if($_GET['signup']=="empty"){
        $msg='<h6 class="msg">PLEASE FILL ALL INPUT FIELDS</h6>';
        }
        elseif($_GET['signup']=="fempty"){
            $msg='<h6 class="msg">PLEASE FILL IN ALL INPUT FIELDS</h6>';
            }
        else if($_GET['signup']=="mismatch"){
            $msg='<h6 class="msg">PASSWORDS MISMATCH</h6>';
        }
        elseif ($_GET['signup']=="success") {
            $msg='<h6 class="ok">YOU HAVE BEEN SUCCESSFULLY REGISTERED </h6> <br> ';
            $msgs='<p class="wait">Please wait for the admin to authenticate your credentials before you can login!</p>';
        }
    }
?> 
    <section class="login">
    <?php if (!empty($msg )){echo $msg;}?>
    <?php if (!empty($msgs )){echo $msgs;}?>    
    <div class="container-fluid"> 
    <form action="includes/signup.inc.php" method="post">
                <span><b> Users Details:</b></span><br>
                    <div class="row">
                        <div class="col">
                            <label for="">First Names:</label>
                            <input type="text" value="<?php if(!empty($_GET['name'])){echo $_GET['name'];}?>" name="user_name" class="form-control form-control-sm" placeholder="James Ray">
                        </div>    
                        <div class="col">
                            <label for="">Last Name:</label>
                            <input type="text" name="user_surname" value="<?php if(!empty($_GET['surname'])){echo $_GET['surname'];}?>" class="form-control form-control-sm" placeholder="Smith">
                        </div>   
                    </div>                
                    
                    <div class="row">
                        <div class="col">
                            <label for="">Email:</label>
                            <input type="email" name="user_email" class="form-control form-control-sm" value="<?php if(!empty($_GET['email'])){echo $_GET['email'];}?>" placeholder="Email Address">
                        </div>    
                    </div>
                   
                    <div class="row">
                        <div class="col">
                        <label for="">Position</label>
                            <select  class="form-select form-select-sm" name="user_work_post" required id="">
                            <option selected>User Position</option></option>   
                                <option value="Midwife Nurse">Midwife Nurse</option>
                                <option value="Nurse Aid">Management</option>    
                            </select>
                        </div>
                        <div class="col">
                            <label for="phone number">Phone Number</label>
                            <input type="number" class="form-control form-control-sm" value="<?php if(!empty($_GET['number'])){echo $_GET['number'];}?>" name="user_phone_number" placeholder="Phone Number" id="">
                        </div>
                    </div>
                   
                    <div class="row">
                        <div class="col">
                            <label for="">Password:</label>
                            <input type="password"  name="pwd" class="form-control form-control-sm" placeholder="Enter Password">
                        </div>

                        <div class="col">
                            <label for="">Confirm Password:</label>
                            <input type="password" name="cpwd" class="form-control form-control-sm" placeholder="Repeat Password">
                        </div>    
                    </div>

                   
                        <br>
                        <p>Already have an account? <a style="text-decoration: none; color:coral; font-weight:100px;" href="login.view.php"> Login</a> </p>                    

                        <input type="submit" name="register" value="Register" class="btn btn-warning btn-sm">
                    <a class="btn btn-danger btn-sm" href="index.php">Cancel</a>
                </form>
            </div>
        </div>
    </section>

    <?php include_once 'footer.php';?>
