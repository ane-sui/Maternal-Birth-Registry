<?php
    include_once 'includes/functions.php';
    include_once 'layout.view.php';
    ensure_is_user_authenticated();
?>

<title>Register Mother</title>
<div  class="container-fluid"> 
<section class="reg-form">
<?php if(!empty($msg)){echo $msg;} ?>
<form action="includes/register.inc.php" id="my-form" method="post">
<span><b> Maiden Details:</b></span><br>
    <div class="row">
            <div class="col">    
                <label for="name">First Name</label>
                <input type="text" id='name' name="name" class="form-control form-control-sm" placeholder="First Name">
            </div>
            <div class="col">
                <label class='form-label'>Last Name</label>
                <input type="text"  id='surname' name="surname" class="form-control form-control-sm" placeholder="Last Name">
            </div>
        </div>
        <div class="row">
            <div class="col">    
            <label for="address">Physical Address</label>
                <input type="text" id='address' name="address" class="form-control form-control-sm" placeholder="Physical Address">
            </div>
    
            <div class="col">
                <label for="age">Age</label>
                <input type="number" id='age' name="age" class="form-control form-control-sm" placeholder="Age">
            </div>
        </div>
        <div class="row">
            <div class="col">    
                <label for="ethnicity">Ethnicity</label>
                <select name="ethnicity" id="ethnicity" class="form-control form-control-sm">
                    <option value="African">African</option>
                    <option value="Asian">Asian</option>
                    <option value="American Indian">American Indian</option>
                    <option value="Hispanic">Hispanic</option>
                    <option value="White">White</option>
                    <option value="Native Hawaiian">Native Hawaiian</option>
                </select>
                
            </div>

            <div class="col">
                <label for="">Nationality</label>
                <input type="text" id='nationality' name="nationality" class="form-control form-control-sm" placeholder="Nationality">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label class="form-label" for="maritalStatus">Marital Status</label>
                <select name="maritalStatus" id="maritalStatus" class="form-select form-select-sm">
                    <option value="Single">Single</option>
                    <option value="Married">Married</option>
                    <option value="Divorced">Divorced</option>
                    <option value="Widowed">Widowed</option>
                </select>
            </div>
            <div class="col">
                <label for="husband">Husband Surname</label>
                <input type="text" name="husbandName" id='husbandName' class="form-control form-control-sm">
            </div>
        </div>
        <div class="row">
            <div class="col">    
                <label>National Id Number</label>
                <input type="text" name="idNumber" id='idNumber' class="form-control form-control-sm" placeholder="ID Number ">
            </div>

            <div class="col">
                <label for="">Next Of Keen</label>
                <input type="text" name="weight" id='keen' class="form-control form-control-sm">
            </div>
        </div>

        <div class="row">
            <div class="col">    
            <label for="">Level Of Education</label>
                <select class="form-select form-select-sm" name="education" id="education">
                    <option value="none">None</option>
                    <option value="Elementary">Elementary School</option>        
                    <option value="Primary">Primary</option>
                    <option value="Secondary">Secondary</option>
                    <option value="Post Secondary">Post Secondary</option>
                    <option value="Tertiary">Tertiary</option>
                </select>    
            </div>
            <div class="col">
                <label for="">Profession</label>
                <input type="text" name="profession" class="form-control form-control-sm" placeholder="Maiden Profession">
            </div>
        </div>
        <div class="row">
            <div class="col">    
                <label>Phone Number</label>
                <input type="text" name="phoneNumber" class="form-control form-control-sm" placeholder="phoneNumber">
            </div>
            <div class="col">
                <label for="">Complications</label>
                <input type="text" name="complications" class="form-control form-control-sm" placeholder="Past Complications">
            </div>
        </div>

        <div class="row">
            <div class="col">    
                <label>Hospital Number</label>
                <input type="text" name="hosNum" class="form-control form-control-sm" placeholder="Hospital Number">
            </div>
            <div class="col">
          
            <label for="">ANC Number</label>
                <input type="text" name="ancNum" class="form-control form-control-sm" placeholder="ANC Number">
            </div>
        </div>

        <div class="row">
            <div class="col">    
                <label>GA Number</label>
                <input type="text" name="gaNumber" class="form-control form-control-sm" placeholder="GA Number">
            </div>
            <div class="col">
                <label for="">Obsteric</label>
                <input type="text" name="obsteric" class="form-control form-control-sm" placeholder="Obsteric">
            </div>
        </div>
        <div class="row">
            <div class="col">    
                <label>Number Of Children Alive</label>
                <input type="text" name="childrenAlive" class="form-control form-control-sm" placeholder="Number Of Children Alive">
            </div>
            <div class="col">
                <label>Admission Date</label>
                <input type="datetime-local" name="admissionDate" class="form-control form-control-sm" >
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="deliveryDate">Delivery Date</label>
                <input type="date" name="deliveryDate" class="form-control form-control-sm">
            </div>
            <div class="col">
                <label for="deliveyMethod">Delivery Method</label>
                <select name="deliveryMethod" class="form-select form-select-sm">
                    <option value="Ceasarean Section">Ceasarean Section</option>
                    <option value="Normal Delivery">Normal  Delivery</option>
                    <option value="Labour Induction">Labour Induction</option>
                    <option value="Episiotomy">Episiotomy</option>
                    <option value="Obsterical Forceps">Obsterical Forceps</option>
                    <option value="Vacuum Extraction">Vacuum Extraction</option>
                </select>
            </div>
        </div>
      
        <div class="row">
            <div class="col"> 
            <label>Blood Loss</label>   
                <input type="text" name="bloodLoss" class="form-control form-control-sm" placeholder="Blood Loss">
            </div>
            <div class="col">
            <label for="">Placenta Membranes</label>
            <select name="placenta" class="form-select form-select-sm">
                    <option value="Complete">Complete</option>
                    <option value="Incomplete">Incomplete</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col">    
        <label for="">Delivered By</label>
            <input type="text" name="deliveredBy" class="form-control form-control-sm" placeholder="Delivered By">
            </div>

            <div class="col">
            <label>Assisted By</label>
            <input type="text" name="assistedBy" class="form-control form-control-sm" placeholder="Assisted By">
            </div>
        </div>
        <div class="row">
            <div class="col">    
                <label>Registered By</label>
                <input type="text" name="regBy" class="form-control form-control-sm" value="<?=$_SESSION['name'].' '.$_SESSION['surname'] ?>" readonly>
            </div>
            
            <div class="col">
                <label for="">Registration Date</label>
                <input type="datetime-local" name="regDate"  class="form-control form-control-sm" >
            </div>
        </div>
        <div class="row">
            <div class="col">    
            <label>Birth Outcome</label>
            <select name="birthOutcome" class="form-select form-select-sm" id="">
                    <option value="live">Live</option>
                    <option value="still">Still</option>
                </select>
            </div>
        <div class="col">
        <label>Twin Status</label>
        <select name="twinStatus" class="form-select form-select-sm" id="">
                    <option value="No Twin">No Twin</option>
                    <option value="twin One">Twin One</option>
                    <option value="Twin Two">Twin Two</option>
                    <option value="Twin Three">Twin Two</option>
                    <option value="Twin Four">Twin Two</option>
                </select>
            </div>
        </div>
