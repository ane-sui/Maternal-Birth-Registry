<?php 
   include_once 'layout.view.php';
   include_once '../../includes/conn.php';
   include_once '../../includes/functions.php';
?>
<?php
$msg=[];
if(isset($_GET['update']))
{
    if ($_GET['update']=="added") {
        $msg='<h6 class="ok">ADMIN SUCCESSFULY ADDED</h6>';
    }
    elseif ($_GET['update']=="mismatch") {
        $msg='<h6 class="msg">PASSWORWDS DO NOT MATCH</h6>';
    }
    elseif ($_GET['update']=="pwd") {
        $msg='<h6 class="msg">PASSWORWDS ARE MISSING</h6>';
    }        
   elseif ($_GET['update']=="empty") {
        $msg='<h6 class="msg">PLEASE FILL ALL INPUT FIELDS</h6>';
    }
    elseif ($_GET['update']=="name") {
        $msg='<h6 class="msg">NAME IS MISSING!</h6>';
    }
    elseif ($_GET['update']=="surname") {
        $msg='<h6 class="msg">SURNAME IS MISSING!</h6>';
    }
    elseif ($_GET['update']=="email") {
        $msg='<h6 class="msg">EMAIL IS MISSING!</h6>';
    }
}
?>
<title>Add Admin</title>

<section class="login">
<!-- <img src="../../img/sunset.jpg" alt="" class="img-fluid">         -->
<div class="container">
<div  id="error" class="error"></div>  

<form action="../scripts/reg.admin.php" id="form" method="post">
                    <b> Admin Details:</b><br>

                    <div class="row">
                <div class="col">
                    <input id="name" type="text" value="<?php if(!empty($_GET['name'])){echo $_GET['name'];}?>" name="a_name" class="form-control form-control-sm" placeholder=" First Name">
                </div>
                <div class="col">
                <input type="text" id="surname" value="<?php if(!empty($_GET['last'])){echo $_GET['last'];}?>" name="a_surname" class="form-control form-control-sm" placeholder="Last Name">

                </div>
            </div>
<br>
            <div class="row">
                <div class="col">
                <input type="email" id="email" value="<?php if(!empty($_GET['email'])){echo $_GET['email'];}?>" name="a_email" class="form-control form-control-sm" placeholder="bond@gmail.com">
                </div>

            </div>
            <br>
            <div class="row">
                <div class="col">
                <input type="password" id="pwd" name="cpwd" class="form-control form-control-sm" placeholder="Repeat Password">
                </div>
<br>    
                <div class="col">
                <input type="password" id="cpwd" name="a_pwd" class="form-control form-control-sm" placeholder="Enter Password">
     
                </div>

            </div>
                    <br>
                        <input type="submit" name="register" value="Register" class="btn btn-success btn-sm">
                        <a class="btn btn-warning btn-sm" href="home.view.php">Back</a>
                </form>
                    </div>
        </div>
    </section>

<script>

let name=document.getElementById('name');
let surname=document.getElementById('surname');
let email=document.getElementById('email');
let pwd=document.getElementById('pwd');
let cpwd=document.getElementById('cpwd');
let form=document.getElementById('form');
let errorElement=document.getElementById('error');

form.addEventListener('submit', (e)=>{
    let messages=[];
    if(name.value==='' )
    {
        messages.push('Name is Required');
    }

    if(surname.value==='' )
    {
        messages.push('Surname is Required');
    }

    if(email.value==='' )
    {
        messages.push('Email is Required');
    }

    if(pwd.value==='' )
    {
        messages.push('Password is Requird');
    }

    if(pwd.value==='password' )
    {
        messages.push('Password Can not be Password');
    }

   
    if(pwd.value.length < 8 )
    {
        messages.push('Password Must Be More that 8 character');
    }

    if(pwd.value===cpwd.value )
    {
        messages.push('Password Mismatch');
    }


    if(messages.length >0){
        e.preventDefault()
        errorElement.innerText=messages.join(' !, ');
    }
})


</script>

<?php include_once '../../footer.php';?>