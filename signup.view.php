<?php 
    include_once 'includes/conn.php';
    include('includes/functions.php');
    include('layout.view.php');
    $msg=[];
    $msgs=[];

?>
<title>User SignUp</title> 
    <section class="login">
    <div class="container-fluid"> 
<div class="error" id="error"></div>
    <form  id="form" action="includes/signup.inc.php"  method="post">
    <span class="text-align-center dark"><b> Users Details:</b></span><br>
                    <div class="row">
                        <div class="col">
                            <label class="form-label" for="">First Names:</label>
                            <input type="text" id="name" name="user_name" class="form-control form-control-sm" placeholder="James Ray">
                        </div>    
                        <div class="col">
                            <label class="form-label" for="">Last Name:</label>
                            <input type="text"id="surname" name="user_surname"  class="form-control form-control-sm" placeholder="Smith">
                        </div>   
                    </div>                
                    
                    <div class="row">
                        <div class="col">
                            <label class="form-label" for="">Email:</label>
                            <input type="email" id="email" name="user_email" class="form-control form-control-sm"  placeholder="Email Address">
                        </div>    
                        <div class="col">
                            <label class="form-label" for="phone number">Phone Number</label>
                            <input  id="phoneNumber" type="number" class="form-control form-control-sm" name="user_phone_number" placeholder="Phone Number" id="">
                        </div>

                    </div>
                   
                   
                    <div class="row">
                        <div class="col">
                            <label class="form-label" for="">Password:</label>
                            <input type="password" id="pwd" name="pwd" class="form-control form-control-sm" placeholder="Enter Password">
                        </div>

                        <div class="col">
                            <label class="form-label" for="">Confirm Password:</label>
                            <input type="password" id="cpwd" name="cpwd" class="form-control form-control-sm" placeholder="Repeat Password">
                        </div>    
                    </div>
                        <br>
                        <p>Already have an account? <a style="text-decoration: none; color:coral; font-weight:100px;" href="login.view.php"> Login</a> </p>                    

                        <input type="submit" name="register" value="Register" class="btn btn-warning btn-sm">
                    <a class="btn btn-danger btn-sm" href="index.php">Cancel</a>
                </form>
            </div>
        </div>
    </section>

    <script>

let name=document.getElementById('name');
let surname=document.getElementById('surname');
let email=document.getElementById('email');
let pwd=document.getElementById('pwd');
let phone=document.getElementById('phoneNumber');
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
    if(phone.value.length !=10 )
    {
        messages.push('invalid phone number');
    }


    if(pwd.value==='' )
    {
        messages.push('Password is Required');
    }

    if(pwd.value==='password' )
    {
        messages.push('Password Can not be Password');
    }

   
    if(pwd.value.length < 8 )
    {
        messages.push('Password Must Be More that 8 character');
    
    }

    if(pwd.value !== cpwd.value )
    {
        messages.push('Password Mismatch');
    }
   


    if(messages.length >0){
        e.preventDefault()
        errorElement.innerText=messages.join(' !, ');
    }
})
</script>


    <?php include_once 'footer.php';?>
