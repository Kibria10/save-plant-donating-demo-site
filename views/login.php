
<?php 
      include_once './includes/header.php';
    include_once '../helpers/session_helper.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="./css/style.css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>

<body>
<div class="col-sm-6 col-md-12 col-lg-12 col-12">
<div class="bg-img">
<div class="content">
    <h1 class="header"> Login</h1>
<br>
    <?php flash('login') ?>

    <form method="post" action="../controllers/Users.php">
    <input type="hidden" name="type" value="login">
 <div class="field">
    <span class="fa fa-user"></span>
        <input type="text" name="name/email"  
        placeholder="Username/Email">
        </div>
               <div class="field space">
            <span class="fa fa-lock"></span>
        <input type="password" name="usersPwd" class="pass-key"
        placeholder="Password">
        <span class="show">SHOW</span>
       
               </div>
               <div class="pass">

               <div class="form-sub-msg"><a href="./reset-password.php">Forgotten Password?</a></div>
               </div>
               <div class="field">
                  <input  type="submit" value="LOGIN">
               </div>
       
            
            <div class="LogIn">
                <br>
        
              <h3> Don't have an account? </h3>
              <br>
            
              <button id="hello"><h5> <a href="signup.php">Sign Up  </h5></button></a>
               </div>
       
            </div>
         </div>
      </div>
      <script>
         const pass_field = document.querySelector('.pass-key');
         const showBtn = document.querySelector('.show');
         showBtn.addEventListener('click', function(){
          if(pass_field.type === "password"){
            pass_field.type = "text";
            showBtn.textContent = "HIDE";
            showBtn.style.color = "#3498db";
          }else{
            pass_field.type = "password";
            showBtn.textContent = "SHOW";
            showBtn.style.color = "#222";
          }
         });
      </script>
   </body>
</html>

   

  