<?php
include_once 'nav.php';


include_once '../inc/conn.php';
include_once '../inc/functions.php';

$sql='SELECT * FROM maidens WHERE sex="male" ORDER BY id ';
$stmt=$pdo->prepare($sql);
$stmt->execute();
$results=$stmt->fetchAll();?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
<title> Total Users </title>

  
<section class="view">
    <table class=" alert-info table table-bordered table-warning"  >
    <thead class=" alert-info" >
        <tr>
            <th >Maiden Name</th >
            <th>Maiden Surname</th>
            <th>Maiden Address</th>
            <th>Sex Of Child </th>
            <th>Weight Of Child</th>

        </tr >
    </thead >
    <tbody  class="border-1 alert-info">
        <?php foreach($results as $result):?>
        <tr>
            <td><?=$result->name?></td >
            <td><?=$result->surname?></td>
            <td><?=$result->address?></td>
            <td><?=$result->sex?></td>
            <td><?=$result->weight?></td>
            
            <!-- <td>
                <form style="display: inline-block;" method="POST" action="../scripts/delete.php">
                    <input type="hidden" name="id" value="<?=$result->id?>">
                    <input type="submit" class="btn btn-secondary btn-sm" name="delete" value="Delete" >
                </form>
            </td> -->
        </tr>
        <?php endforeach;?>
    </tbody>
    </table>
</section>
<?php include_once '../../footer.php';?>


    
