<?php 
include_once 'includes/conn.php';
include_once 'includes/functions.php';
include_once 'layout.view.php';
$id=$_GET['id'] ?? null;

if(!$id){
    redirect('view_patients.php');
}

$sql='SELECT * FROM real_users WHERE id=:id';
$stmt=$pdo->prepare($sql);

$stmt->execute(['id'=> $id]);

$results=$stmt->fetchAll();
foreach($results as $result):?>
<section class="reg-form">
    <div class="container"> 
        <form action="includes/update.inc.php" method="post">
                <input type="hidden" name="id" value="<?=$result->id?>">

        <span><b> Mother's Details:</b></span><br>
                    <div class="row">
                        <div class="col">
                            <label for="">Surname:</label>
                            <input type="text" name="surname" class="form-control form-control-sm"  value=<?=$result->surname?> placeholder="Enter Maiden Surname">
                        </div>   
                        <div class="col">
                            <label for="">Name:</label>
                            <input type="text" name="name"  value=<?=$result->name?> class="form-control form-control-sm" placeholder="Enter Maiden Name">
                        </div>    
                    </div>                
                        <div class="row">
                            <div class="col">
                                <label for="">Email:</label>
                                <input type="text" name="hos_number" value=<?=$result->hos_number?> class="form-control form-control-sm">
                            </div>   
                        <div class="col">
                            <label for="">Post:</label>
                            <input type="text" name="delivered_by" class="form-control form form-control-sm" value=<?=$result->delivered_by?>  >
                        </div>    
                       
                    </div>                
                    </div>
                    <br>
                        <input type="submit" name="update" value="Update" class="btn btn-warning btn-sm">
                    <a class="btn btn-danger btn-sm" href="home.php">Cancel</a>
                </form>
            </div>
        </div>
    </section>
<?php endforeach;?>

<?php include_once 'footer.php';?>