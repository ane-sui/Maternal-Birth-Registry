<?php
include_once 'layout.view.php';
include_once 'includes/functions.php';
ensure_is_user_authenticated();
$msg=[];
if (isset($_GET['search'])) 
{
    if($_GET['search']=="empty"){
     $msg='<h6 class="msg">PLEASE FILL ALL INPUT FIELDS</h6>';
     exit();
    }
}
?>
<head>
    <link rel="stylesheet" href="css/style.css">    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Search</title>
</head>



<!-- Navigation   -->
<!-- <div class="container"> 
<main class="search">
    <section>
    <?php if (!empty($msg )){echo $msg;}?>
            <form  action="letter.php" method="post" class="d-flex">
            <input value="<?php if(!empty($_GET['search'])){echo $_GET['search'];}?>" class="form-control form-control-sm me-2" type="search" name="search" placeholder="Mainden ID Number">
                <button name="submit" class="btn btn-warning  btn-sm" type="submit">Search</button>
            </form>
        </div>
    </section>
</main> -->

<div class="container"> 
<main class="search">
    <section>
    <?php if (!empty($msg )){echo $msg;}?>
            <form  action="letter.php" method="post" class="d-flex">
            <input value="<?php if(!empty($_GET['search'])){echo $_GET['search'];}?>" class="form-control form-control-sm me-2" type="search" name="idNumber" placeholder="Enter Maiden's ID Number" >

            <input type="date" name="deliveryDate" id="dob" class="form-control form-control-sm">    
            <button name="submit" class="btn btn-warning  btn-sm" type="submit">Search</button>
            </form>
        </div>
    </section>
</main>




<?php include_once 'footer.php';?>