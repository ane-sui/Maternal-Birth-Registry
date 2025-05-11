<?php 
    include_once 'includes/conn.php';
    include('includes/functions.php');
    include_once 'layout.view.php';
    ensure_is_user_authenticated();

$sql='SELECT * FROM maidens';
$stmt=$pdo->prepare($sql);
$stmt->execute();
$results=$stmt->fetchAll();?>
<title>View All Patients</title>
<?php
$msg=[];
if(isset($_GET['update']))
{
if ($_GET['update']=="success")
    {
        $msg='<h6 class="ok">UPDATE SUCCESSFULL</h6>';
    }
    elseif ($_GET['update']=="delete") {
        $msg='<h6 class="msg">DELETE SUCCESSFUL</h6>';
    }
}
?>
<section class="view">
    <table class=" table table-bordered table-striped " >
<?php if(!empty($msg)){echo $msg;}?>      

    <thead class="tbt ">
        <tr>
            <th >Name</th >
            <th>Surname</th>
            <th>Address</th>
            <th>National Id Number</th>
            <th >Age</th >
            <th>Action</th>
            <th></th>
        </tr >
    </thead >
    <tbody class="tbt">
        <?php foreach($results as $result):?>
        <tr>
            <td><?=$result->name?></td >
            <td><?=$result->surname?></td>
            <td><?=$result->address?></td>
            <td><?=$result->idNumber?></td>
            <td><?=$result->age?></td>
            <td><a class="btn btn-success btn-sm" href="edit.php?id=<?=$result->id?>">Edit</a></td>
            <!-- <td><a class="btn btn-warning btn-sm" href="adv-search.php?id=<?=$result->id?>">BRCC</a></td> -->

            <!-- <td>
                <form style="display: inline-block;" method="POST" action="includes/delete.inc.php">
                    <input type="hidden" name="id" value="<?php echo $result->id?>">
                    <input type="submit" class="btn btn-danger btn-sm" name="submit" value="Delete" >
                </form>
            </td> -->
        </tr>
        <?php endforeach;?>
    </tbody>

    </table>
</section>
<script src="index.js"></script>
    