<div class="row">
    <div class="col">
        <label for="childName" class="form-label">Name Of Child</label>
        <input type="text" placeholder="Proposed name of the child." id="childName"name="childName" class="form-control form-control-sm">
    </div>
</div>
        <div class="row">
            <div class="col">
            <label for="">Sex</label>
            <select name="sex" class="form-select form-select-sm" id="">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>    
            </div>
            <div class="col">
            <label>Child Protected Against Tetanus</label>
                <select name="tetanus" class="form-select form-select-sm" id="">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col">    
            <label for="">Child's Weight</label>
            <input type="text" name="childWeight" class="form-control form-control-sm" >
        </div>
            <div class="col">
            <label for="">Child's HIV Status</label>
            <select name="childHIVStatus" id="" class="form-select form-select-sm" >
                    <option value="Not Tested">Not Tested</option>
                    <option value="Negative">Negative</option>
                    <option value="Positive">Positive</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col">    
            <label for="">Maiden's HIV Status On Admission</label>
            <select name="onAdmission" id="" class="form-select form-select-sm" >
                    <option value="Not Tested">Not Tested</option>
                    <option value="Negative">Negative</option>
                    <option value="Positive">Positive</option>
                </select>
            </div>
        <div class="col">
        <label for="">Maiden's HIV Status After Admission</label>
                <select name="afterAdmission" id="" class="form-select form-select-sm" >
                    <option value="Not Tested">Not Tested</option>
                    <option value="Negative">Negative</option>
                    <option value="Positive">Positive</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col">    
                <label>Birth Place</label>
                <select name="birthPlace" class="form-select form-select-sm">
                <option value="Gokwe South District Hospital">Gokwe South District Hospital</option>
            </select>
            </div>
        
            <div class="col">    
                
            <label>Maternal Vitamin A</label>
                <select name="vitaminA" class="form-select form-select-sm">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="apScore">APGAR Score</label>
                <input type="text" name="apScore" class="form-control form-control-sm" >
            </div>

            <div class="col">
                <label>Labour Hours</label>
                <input type="text" name="labor" class="form-control form-control-sm" placeholder=" Hours In Labour">
            </div>
        </div>

        <div class="">
            <div class="row">
                <div class="col">
                <label class="form-label">Comments</label>
                    <textarea class="form-control" name="comments" rows="0"> </textarea>
                </div>
            </div>
        </div>
        <input type="submit" name='save' value="Register" class="btn btn-success  btn-sm">
        <a href="home.php" class="btn btn-warning btn-sm">Back</a>
</form>
        </div>
    </div>
</div>

<!-- <?php include_once 'footer.php';?> -->