<?php 

$email = $password = '';

$errors = array('email' => '', 'password' => '');

if(isset($_POST['login'])){
    if(empty($_POST['email'])){
        $errors['email'] = "An email is required <br />";
    }else{
        $email = $_POST['email'];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors['email'] = "Email must be a valid email address";
        }

    }
}

?>




<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php'); ?>

<script type="text/javascript">

    </script>
    <style rel="stylesheet" type="text/css">
        body {
            margin: a0;
            padding: 0;
            background-color: rgb(236, 144, 24);
            background: url(login.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-position-y: 100;
            font-family: sans-serif;
        }
        
        .loginbox {
            width: 320px;
            height: 420px;
            background: #000000;
            color: #ffffff;
            top: 50%;
            left: 50%;
            position: absolute;
            transform: translate(-50%, -50%);
            box-sizing: border-box;
            padding: 70px 30px;
            opacity: 0.9;
            border-radius: 20px;
        }
        
        .avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            position: absolute;
            top: -50px;
            left: calc(50% - 50px);
        }
        
        h1 {
            margin: 0;
            padding: 0 0 20px;
            text-align: center;
            font-size: 22px;
        }
        
        .loginbox p {
            margin: 0;
            padding: 0;
            font-weight: bold;
        }
        
        .loginbox input {
            width: 100%;
            margin-bottom: 20px;
        }
        
        .loginbox input[type="email"],
        input[type="password"] {
            border: none;
            border-bottom: 1px solid #ffffff;
            background: transparent;
            outline: none;
            height: 40px;
            color: #ffffff;
            font-size: 16px;
        }
        
        .loginbox input[type="submit"] {
            border: none;
            outline: none;
            height: 40px;
            background: #fb2525;
            color: #ffffff;
            font-size: 18px;
            border-radius: 20px;
        }
        
        .loginbox input[type="submit"]:hover {
            cursor: pointer;
            background: #ffc107;
            color: #000000;
        }
        
        .loginbox a {
            text-decoration: none;
            font-size: 12px;
            line-height: 20px;
            color: darkgrey;
        }
        
        .loginbox a:hover {
            color: #ffc107;
        }
        
        .loginbox
    </style>
    <div class="loginbox">
        <img src="img/Men-Profile-Image.png" class="avatar">
        <h1>Login here</h1>
        <form name="myForm" onsubmit="return(validate());" onsubmit="return(validatePassword());" action="login.php" method="post">
            <p>Email</p>
            <input type="email" name="email" placeholder="Enter your email" value="<?php echo htmlspecialchars($email) ?>">
            <div class="errors"><p><?php echo $errors['email']; ?></p></div>
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="login" value="Login">
            <a href="">Lost your password?</a><br>
            <a href="register.php">Don't have an account?</a>
        </form>
    </div>

</section>
<?php include('templates/footer.php'); ?>

</html>