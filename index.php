<?php
session_start();
// include_once 'application/Dev.php';
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
if (isset($_SESSION['user'])) {
    header('Location: profile.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <script type="text/javascript" src="validation.js" ></script>
</head>
<body>
<form class="decor" action="CURD/adduser.php" method="post">
    
    <div class="form-inner">
    <h3>Sign Up</h3>

    <label for="email">Email*</label>
    <input type="email" id= 'email' name="email" placeholder="Type your email" maxlength="50" required>

    <label for="">Name*</label>
    <input type="text" name="name" placeholder="Type your name"required>

    <label for="">Number </label>
    <input type="text" name="number_tel" placeholder="Type your phone number">

    <label id="pass" for="">Password*</label>
    <input type="password" name="password" id="password" onkeyup="checkpass()" required>

    <label for="" id="passconf">Password confirmation*</label>
    <input type="password" name="confirm" id="confirm" onkeyup="checkpass()" required>

    <label for="">Address</label>
    <input type="text" name="address">

    <label for="">Sex*</label> <br>
    <br>
     <div class="radios">
         <label for="sexm">Male</label>
         <input type="radio" id='sexm' value="male" name="sex" required>
         <label for="sexf">Female</label>
         <input type="radio" id='sexf' value="female" name="sex" required> 
        </div>

    <label for="">I agree with the policy*</label>
    <input type="checkbox" name="conf_rule" required>

    <input type="submit" id="reg" value="Regestration">
    <p><?php
    if (isset($_SESSION['error_existing_email'])) {
        echo $_SESSION['error_existing_email'];
        unset($_SESSION['error_existing_email']);
    }
    ?></p>
    I have an account
    <a href="auth.php">Click</a>
</div>
</form>
</body>
</html>


