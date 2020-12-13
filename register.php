<!DOCTYPE html>
<html lang="en">


<?php include('templates/header.php'); ?>

<style>
    form{
        
        padding-top: 20%;
        padding-left: 30%;
       
       
    }
    form input{
        margin-bottom: 20px;
        box-shadow: none;
 
    }
    input [type=text]{ outline: none; }

</style>


<div class="floating-box">
   
<form name="form1" method="" action="" onSubmit="return(check());" >
<h3>Register here</h3><br><br>

   <label for="username"> User name</label>
   <input type="text" id="username" placeholder="Enter username" name="username"><br><br>

   <label for="email">Email</label>
 <input type="text" id="email" placeholder="Enter your email" name="email"><br><br>

 <label for="phone">Phone number</label>
 <input type="tel" id="phone" placeholder="Enter phone number" name="phonenum"><br><br>

   <label for="password1">Password</label>
   <input type="password" id="password1" placeholder="Enter password" name="pass1"><br><br>
     
   <label for="password2"> Confirm password</label>
   <input type="password" id="password2" placeholder="confirm password" name="pass2"><br><br>
    
    
   <input type="submit" name="submit" value="signup"><br><br>
	<p><a href="login.php">Already have an acount?</a></p>
                              

</form>
</div>
</section>
<?php include('templates/footer.php'); ?>
</html>