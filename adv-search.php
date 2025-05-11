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
    <title>Advanced Search</title>
</head>

<div class="container"> 
<main class="search">
    <section>
    <?php if (!empty($msg )){echo $msg;}?>
            <form  action="adv-results.php" method="post" >
                <div class="row">
                    <div class="col">
                        <label for="form-label">Maiden Name</label>
                        <input type="text" name="name" id="name" class="form-control form-control-sm">
                    </div>
                    <div class="col">
                        <label for="form-label">Maiden Surname</label>
                        <input type="text" name="surname" id="surname" class="form-control form-control-sm" >
                    </div> 
                </div>

                <div class="row">
                    <div class="col">
                        <label for="form-label">Child D.O.B</label>
                        <input type="date" name="deliveryDate" id="dob" class="form-control form-control-sm">   
                    </div>
                </div>
            <br>
            <button style="margin-left:42%;" name="submit" class="btn btn-warning  btn-sm" type="submit">Search</button>
            </form>
        </div>
    </section>
</main>

<script>

    
</script>


<?php include_once 'footer.php';?>