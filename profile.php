<?php
 include_once 'layout.view.php';
 include_once 'includes/conn.php';
 include_once('includes/functions.php');
 
//  $stmt =$pdo->prepare( "SELECT * FROM maidens WHERE idNumber=:idNumber");

$id=$_SESSION['id'];


 $sql='SELECT * FROM real_users WHERE id=:id';
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
         .con4{
            /* background:coral;    */
            margin: 10% 25%;
         }
        </style>

    <section class='con4'>
            <form action='includes/profile-update.php' method='POST'>
            <input type="hidden" name="id">
            <div class="row">
            <div class="col">    
                <label for="form-label">User Name</label>
                <input type="text" name="name" class="form-control form-control-sm" value="<?=$result->user_name?>" >
            </div>
            <div class="col">
                <label for="form-label">User Surname</label>
                <input type="text" name="surname" class="form-control form-control-sm" value="<?=$result->user_surname?>">
            </div>
        </div>
        
        <div class="row">
            <!-- <div class="col">    
                <label>National Id Number</label>
                <input type="text" name="idNumber"  class="form-control form-control-sm" value="<?=$result->idNumber?>">
            </div> -->
            <div class="col">    
                <label for="form-label">Phone Number:</label>
                <input type="text" name="phoneNumber" class="form-control form-control-sm"value="<?=$result->user_phone_number?>">
            </div>



            <div class="col">
                <label for="form-label">Email:</label>
                <input type="text" name="email" class="form-control form-control-sm" value="<?=$result->user_email?>">
            </div>

        </div>
        
        <div class="row">
            <div class="col">
           <?php $pwd= $result->user_password;
           md5($pwd);
           ?>
          
            <!-- <label for="">Password</label>
                <input type="text"  class="form-control form-control-sm" name="pwd">
                </div>
            </div> -->
<br>
            <!-- <a  href="../edit.php?id=<?=$result->id?>" class=''>Edit Profile</a> -->
            <!-- <button onclick="print()" class='btn btn-warning btn-sm' id='print' >Print Profile</button> -->
            <input type="submit" class="btn btn-success btn-sm" name="update" value="Update">

        </form>
        </section>
    <?php endforeach;?>
    </body>

<script>
    const printBtn=document.getElementById('print');
    printBtn.addEventListener('click',function(){
        print();
    })
</script>
