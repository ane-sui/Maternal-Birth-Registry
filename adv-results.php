<?php 
include_once 'includes/conn.php';
include_once 'layout.view.php';
include_once 'includes/functions.php';
ensure_is_user_authenticated();


if(isset($_POST['submit']))
{
    $input = clean($_POST);

    $name=$_POST['name'];
    $surname=$_POST['surname'];

    $deliveryDate=$_POST['deliveryDate'];

    $sql="SELECT * FROM maidens WHERE name =:name AND deliveryDate =:deliveryDate AND surname =:surname";

    $stmt=$pdo->prepare($sql);

    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':surname', $surname);
    $stmt->bindParam(':deliveryDate', $deliveryDate);

    $stmt->execute();
    $output=$stmt->fetchAll();

}?>

   <?php if (empty($output)){
    redirect("search.view.php?search=empty&name=$name&surname=$surname");
    exit();
   }?>
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
    <section class="<?php if($out->sex=='male'||$out->sex=='male'){echo 'boy';}elseif ($out->sex=='female'||$out->sex=='female'){echo "girl";}?>">  
    <div style="margin-left:80%; font-size: smaller; "; ><?='GKSDH-000'.$out->id?></div>
    <h4  style="margin-left:10%">BIRTH CONFIRMATION RECORD CERTIFICATE</h4> 
    <img src="img/arms.jpg" style="margin-left:35%;margin-top:2%; padding-left:10px; padding-right:30px;" class="neo5" alt="">
    <!-- <br> -->
        <!-- <div class="container">  -->
        <div class="maiden">         
        <hr>    
                   <h6 style="margin-left:260px;" >Maiden's Details</h6>
                <div class="row">
                    <div class="col">
                        <b>Name:</b> <?=$out->name?>
                    </div>
                    <div class="col">
                        <b>Surname:</b> <?=$out->surname?>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <b>Age:</b> <?=$out->age?></span>
                    </div>
                    <div class="col">
                        <b>Address:</b> <?=$out->address?></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <b>ID Number:</b> <?=$out->idNumber?></span>
                    </div>
                    <div class="col">
                        <b>Marital Status:</b> <?=$out->maritalStatus?> </span>                  
                    </div>
                </div>
                <hr>    
                <h6 style="margin-left:260px;">  Child's Details </h6>
                <div class="row">
                    <div class="col">
                        <b>Child's Weight:</b> <?=$out->childWeight?> gramme</span>
                    </div>
                    <div class="col">
                        <b>Delivery Date:</b> <?=$out->deliveryDate?></span>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <b>Sex:</b> <?=$out->sex?> gramme</span>
                    </div>
                    <div class="col">
                        <b>Child's Name:</b> <?=$out->childName?></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <b>Birth Facility:</b> <?=$out->birthPlace?></span>
                    </div>
                    <div class="col">
                        <b>Twin Status:</b> <?=$out->twinStatus?></span>
                    </div>
                </div>
            </div>  

                <div class="row">
                    <div class="col">

                    </div>
                    <div class=""></div>
                </div>
        </section>
        <!-- <a href="http://"></a> -->
        <input id="print" style="margin-left: 49%; margin-top:9%;" type="button" value="Issue" class="btn btn-warning btn-sm">
    <?php endforeach;?>
    
    </div>
</body>
<script>
    const printBtn=document.getElementById('print');
    printBtn.addEventListener('click',function(){
        print();
    })
</script>
