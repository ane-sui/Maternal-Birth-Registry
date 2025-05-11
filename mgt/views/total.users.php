<?php
include_once 'nav.php';
include_once '../inc/conn.php';
include_once '../inc/functions.php';
// ensure_is_user_authenticated();
$sql='SELECT * FROM real_users';
$stmt=$pdo->prepare($sql);
$stmt->execute();
$results=$stmt->fetchAll();?>
<?php
$msg=[];
if(isset($_GET['update']))
{
    if ($_GET['update']=="delete") {
        $msg='<h6 class="msg">USER SUCCESSFULLY DELETED</h6>';
    }
}
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
<title> Total Users </title>

<section class="view">
    <table class=" alert-info table table-bordered table-warning"  >
    <?php if(!empty($msg)){echo $msg;}?>      
    <thead class=" alert-info" >
        <tr>
            <th >User Name</th >
            <th>User Surname</th>
            <th>User Email</th>
            <th>Position Held</th>
            <th>User Phone Number</th>
            <th>Action </th>
        </tr >
    </thead >
    <tbody  class="border-1 alert-info">
        <?php foreach($results as $result):?>
        <tr>
            <td><?=$result->user_name?></td >
            <td><?=$result->user_surname?></td>
            <td><?=$result->user_email?></td>
            <td><?=$result->user_post?></td>
            <td><?=$result->user_phone_number?></td>
            <td>
                <form style="display: inline-block;" method="POST" action="../scripts/delete.php">
                    <input type="hidden" name="id" value="<?=$result->id?>">
                    <input type="submit" class="btn btn-secondary btn-sm" name="del" value="Delete" >
                </form>
            </td>
        </tr>
        <?php endforeach;?>
    </tbody>
    </table>
</section>
<?php include_once '../../footer.php';?>


    
