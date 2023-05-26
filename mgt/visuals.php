<?php
include_once 'inc/conn.php';
include_once 'inc/functions.php';
include_once 'layout.view.php';

// AVERAGE LABOUR HOURS
// $stmt =$pdo->prepare("SELECT * FROM admins ORDER BY id");
// $stmt->execute();
// $=$stmt->rowCount();


// //AVERAGE AGE 
// $stmt =$pdo->prepare( "SELECT * FROM admins ORDER BY id");
// $stmt->execute();
// $=$stmt->rowCount();



// //DELIVERY METHODS
// $stmt =$pdo->prepare( "SELECT * FROM admins ORDER BY id");
// $stmt->execute();
// $=$stmt->rowCount();




//twins vS NON TWIN
$stmt =$pdo->prepare( "SELECT * FROM maidens WHERE twinStatus ='Twin'");
$stmt->execute();
$twin=$stmt->rowCount();

$stmt =$pdo->prepare( "SELECT * FROM maidens WHERE twinStatus =''");
$stmt->execute();
$nonTwin=$stmt->rowCount();


// //LIVE VS STILL BIRTHS

$stmt =$pdo->prepare( "SELECT * FROM maidens WHERE birthOutcome ='live'");
$stmt->execute();
$live=$stmt->rowCount();

$stmt =$pdo->prepare( "SELECT * FROM maidens WHERE birthOutcome ='still'");
$stmt->execute();
$still=$stmt->rowCount();


// //WOMEN WHO LOST MORE THAN > OF BLOOD

//CHILDREN WHO WERE BORN UNDER WEIGHT
$stmt =$pdo->prepare( "SELECT * FROM maidens WHERE childWeight < 2500");
$stmt->execute();
$underWeight=$stmt->rowCount();

$stmt =$pdo->prepare( "SELECT * FROM maidens WHERE childWeight BETWEEN 2500 AND 4000 ");
$stmt->execute();
$normalWeight=$stmt->rowCount();

$stmt =$pdo->prepare( "SELECT * FROM maidens WHERE childWeight > 3000");
$stmt->execute();
$overWeight=$stmt->rowCount();

//MAIDEN AGES 
$stmt =$pdo->prepare( "SELECT * FROM maidens WHERE age < 15");
$stmt->execute();
$underAge=$stmt->rowCount();

$stmt =$pdo->prepare( "SELECT * FROM maidens WHERE age BETWEEN 16 AND 35 ");
$stmt->execute();
$normalAge=$stmt->rowCount();

$stmt =$pdo->prepare( "SELECT * FROM maidens WHERE age > 35");
$stmt->execute();
$old=$stmt->rowCount();

//EDUCATION OF MAIDENS
$stmt =$pdo->prepare( "SELECT * FROM maidens WHERE education ='none'");
$stmt->execute();
$none=$stmt->rowCount();

$stmt =$pdo->prepare( "SELECT * FROM maidens WHERE education ='Primary' ");
$stmt->execute();
$primary=$stmt->rowCount();

$stmt =$pdo->prepare( "SELECT * FROM maidens WHERE education ='Secondary'");
$stmt->execute();
$secondary=$stmt->rowCount();

$stmt =$pdo->prepare( "SELECT * FROM maidens WHERE education ='tertiary'");
$stmt->execute();
$tertiary=$stmt->rowCount();

$stmt =$pdo->prepare( "SELECT * FROM maidens WHERE education ='elementary'");
$stmt->execute();
$elementary=$stmt->rowCount();


//POSITIVE
// $stmt =$pdo->prepare( "SELECT * FROM maidens WHERE onAdmission='positive' AND childHIVStatus='positive'");
// $stmt->execute();
// $positivePositive=$stmt->rowCount();

// //NEGATIVE
// $stmt =$pdo->prepare( "SELECT * FROM maidens WHERE onAdmission='positive' AND childHIVStatus='negative'");
// $stmt->execute();
// $positiveNegative=$stmt->rowCount();

// //NEGATIVE-POSITIVE
// $stmt =$pdo->prepare( "SELECT * FROM maidens WHERE onAdmission='negative' AND childHIVStatus='negative'");
// $stmt->execute();
// $negativeNegative=$stmt->rowCount();

// //POSITIVE-NEGATIVE
// $stmt =$pdo->prepare( "SELECT * FROM maidens WHERE onAdmission='negative' AND childHIVStatus='positive'");
// $stmt->execute();
// $negativePositive=$stmt->rowCount();

