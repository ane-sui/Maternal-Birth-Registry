<?php
include_once 'nav.php';

include_once '../inc/conn.php';
include_once '../inc/functions.php';

$sql='SELECT * FROM issued';
$stmt=$pdo->prepare($sql);
$stmt->execute();
$results=$stmt->fetchAll();?>
<?php
$msg=[];
if(isset($_GET['update']))
{
    if ($_GET['update']=="delete") {
        $msg='<h6 class="ok">ADMIN SUCCESSFULY DELETED</h6>';
    }
}
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
<title>Birth Confirmation Letters Issued </title>

<section class="view">
    <table class=" alert-info table table-bordered table-warning">
    <?php if(!empty($msg)){echo $msg;}?>      
    <thead class=" alert-info" >
        <tr>
            <th >Name</th >
            <th>Surname</th>
            <th>Age</th>
            <th>Id Number</th>
            <th>Address</th>
            <th>Marital Status</th>

            <th>issue Date</th>
         
            <!-- <th>Action </th> -->
        </tr >
    </thead >
    <tbody  class="border-1 alert-info">
        <?php foreach($results as $result):?>
        <tr>
            <td><?=$result->name?></td >
            <td><?=$result->surname?></td>
            <td><?=$result->age?></td>
            <td><?=$result->idNumber?></td>
            <td><?=$result->address?></td>
            <td><?=$result->maritalStatus?></td>

            <td><?=$result->issueDate?></td>
            
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


    
