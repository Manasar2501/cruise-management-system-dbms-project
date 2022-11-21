<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <title>password_reset</title>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
     <link rel="stylesheet" href="login_page.css">
</head>

<body>
<body>
     <div class="background-image">
     <center>
     </div>
      <div class="__main__">
      <center>
        <div class="login-header">Reset your password</div>
          <form name= "fm" id="login_form" action = "reset_request.php" method="post">
               <input type="email" name="reset-email" id="password-field" class="login-form-field" placeholder="email for reset"><br>
               <button  type="submit" class="btn-dark" name = "request_submit"value="login"><strong>send a mail for reset</strong></button>
          </form>
          <?php
               if(isset($_GET['reset'])){
                    if($_GET['reset']=="sucess"){

                         echo "<p class = "signupsuccess"> check your email!></p>"; 
                    }

               }
          ?>
               
        </div>
     </center>
        </div>
</body>
</html>