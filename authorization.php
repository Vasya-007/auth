<?php 
session_start();
include "DB/connect.php";
include "CURD/login.php";

authorization($connect);
if (!$_SESSION['error']) {
  $_SESSION['user'] = [
    'id' => authorization($connect)['id'],
    'name' => authorization($connect)['name'],
    'sex' => authorization($connect)['sex'],
    'email' => authorization($connect)['email']
  ];
  header('Location: profile.php');
  }
?>