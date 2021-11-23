<?php
session_start();
include '../DB/connect.php';
function delete_acc($con)
{
    
    $id = $_SESSION['user']['id'];
    if ($result = mysqli_query($con, "DELETE FROM `users` WHERE `id` = '$id'")) {
        mysqli_free_result($result);
    }
    if ($result == 1) {
        session_unset();
        header('Location: ../index.php');
    }
}
delete_acc($connect);

?>