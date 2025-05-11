<?php
include_once 'layout.view.php';
include_once '../../includes/conn.php';
include_once '../../includes/functions.php';
ensure_is_user_authenticated();

$sql='SELECT * FROM users';
$stmt=$pdo->prepare($sql);
$stmt->execute();
$results=$stmt->fetchAll();?>
<?php
$msg=[];
if(isset($_GET['update']))
{
if ($_GET['update']=="create")
    {
        $msg='<h6 class="ok">USER REQUEST SUCCESSFULY ACCEPTED</h6>';
    }
    elseif ($_GET['update']=="delete") {
        $msg='<h6 class="msg">USER REQUEST SUCCESSFULY DELETED</h6>';
    }
}
?>
<section class="view">
    <table class=" alert-info table table-bordered table-warning">
    <?php if(!empty($msg)){echo $msg;}?>      
    <thead class=" alert-info" >
        <tr>
            <th >Name</th >
            <th>Surname</th>
            <th>Email</th>
            <!-- <th>Post</th > -->
            <th>Phone Number</th>
            <th>Actions </th>
            <th></th>
        </tr >
    </thead >
    <tbody  class="border-1 alert-info">
        <?php foreach($results as $result):?>
        <tr>
            <td><?=$result->user_name?></td >
            <td><?=$result->user_surname?></td>
            <td><?=$result->user_email?></td>
            <!-- <td><?=$result->user_work_post?></td> -->
            <td><?=$result->user_phone_number?></td>
            <td><a class="btn btn-warning btn-sm" href="../scripts/create.php?id=<?=$result->id?>">Accept</a></td>
            
            <td>
                <form style="display: inline-block;" method="POST" action="../scripts/delete.php">
                    <input type="hidden" name="id" value="<?=$result->id?>">
                    <input type="submit" class="btn btn-secondary btn-sm" name="submit" value="Reject" >
                </form>
            </td>
        </tr>
        <?php endforeach;?>
    </tbody>
    </table>
</section>
<?php include_once '../../footer.php';?>


    
