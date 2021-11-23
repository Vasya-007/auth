<?php 
session_start();
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

function authorization($connect)
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'");
    if (mysqli_num_rows($query) == 0) {
      $_SESSION['error'] = 'Email or password incorrect please try again.';
      header('Location: ../auth.php'); 
    } else {
      return mysqli_fetch_assoc($query);
    }
    }
?>