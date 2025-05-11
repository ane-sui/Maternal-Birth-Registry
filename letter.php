<?php include_once 'includes/conn.php';
include_once 'layout.view.php';
include_once 'includes/functions.php';
ensure_is_user_authenticated();


// if(isset($_POST['submit']))
// {
//     $input = clean($_POST);
//     $search=$_POST['search'];

//     $sql="SELECT * FROM issued WHERE idNumber  LIKE ? LIMIT 1";

//     $stmt=$pdo->prepare($sql);
//     $stmt->execute(array($search));
//     $output=$stmt->fetchAll();
// }

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

    }
?>

   <?php if (empty($output)){
    redirect("search.view.php?search=empty&search=$search");
    exit();
   }?>
    <?php foreach($output as $out):?>
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
    .con2, .con2 * {
        display:block;
    }
}
</style>

        <title>Search Results</title>
<!-- Navigation   -->
<body>
    
<!-- <div class="cert"> -->
    <!-- <div id="content"> -->
    <section class="con2">  
    <img src="img/head.jpg" style="margin-left:-2%;margin-top:2%; padding-left:10px; padding-right:30px;" class="neo" alt="">
            <!-- <div class="container">  -->
                <article class="left">
                        <p>Date: <?=date('d / m / y')?></p>
                        <p>The Registrar General</p>
                        <p>Gokwe</p>
                        <p>Dear Sir/Madam</p> 
                        <br>
                        <p class="ref"></p><b>REF: BIRTH CONFIRMATION LETTER FOR: <?= $out->surname?> <?= $out->name?>   </b></p>
                        <p><b>NATIONAL ID NUMBER : <?= $out->idNumber?> </b></p>
                </article>
                <article style="font-size:small;">
                        <p>The above mentioned is claiming to have given birth at <?=$out->birthPlace?> on the  <?=$out->deliveryDate?>. Unfortunately the maiden has lost the original copy of the certificate.  </p>
                        <p>May you kindly assist her</p>
                        <p>Regards</p>
                        <p><?=$_SESSION['name']." ".$_SESSION['surname'] ?></p>
                </article>
            
                    <?php endforeach;?>
                  
            <!-- </div> -->
    </section>
    <input id="print" style="margin-left: 45%;" type="button" value="Print" class="btn btn-warning btn-sm">

</body>




<script>
    const printBtn=document.getElementById('print');
    printBtn.addEventListener('click',function(){
        print();
    })
</script>


    <!-- <?php include_once 'footer.php';?> -->
