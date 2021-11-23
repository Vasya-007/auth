<?php
session_start();
// require 'application/Dev.php';
include_once 'CURD/login.php';
include_once 'DB/connect.php';
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

<form class="decor" action="authorization.php" method="post">
    
    <div class="form-inner">
    <h3>Auth</h3>
    <label for="email" >Email</label>
    <input type="email" name="email" id="email" placeholder="Type your email" required>

    <label for="">Password</label>
    <input type="password" name="password" id="password" required>
    <p><?php
    if (isset($_SESSION['error'])) {
        echo $_SESSION['error'];
        unset($_SESSION['error']);
    } 
    if (isset($_SESSION['success'])) {
        echo $_SESSION['success'];
        unset($_SESSION['success']);
    }
    ?></p>
    <input type="submit" name="auth"  value="Auth">

    Do you have an account? 
    <a href="/index.php">Click</a>
</div>
</form>
</body>
</html>


