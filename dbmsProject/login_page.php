<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <title>Login</title>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
     <link rel="stylesheet" href="login_page.css">
</head>

<body>
     <div class="background-image">
      <center>
     <h1>Cruise Management System</h1>
     </div>
      <div class="__main__">
      <center>
        <div class="login-header"><strong>Login</strong></div>
          <form name= "fm" id="login_form" action = "home_page.php" onsubmit="return validation()">
              <input type="text" name="admin" id="admin-field" class="login-form-field" placeholder="admin Name" >
              <input type="password" name="password" id="password-field" class="login-form-field" placeholder="Password"><br>
               <button  type="submit" class="btn-dark" value="login"><strong>Submit</strong></button>
          </form>

          
        </div>
     </center>
        </div>

     
      <script>

       //validation for empty input
        function validation(){
            var admin = document.fm.admin.value;
            var password = document.fm.password.value;
            if(admin.length == "" && password.length ==""){
              alert("admin name and password cannot be empty");
              return false;
            }
            else{
                 if(admin.length == ""){
                 alert("admin name cannot be empty");
                  return false;
                 }
                 if(password.length ==""){
                 alert("password cannot be empty");
                  return false;
                }
            }
            if(admin=="janman" && password =="jm2517"){
                return true;
            }
            else{
               alert("wrong password or admin name");
                return false;
            }
        }
      </script>
</body>
</html>