<?php
   include_once 'layout.view.php';
   include_once '../../includes/conn.php';
   include_once '../../includes/functions.php';
   ensure_is_user_authenticated();
   
   $host='localhost';
   $user='root';
   $password='';
   $dbname="mbrs";
   
   #SET DNS
   $dns='mysql:host='.$host.';dbname='.$dbname;
   
   #CREATE PDO INSTANCE
   $pdo =new PDO($dns,$user,$password);
   $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
   
   // TOTAL NUMBER OF USERS IN SYTEM 
   $stmt =$pdo->prepare( "SELECT * FROM admins ORDER BY id");
   $stmt->execute();
   $admins=$stmt->rowCount();

   $stmt =$pdo->prepare( "SELECT * FROM real_users ORDER BY id");
   $stmt->execute();
   $users=$stmt->rowCount();

   $stmt =$pdo->prepare( "SELECT * FROM mgt ORDER BY id");
   $stmt->execute();
   $mgt=$stmt->rowCount();




?>
<div class="index">
   </div>
<title>Admin Dashboard</title>

<section class="index">
    <div class="index-img " >
        <img src="../../img/img.jpg" alt="" >
    </div>

</section>


<div class="panda">
   <div class="gridz">
      <div  class="btn-1 btn btn-success">
         <a href="total.admins.php">  <p>TOTAL ADMINS <h2><?=$admins ?></h2></p></a>
      </div>

      <div class="btn-2 btn btn-warning">
         <a href="total.users.php" class="nav-link"><p>TOTAL USERS <h2><?= $users?></h2></p></a> 
      </div>

      <div class="btn-3 btn btn-danger">
         <a href="total-mgt.php"><p>TOTAL MANAGEMENT <h2><?= $mgt?></h2></p></a>
      </div>
   </div>
</div>

<?php include_once '../../footer.php';?>