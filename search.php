<?php include_once 'includes/conn.php';
include_once 'layout.view.php';
include_once 'includes/functions.php';
ensure_is_user_authenticated();


if(isset($_POST['submit']))
{
    $input = clean($_POST);
    $search=$_POST['search'];

    $sql="SELECT * FROM maidens WHERE idNumber  LIKE ?";

    $stmt=$pdo->prepare($sql);
    $stmt->execute(array($search));
    $output=$stmt->fetchAll();
}?>
   <?php if (empty($output)){
    redirect("search.view.php?search=empty&search=$search");
    exit();
   }?>
    <?php foreach($output as $out):?>
        <title>Search Results</title>
<!-- Navigation   -->
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
    .con, .con * {
        display:block;
    }
}
</style>

<body>
    <div class="con">
    <section class="<?php if($out->sex=='male'||$out->sex=='male'){echo 'boy';}elseif ($out->sex=='female'||$out->sex=='female'){echo "girl";}?>">  
            <div class="container"> 
                <div style="margin-left:79%; padding-left:10px;padding-right:30px; font-weight:600;" class="rec-number"><?='GKSDH-000'.$out->id?></div>
                <p  style="margin-left:7%; padding-left:10px; padding-right:30px;"><b>BIRTH CONFIRMATION RECORD CERTIFICATE </b></p>
                <img src="img/arms.jpg" style="margin-left:38%; padding-left:10px; padding-right:30px;" class="neo2" alt="">
                        <form action="includes/issued.php" method="post">
                            <br>
                            <input type="hidden" name="mId" value="<?=$out->id?>">
                        <u style="margin-left:40%; padding-left:10px; padding-right:30px;"><b>Mother's Details</b></u>
                        <br>
                            <div class="row">
                                <div class="col">
                                    <label for="">Maiden Surname</label>
                                    <input class="form-control form-control-sm"readonly name="surname"  value="<?= $out->surname ?>">
                                </div>   
                                <div class="col">
                                    <label for="">Maiden Name</label>
                                    <input type="text" name="name" class="form-control form-control-sm" readonly  value="<?= $out->name ?>">
                                </div>    
                            </div>                
                            <div class="row">
                                <div class="col">
                                    <label for="">National Identification Number</label>
                                    <input type="text" name="idNumber" class="form-control form-control-sm" readonly value="<?= $out->idNumber ?>">
                                </div>    
                                <div class="col">
                                    <label for="">Physical Address</label>
                                    <input type="text" name="address" class="form-control form-control-sm" readonly  value="<?= $out->address ?>">
                                </div>
                            </div>
                            <div class="row">                        
                                <div class="col">
                                    <label for="">Age</label>
                                    <input name="age" class="form-control form-control-sm"readonly  value="<?= $out->age?>">
                                </div>
                                <div class="col">
                                <label for="">Marital Status</label>
                                    <input name="maritalStatus" class="form-control form-control-sm"readonly  value="<?= $out->maritalStatus?>">
                                </div>
                            </div>
                            <br>
                            <u style="margin-left:40%; padding-left:10px;padding-right:30px;" ><b>Child's Details</b></u>
                            <div class="row">
                                <div class="col">
                                    <label for="">Date Of Birth</label>
                                    <input type="text" name="deliveryDate"  class="form-control form-control-sm" readonly  value="<?= $out->deliveryDate ?>">
                                </div>
        
                                <div class="col">
                                    <label for="">Weight (grams)</label>
                                    <input type="text" name="weight" class="form-control form-control-sm"readonly  value="<?= $out->childWeight ?>">
                                </div>
                            </div>

                            <div class="row">                        
                                <div class="col">
                                    <label for="">Sex</label>
                                    <input name="sex" class="form-control form-control-sm"readonly  value="<?= $out->sex ?>">
                                </div>
                                
                                <div class="col">
                                    <label for="">Birth Facility</label>
                                    <input type="text" name="birthPlace" class="form-control form-control-sm" readonly  value="<?= $out->birthPlace?>" >
                                </div>
                            </div>
                        <div class="row">
                            <div class="col">
                                <label for="">Twin Status</label>
                                <input type="text" name="twinStatus" value="<?= $out->twinStatus?>" readonly class="form-control form-control-sm">
                            </div>
                            
                            <div class="col">
                            <label for="">Name Of Child</label> 
                            <input type="text" name="childName" id="" value="<?= $out->childName ?>" class="form-control form-control-sm" readonly>
                            </div>
                        </div>
                    <div class="row">
                            <div class="col">
                                <label for="">Issued_by</label>
                                <input type="text" name="issuedBy" class="form-control form-control-sm" readonly value="<?=$_SESSION['name']." ".$_SESSION['surname'] ?>">
                            </div>
                            <div class="col">
                                <label for="">Date of issuance: </label>
                                <input type="text" name="issueDate" class="form-control form-control-sm" readonly value="<?=date('Y-m-d H:i:sa')?>" >
                            </div>
                            </div>
                                <br>
                                <input id="print" type="submit" name="issued" value="Issue" style="margin-left:45%; padding-left:10px;padding-right:30px;" class="btn btn-primary btn-sm">

                            </div>
                    </form>

                    <?php endforeach;?>
            </div>
        </div>

    </section>

</body>
<!-- <?php include_once 'footer.php';?> -->
<script>
    const printBtn=document.getElementById('print');
    printBtn.addEventListener('click',function(){
        print();
    })
</script>
