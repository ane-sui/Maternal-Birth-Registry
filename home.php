<?php 
include_once 'layout.view.php';
include_once 'includes/conn.php';
include('includes/functions.php');
ensure_is_user_authenticated();

?>
<title>Home Page</title>
<div class="container-fluid"> 
    <section class="index">
        <div class="index-img">
            <img src="img/arms.jpg" alt="" >
            <div class="btns">
                    <!-- <a class="btn btn-outline-success" href="register.view.php">Register Mother</a> -->
                    <a class="btn btn-outline-success" href="maiden-reg.php">Register Mother</a>
                    <a class="btn btn-outline-danger" href="search.view.php">Search Record</a>    
                </div>
        </div>
    </section>
</div>
<?php include_once 'footer.php';?>
   