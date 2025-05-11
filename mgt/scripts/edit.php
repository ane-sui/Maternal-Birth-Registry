<?php 
    include_once '../layout.view.php';
    include_once '../inc/conn.php';
    include('../inc/functions.php');

$id=$_GET['id'] ?? null;

if(!$id){
    redirect('../patients.php');
}

$sql='SELECT * FROM maidens WHERE id=:id';
$stmt=$pdo->prepare($sql);

$stmt->execute(['id'=> $id]);

$results=$stmt->fetchAll();

foreach($results as $result):?>

<section class="reg-form">
    <div class="container"> 
        <form action="../inc/update.inc.php" method="post">
                <input type="hidden" name="id" value="<?=$result->id?>">
        <span><b> Mother's Details:</b></span><br>
        <div class="row">
            <div class="col">    
                <label for="">First Name</label>
                <input type="text" name="name"  class="form-control form-control-sm" value="<?=$result->name?>" >
            </div>
            <div class="col">
                <label>Last Name</label>
                <input type="text" name="surname" class="form-control form-control-sm" value="<?=$result->surname?>">
            </div>
        </div>
        <div class="row">
            <div class="col">    
            <label for="address">Physical Address</label>
                <input type="text" name="address" class="form-control form-control-sm" value="<?=$result->address?>">
            </div>
    
            <div class="col">
                <label for="age">Age</label>
                <input type="number" name="age" class="form-control form-control-sm" value="<?=$result->age?>">
            </div>
        </div>
        <div class="row">
            <div class="col">    
                <label for="ethnicity">Ethnicity</label>
                <select name="ethnicity" id="" class="form-control form-control-sm">
                    <option selected><?=$result->ethnicity?></option>
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
                <input type="text" name="nationality" class="form-control form-control-sm" value="<?=$result->nationality?>">
            </div>
        </div>
        <div class="row">
            <div class="col">    
                <label>National Id Number</label>
                <input type="text" name="idNumber" class="form-control form-control-sm" value="<?=$result->idNumber?>">
            </div>

            <div class="col">
                <label for="">Weight</label>
                <input type="text" name="weight" class="form-control form-control-sm" value="<?=$result->weight?>">
            </div>
        </div>

        <div class="row">
            <div class="col">    
            <label for="">Level Of Education</label>
                <select class="form-select form-select-sm" name="education" id="">
                    <option selected><?=$result->education?></option>
                    <option value="none">None</option>
                    <option value="">Elementary School</option>        
                    <option value="Primary">Primary</option>
                    <option value="Secondary">Secondary</option>
                    <option value="Post Secondary">Post Secondary</option>
                    <option value="Tertiary">Tertiary</option>
                </select>    
            </div>
            <div class="col">
                <label for="">Profession</label>
                <input type="text" name="profession" class="form-control form-control-sm" value="<?=$result->profession?>">
            </div>
        </div>
        <div class="row">
            <div class="col">    
                <label>Phone Number</label>
                <input type="text" name="phoneNumber" class="form-control form-control-sm"value="<?=$result->phoneNumber?>">
            </div>
            <div class="col">
          
          
            <label for="">Complications</label>
                <input type="text" name="complications" class="form-control form-control-sm"value="<?=$result->complications?>">
                </div>
        </div>

        <div class="row">
            <div class="col">    
                <label>Hospital Number</label>
                <input type="text" name="hosNum" class="form-control form-control-sm" value="<?=$result->hosNum?>">
            </div>
            <div class="col">
          
            <label for="">ANC Number</label>
                <input type="text" name="ancNum" class="form-control form-control-sm" value="<?=$result->ancNum?>">
            </div>
        </div>

        <div class="row">
            <div class="col">    
                <label>GA Number</label>
                <input type="text" name="gaNumber" class="form-control form-control-sm"value="<?=$result->gaNumber?>">
            </div>
            <div class="col">
                <label for="">Obsteric</label>
                <input type="text" name="obsteric" class="form-control form-control-sm" value="<?=$result->obsteric?>">
            </div>
        </div>
        <div class="row">
            <div class="col">    
                <label>Number Of Children Alive</label>
                <input type="text" name="childrenAlive" class="form-control form-control-sm" value="<?=$result->childrenAlive?>">
            </div>
            <div class="col">
                <label>Admission Date</label>
                <input type="text" name="admissionDate" class="form-control form-control-sm" value="<?=$result->admissionDate?>" >
            </div>
        </div>
        <div class="row">
            <div class="col">    
                <label for="deliveryDate">Delivery Date</label>
                <input type="text" name="deliveryDate" class="form-control form-control-sm" value="<?=$result->deliveryDate?>">
            </div>
            <div class="col">
                <label for="deliveyMethod">Delivery Method</label>
                <select name="deliveryMethod" class="form-select form-select-sm">
                    <option selected><?=$result->deliveryMethod?></option>
                    <option value="Ceasarean Section">Ceasarean Section</option>
                    <option value="Vaginal Delivery">Vaginal Delivery</option>
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
                <input type="text" name="bloodLoss" class="form-control form-control-sm" value="<?=$result->bloodLoss?>">
            </div>
            <div class="col">
            <label for="">Placenta Membranes</label>
            <select name="placenta" class="form-select form-select-sm">
                <option selected><?=$result->placenta?></option>
                    <option value="Complete">Complete</option>
                    <option value="Incomplete">Incomplete</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col">    
        <label for="">Delivered By</label>
            <input type="text" name="deliveredBy" class="form-control form-control-sm" value="<?=$result->deliveredBy?>">
            </div>

            <div class="col">
            <label>Assisted By</label>
            <input type="text" name="assistedBy" class="form-control form-control-sm" value="<?=$result->assistedBy?>">
            </div>
        </div>
        <div class="row">
            <div class="col">    
                <label>Registered By</label>
                <input type="text" name="regBy" class="form-control form-control-sm" value="<?=$result->regBy?>">
            </div>
            
            <div class="col">
                <label for="">Registration Date</label>
                <input type="text" name="regDate"  class="form-control form-control-sm" value="<?=$result->regDate?>" >
            </div>
        </div>
        <div class="row">
            <div class="col">    
            <label>Birth Outcome</label>
            <select name="birthOutcome" class="form-select form-select-sm" id="">
            <option selected><?=$result->birthOutcome?></option>    
            <option value="live">Live</option>
                    <option value="still">Still</option>
                </select>
            </div>
        <div class="col">
    
        <label>Twin Status</label>
        <select name="twinStatus" class="form-select form-select-sm" id="">
            <option selected><?=$result->twinStatus?></option>    
                    <option value="No Twin">No Twin</option>
                    <option value="twin One">Twin One</option>
                    <option value="Twin Two">Twin Two</option>
                    <option value="Twin Three">Twin Three</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col">
            <label for="">Sex</label>
            <select name="sex" class="form-select form-select-sm" id="">
            <option selected><?=$result->sex?></option>        
            <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>    
            </div>
            <div class="col">
            <label>Child Protected Against Tetanus</label>
                <select name="tetanus" class="form-select form-select-sm" id="">
                    <option selected><?=$result->tetanus?></option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col">    
            <label for="">Child's Weight</label>
            <input type="text" name="childWeight" class="form-control form-control-sm" value="<?=$result->childWeight?>" >
        </div>
            <div class="col">
            <label for="">Child's HIV Status</label>
            <select name="childHIVStatus" id="" class="form-select form-select-sm" >
                    <option selected><?=$result->childHIVStatus?></option>
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
                <option selected><?=$result->onAdmission?></option>
                    <option value="Not Tested">Not Tested</option>
                    <option value="Negative">Negative</option>
                    <option value="Positive">Positive</option>
                </select>
            </div>
        <div class="col">
        <label for="">Maiden's HIV Status After Admission</label>
                <select name="afterAdmission" id="" class="form-select form-select-sm" >
  <option><?=$result->afterAdmission?></option>
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
                    <option selected><?=$result->birthPlace?></option>
                <option value="Gokwe South District Hospital">Gokwe South District Hospital</option>
                <option value="Cheziya Clinic">Cheziya Clinic</option>
            </select>
            </div>
        
            <div class="col">    
                
            <label>Maternal Vitamin A</label>
                <select name="vitaminA" class="form-select form-select-sm">
                <option selected><?=$result->vitaminA?></option>    
                <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col">

            <label for="apScore">APGAR Score</label>
                <input type="text" name="apScore" class="form-control form-control-sm" value="<?=$result->apScore?>" >

            </div>
            <div class="col">

                <label>Labour Hours</label>
                <input type="text" name="labor" class="form-control form-control-sm" value="<?=$result->labor?>">
            </div>
        </div>
        <div class="row">
            <div class="col">
            <label>Comments</label>
                <textarea class="form-control" name="comments" rows="0"><?=$result->comments?> </textarea>
            </div>
        </div>
                <br>
                <input type="submit" name="update" value="Update" class="btn btn-warning btn-sm">
                <a class="btn btn-danger btn-sm" href="home.php">Cancel</a>
            </form>
        </div>
    </div>
</section>
<?php endforeach;?>
<!-- <?php include_once 'footer.php';?> -->
