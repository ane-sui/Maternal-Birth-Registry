<?php
include_once 'layout.view.php';

$host='localhost';
$user='root';
$password='';
$dbname="mbrs";

#SET DNS
$dns='mysql:host='.$host.';dbname='.$dbname;

#CREATE PDO INSTANCE
$pdo =new PDO($dns,$user,$password);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);

// AVERAGE LABOUR HOURS
$stmt =$pdo->prepare("SELECT * FROM admins ORDER BY id");
$stmt->execute();
$admins=$stmt->rowCount();


// //AVERAGE AGE 
$stmt =$pdo->prepare( "SELECT * FROM mgt ORDER BY id");
$stmt->execute();
$mgt=$stmt->rowCount();



// //DELIVERY METHODS
$stmt =$pdo->prepare( "SELECT * FROM real_users ORDER BY id");
$stmt->execute();
$users=$stmt->rowCount();

//twins vS NON TWIN
$stmt =$pdo->prepare( "SELECT * FROM maidens WHERE birthOutcome ='live'");
$stmt->execute();
$live=$stmt->rowCount();

$stmt =$pdo->prepare( "SELECT * FROM maidens WHERE birthOutcome ='still'");
$stmt->execute();
$still=$stmt->rowCount();


// //WOMEN WHO LOST MORE THAN > OF BLOOD

//CHILDREN WHO WERE BORN UNDER WEIGHT
$stmt =$pdo->prepare( "SELECT * FROM users");
$stmt->execute();
$pending=$stmt->rowCount();

$stmt =$pdo->prepare( "SELECT * FROM real_users ");
$stmt->execute();
$accepted=$stmt->rowCount();

?>


<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Data Visualization</title>
  </head>
</html>

    <div  style="width:500px; height:1000px; margin-top:10%;" class="container">
          <canvas id="a"> </canvas>
    </div>
    <div  style="width:500px; height:1000px; margin-top:10%;" class="container">
          <canvas id="b"> </canvas>
    </div>

 <script src="../../css/chart.js"></script>

<script>
  //MALE VS FEMALE CHILDREN
  const a = document.getElementById('a');
  new Chart(a, {
    type: 'bar',
    data: {
      labels: ['Accepted','Pending'],
      datasets: [{
        label: 'users requests',
        data:
        [
          <?=$accepted?>,
          <?=$pending?>,
           ],
        backgroundColor: [
    //   'rgba(255, 99, 132, 0.2)',
    //   'rgba(255, 159, 64, 0.2)',
    //   'rgba(255, 205, 86, 0.2)',
      'rgba(75, 192, 192, 0.2)',
    //   'rgba(54, 162, 235, 0.2)',
      'rgba(153, 102, 255, 0.2)',
    //   'rgba(201, 203, 207, 0.2)'
    ],
    borderColor: [
    //   'rgb(255, 99, 132)',
    //   'rgb(255, 159, 64)',
    //   'rgb(255, 205, 86)',
      'rgb(75, 192, 192)',
    //   'rgb(54, 162, 235)',
      'rgb(153, 102, 255)',
    //   'rgb(201, 203, 207)'
    ],
        borderWidth: 1
      }]
    },
    options: {
      plugins: {
      title: {
        display: true,
        text: 'Marital Status Of Maidens',
      }
    },
      scales: {
        y: {
          beginAtZero: false
        }
      }
    }
   
  });
  //MALE VS FEMALE CHILDREN
  const b = document.getElementById('b');
  new Chart(b, {
    type: 'bar',
    data: {
      labels: ['Admins','Management','Users'],
      datasets: [{
        label: 'System Users',
        data:
        [
          <?=$admins?>,
          <?=$mgt?>,
          <?=$users?>,

           ],
        backgroundColor: [
      'rgba(255, 99, 132, 0.2)',
      'rgba(255, 159, 64, 0.2)',
      'rgba(255, 205, 86, 0.2)',
      'rgba(75, 192, 192, 0.2)',
      'rgba(54, 162, 235, 0.2)',
      'rgba(153, 102, 255, 0.2)',
      'rgba(201, 203, 207, 0.2)'
    ],
    borderColor: [
      'rgb(255, 99, 132)',
      'rgb(255, 159, 64)',
      'rgb(255, 205, 86)',
      'rgb(75, 192, 192)',
      'rgb(54, 162, 235)',
      'rgb(153, 102, 255)',
    //   'rgb(201, 203, 207)'
    ],
        borderWidth: 1
      }]
    },
    options: {
      plugins: {
      title: {
        display: true,
        text: 'Marital Status Of Maidens',
      }
    },
      scales: {
        y: {
          beginAtZero: false
        }
      }
    }
   
  });


</script>
<?php include_once '../../footer.php'?>