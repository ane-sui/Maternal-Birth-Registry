<?php
 include_once 'layout.view.php';
 include_once 'inc/conn.php';
 include_once('inc/functions.php');
 
 $id=$_GET['id'] ?? null;

 if(!$id)
    {
        redirect('views/patients.php?IdNotSet');
    }
$idNumber=$_GET['idNumber'] ?? null;
if(!$idNumber)
    {
        redirect('patients.php?idNumberNotSet');
    }
 $stmt =$pdo->prepare( "SELECT * FROM maidens WHERE idNumber=:idNumber");
 $stmt->execute
    (  
        [
            'idNumber'=>$idNumber
        ]
    );
    
$children=$stmt->rowCount();
 $sql='SELECT * FROM maidens WHERE id=:id';
 $stmt=$pdo->prepare($sql);
 
 $stmt->execute
    (
        [
            'id'=> $id
        ]
    );
 $results=$stmt->fetchAll();
 foreach($results as $result):?>
    <body>
        <style>
            #content{
                background-color: bisque;
                
            }

            @media print{
            body *{
                display:none;
            }
            #print{
                display:none;
            }
            .con3, .con3 * {
                display:block;
            }
        }
        </style>

    <section class='con3'>
            <!-- <img src="../img/asian.jpg" class="neo3" alt=""> -->
            <div class="h5">Profile For: <?=$result->name?> <?=$result->surname?> </div>
            <form action='inc/profile-update.php' method='POST'>
            <div class="row">
            <div class="col">    
                <label for="">Maiden Name</label>
                <input type="text" name="name"  class="form-control form-control-sm" value="<?=$result->name?>" >
            </div>
            <div class="col">
                <label>Maiden Surname</label>
                <input type="text" name="surname" class="form-control form-control-sm" value="<?=$result->surname?>">
            </div>
        </div>
        <div class="row">
            <div class="col">    
            <label for="address">Address</label>
                <input type="text" name="address" class="form-control form-control-sm" value="<?=$result->address?>">
            </div>
    
            <div class="col">
                <label for="age">Age</label>
                <input type="number" name="age"  class="form-control form-control-sm" value="<?=$result->age?>">
            </div>
        </div>
        <div class="row">
            <div class="col">    
                <label for="ethnicity">Ethnicity</label>

                <select name="ethnicity" id="" readonly class="form-select form-select-sm">
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

                <select name="nationality" id="" readonly class="form-select form-select-sm">
                    <option selected><?=$result->nationality?></option>
                    <option value="Zimbabwean">Zimbabwean</option>
                    <option value="South African">South African</option>
                    <option value="Zambian">Zambian</option>
                    <option value="American">American</option>
                    <option value="Nigerian">Nigerian</option>
                    <option value="Chinese">Chinese</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col">    
                <label>National Id Number</label>
                <input type="text" name="idNumber" class="form-control form-control-sm" value="<?=$result->idNumber?>">
            </div>

            <div class="col">
                <label for="">HIV Status</label>
                <select name="afterAdmission" id="afterAdmission" class='form-select form-select-sm'>
                    <option value=""><?=$result->afterAdmission?></option>
                    <option value="Negative">Negative</option>
                    <option value="Positive">Positive</option>
                </select>
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
          
          
            <label for="">Number Of Children</label>
                <input type="text"  class="form-control form-control-sm"value="<?=$children?>" readonly>
                </div>
            </div>
<br>
<input type='hidden' name='id'value='<?=$result->id?>'>
            <!-- <a  href="../edit.php?id=<?=$result->id?>" class='btn btn-success btn-sm'>Update</a>
            <button onclick="print()" class='btn btn-warning btn-sm' id='print' >Print Profile</button> -->
<input type="submit" name="update" class="btn btn-warning btn-sm form-control form-control-sm" value="Update">

        </form>
        </section>
    </body>

<?php endforeach;?>
<!-- <script>
    const printBtn=document.getElementById('print');
    printBtn.addEventListener('click',function(){
        print();
    })
</script> -->
