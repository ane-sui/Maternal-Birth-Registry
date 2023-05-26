<?php
   include_once '../layout.view.php';
   include_once '../../includes/conn.php';
   include_once '../../includes/functions.php';
   // ensure_is_user_authenticated();
   include_once '../scripts/stats/total.admins.php';
   include_once '../scripts/stats/total.users.php';
   include_once '../scripts/stats/total.mothers.php';
   include_once '../scripts/stats/total.live.php';
   include_once '../scripts/stats/total.still.php';
   include_once '../scripts/stats/total.males.php';
   include_once '../scripts/stats/total.female.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
<title> Management Dashboard </title>



<div class="index">
   </div>
      <section class="index">
    <div class="index-img " >
        <img src="../../img/img.jpg" alt="" >
    </div>
</section>


<div class="panda">
    <div class="gridz">
        <div  class="btn-1 btn btn-success">
           <a href="total.admins.php">  <p>TOTAL ADMINS <h2><?=$row ?></h2></p></a>
        </div>

        <div class="btn-2 btn btn-warning">
           <a href="total.users.php" class="nav-link"><p>TOTAL USERS <h2><?= $users?></h2></p></a> 
        </div>

        <div class="btn-3 btn btn-danger">
          <a href="total.mothers.php"><p>TOTAL MOTHERS <h2><?= $mothers?></h2></p></a>
        </div>
        <div class="btn-3 btn btn-dark">
         <a href="total.live.php"><p>TOTAL LIVE BIRTHS  <h2><?= $live ?></h2></p></a>
        </div>

        <div class="btn-3 btn btn-secondary  ">
            <a href="total.still.php"><p>TOTAL STILL BIRTHS <h2><?= $still?></h2></p></a>
        </div>

        <div class="btn-4">
           <a href="total.male.php"> <p>TOTAL BOYS<h2><?= $male?></h2></p></a>
        </div>

        <div class="btn-5">
           <a href="total.female.php"> <p>TOTAL GIRLS <h2><?=$female?></h2></p></a>
        </div>
    </div>
</div>

<?php include_once '../../footer.php';?>