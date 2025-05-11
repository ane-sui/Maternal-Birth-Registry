<?php 
$host='localhost';
$user='root';
$password='';
$dbname="mbrs";

#SET DNS
$dns='mysql:host='.$host.';dbname='.$dbname;

#CREATE PDO INSTANCE
$pdo =new PDO($dns,$user,$password);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);

   include_once 'layout.view.php';


   // require_once 'inc/conn.php';
   include_once 'inc/functions.php';
   ensure_is_user_authenticated();
   include_once 'scripts/stats/total.admins.php';
   include_once 'scripts/stats/total.users.php';
   include_once 'scripts/stats/total.mothers.php';
   include_once 'scripts/stats/total.live.php';
   include_once 'scripts/stats/total.still.php';
   include_once 'scripts/stats/total.males.php';
   include_once 'scripts/stats/total.female.php';
   include_once 'scripts/stats/letters.php';
   
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
           <a href="views/letters.php">  <p>TOTAL BIRTH CONFIRMATION LETTERS ISSUED <h2><?=$issued?></h2></p></a>
        </div>

        <!-- <div class="btn-2 btn btn-warning">
           <a href="views/total.users.php" class="nav-link"><p>TOTAL USERS <h2><?= $users?></h2></p></a> 
        </div> -->

        <div class="btn-3 btn btn-danger">
          <a href="views/total.mothers.php"><p>TOTAL MAIDENS <h2><?= $mothers?></h2></p></a>
        </div>

        <div class="btn-3 btn btn-dark">
         <a href="views/total.live.php"><p>TOTAL LIVE BIRTHS  <h2><?= $live ?></h2></p></a>
        </div>

        <div class="btn-3 btn btn-secondary  ">
            <a href="views/total.still.php"><p>TOTAL STILL BIRTHS <h2><?= $still?></h2></p></a>
        </div>

        <div class="btn-4">
           <a href="views/total.male.php"> <p>TOTAL BOYS<h2><?= $male?></h2></p></a>
        </div>

        <div class="btn-5">
           <a href="views/total.female.php"> <p>TOTAL GIRLS <h2><?=$female?></h2></p></a>
        </div>
    </div>
</div>

<?php include_once '../footer.php';?>