<?php
    include_once 'includes/functions.php';
    include_once 'layout.view.php';
    ensure_is_user_authenticated();
    //ERROR HANDLERS USING PHP
    $msg=[]; 
    if (isset($_GET['reg'])) 
    {
        if($_GET['reg']=="emptyfields"){
         $msg='<h6 class="msg">PLEASE FILL ALL INPUT FIELDS</h6>';
        }
        elseif ($_GET['reg']=="success")
        {
          $msg='<h6 class="ok">PATIENT SUCCESSFULLY REGISTERED</h6>';
        }
        elseif ($_GET['reg']=="empty")
        {
          $msg='<h6 class="msg">PLEASE MAKE SURE THAT ALL INPUT FIELDS ARE FILLED!/h6>';
        }
     
    }
?>

<title>Register Mother</title>
<div class="container-fluid"> 
<section class="reg-form">
<?php if(!empty($msg)){echo $msg;} ?>
<form action="includes/register.inc.php" method="post">
<span><b> Mother's Details:</b></span><br>
                    <div class="row">
                        <div class="col">
                            <label for="">Maiden Surname:</label>
                            <input required type="text"value="<?php if(!empty($_GET['surname'])){echo $_GET['surname'];}?>" id="surname" name="surname" class="form-control form-control-sm" placeholder="Enter Maiden Surname">
                        </div>   

                        <div class="col">
                            <label for="">Maiden Name:</label>
                            <input required type="text" value="<?php if(!empty($_GET['name'])){echo $_GET['name'];}?>" name="name" id="name" class="form-control form-control-sm" placeholder="Enter Maiden Name">
                        </div>    
                    </div>                
                    
                    <div class="row">
                        <div class="col">
                            <label for="">National Identification Number:</label>
                            <input type="text" name="id_number" id="id" value="<?php if(!empty($_GET['id'])){echo $_GET['id'];}?>" class="form-control form-control-sm" placeholder="Enter Id Number">
                        </div>    
                        <div class="col">
                            <label for="">Physical Address:</label>
                            <input type="text" required value="<?php if(!empty($_GET['address'])){echo $_GET['address'];}?>" name="address" id="address" class="form-control form-control-sm" placeholder="Address">
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col">
                            <label for="">Hospital Number:</label>
                            <input type="text" required placeholder="Enter Patient's Hospital Number" name="hos_number" value="<?php if(!empty($_GET['hos_number'])){echo $_GET['hos_number'];}?>" id="hos_number" class="form-control form-control-sm"
                            >
                        </div>   
                        <div class="col">
                            <label for="">Delivered By:</label>
                            <input type="text" required name="delivered_by" class="form-control form-control-sm" value="<?php if(!empty($_GET['delivered_by'])){echo $_GET['delivered_by'];}?>" placeholder="POST:: MIDWIFE'S NAME">
                        </div>    
                    </div>                
                    
                    <span><b>Child's Details:</b></span><br>
                    <div class="row">
                        <div class="col">
                        <label for="">Date Of Birth:</label>
                        <input type="date" required value="<?php if(!empty($_GET['dob'])){echo $_GET['dob'];}?>" name="dob" id="dob"  class="form-control form-control-sm" placeholder="Enter Date of Birth">
                    </div>
                    <div class="col">
                        <label for="">Weight:</label>
                        <input  type="text" required value="<?php if(!empty($_GET['weight'])){echo $_GET['weight'];}?>" name="weight" id="weight" class="form-control form-control-sm" placeholder="Enter Birth Weight">
                    </div>
                    </div>
                    
                    <div class="row">
                        <div class="col">
                            <label for="">Sex:</label>
                            <select required value="<?php if(!empty($_GET['sex'])){echo $_GET['sex'];}?>" class="form-select form-select-sm" name="sex" id="sex">
                                <option selected>Male/Female:</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    
                        <div class="col">
                    <label for="">Status At Birth:</label>
                        <select required class="form-select form-select-sm" name="birth_status" value="<?php if(!empty($_GET['status'])){echo $_GET['status'];}?>" id="status">
                            <option selected>Status At Birth</option>
                            <option value="live-birth">Live Birth</option>
                            <option value="still-birth">Still Birth</option>
                        </select>
                    </div>
                    </div>
                    
                    <div class="row">
                        <div class="col">
                            <label for="">Twin Status:</label>
                            <select required class="form-select form-select-sm" name="is_twin">
                                <option selected>---No a Twin---</option>
                                <option value="Male">Twin One</option>
                                <option value="Female">Twin Two</option>
                            </select>
                    </div>
                    
                    <div class="col">
                        <label for="">Place Of Birth:</label>
                            <select required class="form-select form-select-sm" name="birth_place" id="birth_place">
                                <option value="Gokwe South District Hospital">Gokwe South District Hospital</option>
                            </select>
                        </div>            
                    </div>
                    
                    <div class="row">
                        <div class="col">    
                            <div class="form-group">
                                <label for="">Issued_by:</label>
                                <input type="text" value="<?=$_SESSION['name'].' '.$_SESSION['surname'] ?> " class="form-control form-control-sm" readonly>
                            </div>
                        </div>
                        <div class="col">
                        <div class="form-group">
                                <label for="">Date of Registration:</label>
                                <input type="text" name="issued_on" readonly class="form-control form-control-sm" placeholder="<?=date("D, d M Y H:i:s") ?>">
                            </div>
                        </div>
                    </div>
               
                    <br>
                        <input type="submit" name="save" value="Save" class="btn btn-warning btn-sm">
                    <a class="btn btn-danger btn-sm" href="home.php">Cancel</a>
                    
                </form>
            </div>
        </div>
    </section>
    <!-- <?php include_once 'footer.php';?> -->