//BIRTH DATES
$stmt =$pdo->prepare( "SELECT * FROM maidens WHERE deliveryDate BETWEEN '2023-01-01' AND '2023-01-31';");
$stmt->execute();
$jan=$stmt->rowCount();

//JANUARY
$stmt =$pdo->prepare( "SELECT * FROM maidens WHERE deliveryDate BETWEEN '2023-02-01' AND '2023-02-28';");
$stmt->execute();
$feb=$stmt->rowCount();

//JANUARY
$stmt =$pdo->prepare( "SELECT * FROM maidens WHERE deliveryDate BETWEEN '2023-03-01' AND '2023-03-31';");
$stmt->execute();
$mar=$stmt->rowCount();

//JANUARY

$stmt =$pdo->prepare( "SELECT * FROM maidens WHERE deliveryDate BETWEEN '2023-04-01' AND '2023-04-30';");
$stmt->execute();
$apr=$stmt->rowCount();

$stmt =$pdo->prepare( "SELECT * FROM maidens WHERE deliveryDate BETWEEN '2023-05-01' AND '2023-05-30';");
$stmt->execute();
$may=$stmt->rowCount();

$stmt =$pdo->prepare( "SELECT * FROM maidens WHERE deliveryDate BETWEEN '2023-06-01' AND '2023-06-30';");
$stmt->execute();
$june=$stmt->rowCount();

$stmt =$pdo->prepare( "SELECT * FROM maidens WHERE deliveryDate BETWEEN '2023-07-01' AND '2023-07-31';");
$stmt->execute();
$july=$stmt->rowCount();


$stmt =$pdo->prepare( "SELECT * FROM maidens WHERE deliveryDate BETWEEN '2023-08-01' AND '2023-08-31';");
$stmt->execute();
$aug=$stmt->rowCount();


$stmt =$pdo->prepare( "SELECT * FROM maidens WHERE deliveryDate BETWEEN '2023-09-01' AND '2023-09-30';");
$stmt->execute();
$sept=$stmt->rowCount();


$stmt =$pdo->prepare( "SELECT * FROM maidens WHERE deliveryDate BETWEEN '2023-10-01' AND '2023-01-31';");
$stmt->execute();
$oct=$stmt->rowCount();


$stmt =$pdo->prepare( "SELECT * FROM maidens WHERE deliveryDate BETWEEN '2023-11-01' AND '2023-11-30';");
$stmt->execute();
$nov=$stmt->rowCount();


$stmt =$pdo->prepare( "SELECT * FROM maidens WHERE deliveryDate BETWEEN '2023-12-01' AND '2023-12-31';");
$stmt->execute();
$dec=$stmt->rowCount();







// MARRIED DIVORCED SINGLE
//SINGLE
$stmt =$pdo->prepare( "SELECT * FROM maidens WHERE maritalStatus='single'");
$stmt->execute();
$single=$stmt->rowCount();

//MARRIED
$stmt =$pdo->prepare( "SELECT * FROM maidens WHERE maritalStatus='married'");
$stmt->execute();
$married=$stmt->rowCount();

//DIVORCED
$stmt =$pdo->prepare( "SELECT * FROM maidens WHERE maritalStatus='divorced'");
$stmt->execute();
$divorced=$stmt->rowCount();
//WIDOWED
$stmt =$pdo->prepare( "SELECT * FROM maidens WHERE maritalStatus='widowed'");
$stmt->execute();
$widowed=$stmt->rowCount();

 
//BIRTH FACILITY vs BIRTH FACILITY
$stmt =$pdo->prepare( "SELECT * FROM maidens WHERE sex ='Female'");
$stmt->execute();
$female=$stmt->rowCount();

$stmt =$pdo->prepare( "SELECT * FROM maidens WHERE sex ='male'");
$stmt->execute();
$male=$stmt->rowCount();

//AVERAGE AGE OF MAIDENS
$sql = 'SELECT AVG(age) AS avg_age FROM maidens';
$stmt = $pdo->prepare($sql);

$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);

 $avg= $result['avg_age'];


//AVERAGE WEIGHT 
$sql = 'SELECT AVG(childWeight) AS avgWeight FROM maidens';
$stmt = $pdo->prepare($sql);

$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);

$avgWeight= $result['avgWeight'];

$sql = 'SELECT AVG(labor) AS labor FROM maidens';
$stmt = $pdo->prepare($sql);

$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);

$labor= $result['labor'];
$sql = 'SELECT AVG(labor) AS labor FROM maidens';
$stmt = $pdo->prepare($sql);

$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);
$labor= $result['labor'];


?>


<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Data Visualization</title>
  </head>
