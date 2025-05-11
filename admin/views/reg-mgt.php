<?php 
   include_once 'layout.view.php';
   include_once '../../includes/conn.php';
   include_once '../../includes/functions.php';
?>

<title>Add Management</title>
<section class="login">
<!-- <img src="../../img/sunset.jpg" alt="" class="img-fluid">         -->
    <div class="container">
    <div  id="error" class="error"></div>  
        <form id="my-form" action="../scripts/reg-mgt.php"  method="post">
            <b>Management Details:</b><br>
            <div class="row">
                <div class="col">
                <input type="text" id="name" value="<?php if(!empty($_GET['name'])){echo $_GET['name'];}?>" name="name" class="form-control form-control-sm" placeholder=" First Name">
                </div>

                <div class="col">
                <input type="text" id="surname" value="<?php if(!empty($_GET['last'])){echo $_GET['last'];}?>" name="surname" class="form-control form-control-sm" placeholder="Last Name">
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col">
                    <input type="email" id="email" value="<?php if(!empty($_GET['email'])){echo $_GET['email'];}?>" name="email" class="form-control form-control-sm" placeholder="bond@gmail.com">
                </div>

                <div class="col">
                    <input type="text" id="phoneNumber" value="<?php if(!empty($_GET['email'])){echo $_GET['email'];}?>" name="phoneNumber" class="form-control form-control-sm" placeholder="Phone Number">
                </div>
            </div>
<br>

            <div class="row">
                <div class="col">
                <input type="password" id="pwd" name="pwd" class="form-control form-control-sm" placeholder="Enter Password">
                    
                </div>
                <div class="col">
                <input type="password" id="cpwd" name="rePwd" class="form-control form-control-sm" placeholder="Repeat Password">
                    
                </div>
            </div>
<br>
                <input type="submit" name="register" value="Register" class="btn btn-success btn-sm">
                <a class="btn btn-warning btn-sm" href="home.view.php">Back</a>
        </form>
    </div>
</section>



<script>

let name=document.getElementById('name');
let surname=document.getElementById('surname');
let email=document.getElementById('email');
let pwd=document.getElementById('pwd');
let cpwd=document.getElementById('cpwd');
let form=document.getElementById('my-form');
let errorElement=document.getElementById('error');
let phone=document.getElementById('phoneNumber');

form.addEventListener('submit', (e)=>{
    let messages=[];
    if(name.value==='' )
    {
        messages.push('Name is Required');
    }

    if(phone.value==='' )
    {
        messages.push('Phone Number is Required');
    }

    if(phone.value.length != 10 )
    {
        messages.push('Phone Number Must have ten numbers');
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