<?php
session_start();
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
include_once "../DB/connect.php";
include_once "../application/Dev.php";

function adduser($con)
{
  try { 
  $email = $_POST['email'];
  $name = $_POST['name'];
  $password = $_POST['password'];
  $address = $_POST['address'];
  $sex = $_POST['sex'];
  $number_tel = $_POST['number_tel'];
  $query =  mysqli_query($con, "INSERT INTO `users`(`name`, `password`, `email`, `number_tel`, `sex`, `address`) VALUES ('$name','$password','$email',$number_tel,'$sex','$address')");
  
  if ($query == true) {
    $_SESSION['success'] = "Account successfully registered. Please log in.";  
    header('Location: ../auth.php');
  }
}  catch(Exception $e ) {
  echo "Error No: ".$e->getCode(). " - ". $e->getMessage() . "<br >";
  if ($e->getCode() == 1062) {
    $_SESSION['error_existing_email'] = "An account has already been registered with ".  $email.".";
    header('Location: ../index.php');
  }
  
}
}
adduser($connect);

?>