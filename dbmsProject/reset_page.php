<?php 
     require "connect.php";
?>
<?php
     $selector = $_GET["selector"];
     $validator = $_GET["validator"];

     if(empty($selector) || empty($validator)){
          echo "could not validate your request(password is empty)!"
     }
     else {

          if(ctype_xdigit($selector) != false && ctype_xdigit($validator) != false ){
            ?>
            <form action = "login_page.php" method = "post">
                <input type="hidden" name="selector" value="<?php echo $selector ?>" >
                 <input type="hidden" name="validator" value="<?php echo $validator ?>" >  
                 <input type="password" name= "pwd" placeholder ="enter new password">
                  <input type="password" name= "pwd" placeholder ="re-enter new password">
                  <button type= "submit" name = "reset-password-submit">Reset</buutton>
            </form>
            <php 

          }
     }

?>