</html>

<div class="card">
  <div class="card-body">
    <div class="container">
      <div class="row mb-4">
          <div class="col-md-4">
          <canvas id="a"> </canvas>
          </div>

          <div class="col-md-4">
          <canvas id="b"> </canvas>
          </div>

          <div class="col-md-4">
          <canvas id="c"> </canvas>
          </div>
      </div>

      <div class="row mt-5">
          <div class="col-md-4 mt-4">
            <canvas id="d"> </canvas>
          </div>

          <div class="col-md-4">
            <canvas id="e"></canvas>
          </div>

          <div class="col-md-4 c">
            <canvas id="f"> </canvas>
          </div>
        </div>
    </div>
  </div>
</div>

 <script src="../css/chart.js"></script>

<script>
  //MALE VS FEMALE CHILDREN
  const a = document.getElementById('a');
  new Chart(a, {
    type: 'bar',
    data: {
      labels: ['Single', 'Married','Divorced','Widowed'],
      datasets: [{
        label: '',
        data:
        [
          <?=$single?>,
          <?=$married?>,
          <?=$divorced?>,
          <?=$widowed?>
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
      'rgb(201, 203, 207)'
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
          beginAtZero: true
        }
      }
    }
   
  });

  let b = document.getElementById('b');
  new Chart(b, {
    type: 'bar',
    data: {
      labels: ['Under Weight (<2500)', 'Normal Weight (2500-4000)','Over Weight(>4000)'],
      datasets: [{
        label: 'Number Of Children',
        data:
        [
          <?=$underWeight?>,
          <?=$normalWeight?>,
          <?=$overWeight?>,
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
      'rgb(201, 203, 207)'
    ],
        borderWidth: 1
      }]
    },
    options: {
      plugins: {
      title: {
        display: true,
        text: 'Weight of Children Born',
      },
      subtitle: {
        display: true,
        text: 'Average Weight is <?=$avgWeight?> gramms'
      }
    }
    
    }
  });

  let c = document.getElementById('c');
  new Chart(c, {
    type: 'bar',
    data: {
      labels: ['<15', '16 - 35',' > 35'],
      datasets: [{
        label: 'Age of Maidens',
        data:
        [
          <?=$underAge?>,
          <?=$normalAge?>,
          <?=$old?>,
         
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
      'rgb(201, 203, 207)'
    ],
        borderWidth: 1
      }]
    },
    options: {
    
    plugins: {
      title: {
        display: true,
        text: 'Age Distribution Of Maidens',
      },
      subtitle: {
        display: true,
        text: 'Average Age is <?=$avg?> years'
      }
    }
  }
  });

let d = document.getElementById('d');
  new Chart(d, {
    type: 'line',
    data: {
    labels: ['January', 'February','March','April','May','June','July','August','September','October','November','December'],
  datasets: [{
        label: 'Months',
        data:
        [
          <?=$jan?>,
          <?=$feb?>,
          <?=$mar?>,
          <?=$apr?>,
          <?=$may?>,
          <?=$june?>,
          <?=$july?>,
          <?=$aug?>,
          <?=$sept?>,
          <?=$oct?>,
          <?=$nov?>,
          <?=$dec?>
         
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
      'rgb(201, 203, 207)'
    ],
        borderWidth: 1
      }]
    },
    options: {
    plugins: {
      title: {
        display: true,
        text: 'Sexual Distribution Of Children Born',
      }
    }
  }
  });

  let e = document.getElementById('e');
  new Chart(e, {
    type: 'pie',
    data: {
      labels: ['Female', 'Male'],
      datasets: [{
        label: 'Sex',
        data:
        [
          <?=$female?>,
          <?=$male?>,
         
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
      'rgb(201, 203, 207)'
    ],
        borderWidth: 1
      }]
    },
    options: {
    plugins: {
      title: {
        display: true,
        text: 'Sexual Distribution Of Children Born',
      }
    }
  }
  });

  let f = document.getElementById('f');
  new Chart(f, {
    type: 'doughnut',
    data: {
      labels: ['None','Elementary', 'Primary','Secondary','Tertiary'],
      datasets: [{
        label: 'Level of Education',
        data:
        [
          <?=$none?>,
          <?=$primary?>,
          <?=$secondary?>,
          <?=$tertiary?>,
          <?=$elementary?>,
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
      'rgb(201, 203, 207)'
    ],
        borderWidth: 1
      }]
    },
    options: {
      plugins: {
      title: {
        display: true,
        text: 'Maidens\' Level Of Education ',
      }
    },
     
    }
  });

</script>