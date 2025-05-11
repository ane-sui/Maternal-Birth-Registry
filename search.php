<?php 
include_once 'includes/conn.php';
include_once 'layout.view.php';
include_once 'includes/functions.php';
ensure_is_user_authenticated();


if(isset($_POST['submit']))
{
    $input = clean($_POST);
    $idNumber=$_POST['idNumber'];
    $deliveryDate=$_POST['deliveryDate'];
    $sql="SELECT * FROM maidens WHERE idNumber =:idNumber AND deliveryDate =:deliveryDate";

    $stmt=$pdo->prepare($sql);

    $stmt->bindParam(':idNumber', $idNumber);
    $stmt->bindParam(':deliveryDate', $deliveryDate);

    $stmt->execute();
    $output=$stmt->fetchAll();

}?>

   <?php if (empty($output)){
    redirect("search.view.php?search=empty&search=$idNumber");
    exit();
   }
   ?>
    <?php foreach($output as $out):?>
        <title>Birth Confirmation Record Certificate</title>
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
    .bc, .bc * {
        display:block;
    }
}
.box{
    /* display:inline-block; */
    margin: 0 50px; 

}
.a{
margin-left: auto;
}


</style>

<body>


<div class="bc">
<form >

<section class="<?php if($out->sex=='male'||$out->sex=='male'){echo 'boy';}elseif ($out->sex=='female'||$out->sex=='female'){echo "girl";}?>">  
    <div style="margin-left:80%; font-size: smaller; "; ><?='GKDH-000'.$out->id?></div>
    <h5  style="margin-left:20%">BIRTH CONFIRMATION RECORD CERTIFICATE</h5>
    <img src="img/arms.jpg" style="margin-left:35%;margin-top:2%; padding-left:10px; padding-right:30px;" class="neo5" alt="">
                   <h6 style="margin-left:300px; margin-top:20px;" >Maiden's Details</h6>
                <div class='bod'>
                <div class="row">
                    <div class="col">
                        <label >Name</label>
                        <input type="text" name="name" value="<?=$out->name?>" class="form-control form-control-sm">
                    </div>
                    <div class="col">
                        <label >Name</label>
                        <input type="text" name="surname" value="<?=$out->surname?>" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label >Age</label>
                        <input type="text" name="age" value="<?=$out->age?>" class="form-control form-control-sm">
                    </div>
                    <div class="col">
                        <label >Address</label>
                        <input type="text" name="address" value="<?=$out->address?>" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label >ID Number:</label>
                        <input type="text" name="IdNumber" value="<?=$out->idNumber?>" class="form-control form-control-sm">
                    </div>
                    <div class="col">
                        <label >Marital Status:</label>
                        <input type="text" name="maritalStatus" value="<?=$out->maritalStatus?>" class="form-control form-control-sm">                
                    </div>
                </div>
                <hr>    
                <h6 style="margin-left:260px;">Child's Details </h6>
                <div class="row">
                    <div class="col">
                        <label>Child's Weight:</label> 
                        <input type="text" name="weight" value="<?=$out->childWeight?>" class="form-control form-control-sm"> 
                    </div>
                    <div class="col">
                        <label>Delivery Date:</label> 
                        <input type="text" name="deliveryDate" value="<?=$out->deliveryDate?>" class="form-control form-control-sm"> 
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label>Sex:</label>
                        <input type="text" name="sex" value="<?=$out->sex?>" class="form-control form-control-sm"> 
                    </div>
                    <div class="col">
                        <label>Child's Name:</label>
                        <input type="text" name="childName" value="Baby <?=$out->childName?>" class="form-control form-control-sm"> 
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label>Birth Facility:</label>
                        <input type="text" name="deliveryDate" value="<?=$out->birthPlace?>" class="form-control form-control-sm"> 
                    </div>
                    <div class="col">
                        <label>Twin Status:</label> 
                        <input type="text" name="deliveryDate" value="<?=$out->twinStatus?>" class="form-control form-control-sm"> 
                    </div>
                </div>
            </div>  
            </div>
        </section>
        <input id="print" style="margin-left: 49%; margin-top:10px;" type="button" value="Issue" class="btn btn-warning btn-sm">
    <?php endforeach;?>
    </form>
    </div>
</body>
<script>
    const printBtn=document.getElementById('print');
    printBtn.addEventListener('click',function(){
        print();
    })
</script>
