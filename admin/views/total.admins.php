<?php
include_once 'layout.view.php';
include_once '../../includes/conn.php';
include_once '../../includes/functions.php';
ensure_is_user_authenticated();

$sql='SELECT * FROM admins';
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
<section class="view">
    <table class=" alert-info table table-bordered table-warning">
    <?php if(!empty($msg)){echo $msg;}?>      
    <thead class=" alert-info" >
        <tr>
            <th >Name</th >
            <th>Surname</th>
            <th>Email</th>
            <th>Action </th>
        </tr >
    </thead >
    <tbody  class="border-1 alert-info">
        <?php foreach($results as $result):?>
        <tr>
            <td><?=$result->a_name?></td >
            <td><?=$result->a_surname?></td>
            <td><?=$result->a_email?></td>
            
            <td>
                <form style="display: inline-block;" method="POST" action="../scripts/delete.php">
                    <input type="hidden" name="id" value="<?=$result->id?>">
                    <input type="submit" class="btn btn-secondary btn-sm" name="delete" value="Delete" >
                </form>
            </td>
        </tr>
        <?php endforeach;?>
    </tbody>
    </table>
</section>
<?php include_once '../../footer.php';?>


    
