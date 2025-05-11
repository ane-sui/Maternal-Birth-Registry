<?php 
    include_once 'includes/conn.php';
    include_once ('includes/functions.php');
    include_once 'layout.view.php';
    if (isset($_GET['login'])) 
    {
        $msg=[];
        if($_GET['login']=="invalid")
        {
            $msg='<h6 class="msg">ACCESS DENIED,PLEASE TRY AGAIN!</h6>';

        }

        if($_GET['login']=="invalid")
        {
            $msg='<h6 class="msg">ACCESS DENIED,PLEASE FILL IN ON ALL INPUT FIELDS!</h6>';
        }
        
        
    }
    ?>
<div id="maiden">
    <section class="login">
    <!-- <img class="img-fluid" src="img/sunset.jpg" alt=""> -->
        <div class="container-fluid">
<!-- <div class="error" id="error"></div> -->
        <form id="form" action="includes/login.inc.php"  method="post">
            <?php if(!empty($msg)) echo $msg;?>
                    <div class="row">
                        <div class="col">
                            <label for="">Email:</label>
                            <input type="email" id="email" value="<?php if(!empty($_GET['email'])){echo $_GET['email'];}?>" name="user_email" class="form-control form-control-sm" >
                        </div>    
                        <div class="col">
                            <label for="">Password:</label>
                            <input type="password" id="pwd" name="pwd" class="form-control form-control-sm" >
                        </div>
                    </div>
                    <p style="color: grey; font-weight:100px;">New User? <a style="text-decoration: none; color:coral; font-weight:100px;" href="signup.view.php">Signup</a></p>         
                        <input type="submit" name="login" value="Login" class="btn btn-warning btn-sm">
                        <a class="btn btn-secondary btn-sm" href="index.php">Back</a>
                </form>
            </div>
        </div>
    </section>
</div>
<script>
let email=document.getElementById('email');
let pwd=document.getElementById('pwd');
let form=document.getElementById('form');
let errorElement=document.getElementById('error');

form.addEventListener('submit', (e)=>{
    let messages=[];
    if(email.value==='' )
    {
        messages.push('Email is Required');
    }
    
    if(pwd.value==='' )
    {
        messages.push('password is Required');
        elseif(pwd.value.length < 8 )
        {
            messages.push('Password Must Be More that 8 character');
        }
    }

    if(messages.length >0){
        e.preventDefault()
        errorElement.innerText=messages.join(' !, ');
    }
})
</script>

    <?php include_once 'footer.php';?>
