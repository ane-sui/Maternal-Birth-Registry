<?php 
    include_once '../inc/conn.php';
    include('../inc/functions.php');
    include_once '../layout.view.php';
    // ensure_is_user_authenticated();

$sql='SELECT * FROM maidens';
$stmt=$pdo->prepare($sql);
$stmt->execute();
$results=$stmt->fetchAll();?>

<title>Patients</title>
<?php
$msg=[];
if(isset($_GET['update']))
{
if ($_GET['update']=="success")
    {
        $msg='<h6 class="ok">UPDATE SUCCESSFUL</h6>';
    }
    elseif ($_GET['update']=="delete") {
        $msg='<h6 class="msg">DELETE SUCCESSFUL</h6>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
<title> Patients </title>
</head>
<body >

<section class="view">
    <table class=" table table-bordered table-striped " >
<?php if(!empty($msg)){echo $msg;}?>      

    <thead class="tb">
        <tr>
        <th>Id</th >
            <th >Name</th >
            <th>Surname</th>
            <th>Address</th>
            <th>National Id Number</th>
            <th >Age</th >
            <th></th>
            <th>Action</th>

        </tr >
    </thead >
    <tbody>
        <?php foreach($results as $result):?>
        <tr>
        <td><?=$result->id?></td >
        <td><?=$result->name?></td >
            <td><?=$result->surname?></td>
            <td><?=$result->address?></td>
            <td><?=$result->idNumber?></td>
            <td><?=$result->age?></td>

            <!-- edit buttons -->
            <td>
                <a class="btn btn-success btn-sm" href="../scripts/edit.php?=$result->id?>">Edit</a>
            </td>
            <!-- user profile -->
            <td>
                <a class="btn btn-warning btn-sm" href="../profile.php?id=<?=$result->id?>&idNumber=<?=$result->idNumber?>">Profile</a>
            </td>

            
            <!-- # -->
            <!-- <td>
                <form style="display: inline-block;" method="POST" action="inc/delete.inc.php">
                    <input type="hidden" name="id" value="<?php echo $result->id?>">
                    <input type="hidden" name="idNumber" value="<?php echo $result->idNumber?>">
                    <input type="submit" class="btn btn-danger btn-sm" name="profile" value="Delete" >
                </form>
            </td> -->
            <!-- # -->
            <td>
                <form style="display: inline-block;" method="POST" action="inc/delete.inc.php">
                    <input type="hidden" name="id" value="<?php echo $result->id?>">
                    <!-- <input type="hidden" name="idNumber" value="<?php echo $result->idNumber?>"> -->
                    <input type="submit" class="btn btn-danger btn-sm" name="submit" value="Delete" >
                </form>
            </td>
        </tr>
        <?php endforeach;?>
    </tbody>

    </table>
</section>
<?php include_once '../../footer.php';?>

    
