<?php 
 include_once '../views/layout.view.php';
 include_once '../../includes/conn.php';
 include_once '../../includes/functions.php';

$id=$_GET['id'] ?? null;

if(!$id){
    redirect('view_patients.php');
}

$sql='SELECT * FROM users WHERE id=:id';
$stmt=$pdo->prepare($sql);

$stmt->execute(['id'=> $id]);

$results=$stmt->fetchAll();

foreach($results as $result):?>

<section class="section">
        <div class="container"> 
        <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?=$result->id?>">
        <span><b> Users Details:</b></span><br>
                    <div class="row">
                        <div class="col">
                            <label for="">First Names:</label>
                            <input type="text" name="user_name" class="form-control form-control-sm" value="<?= $result->user_name?>" >
                        </div>    
                        <div class="col">
                            <label for="">Last Name:</label>
                            <input type="text" name="user_surname" class="form-control form-control-sm" value="<?= $result->user_surname?>">
                        </div>   
                    </div>                
                    
                    <div class="row">
                        <div class="col">
                            <label for="">Email:</label>
                            <input type="email" name="user_email" class="form-control form-control-sm" value="<?= $result->email?>">
                        </div>    
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="">Password:</label>
                            <input type="password" name="pwd" class="form-control form-control-sm" value="<?= $result->pwd?>">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                        <label for="">Position</label>
                            <select  class="form-select form-select-sm" name="user_work_post" required id="">
                            <option selected></option>   
                            <option value="Management"></option>
                                <option value="Midwife-Nurse">Midwife-Nurse</option>
                                <option value="System-Admin">System Administrator</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="phone number">Phone Number</label>
                            <input type="number" class="form-control form-control-sm" name="user_phone_number" placeholder="0717383038" id="">
                        </div>
                    </div>
                        <br>
                        <input type="submit" name="register" value="Register" class="btn btn-warning btn-sm">
                    <a class="btn btn-danger btn-sm" href="index.php">Cancel</a>
                    
                </form>
            </div>
        </div>
    </section>
</body>
</html>
<?php endforeach;?>