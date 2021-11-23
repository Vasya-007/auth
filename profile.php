<?php
session_start();
if (!isset($_SESSION['user'])) {
header('Location: auth.php');
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript" src="validation.js" ></script>
</head>
<body>
    
    <div class="form-inner">
        <h3>Profile</h3>
        <pre>
            <ul>
                
            <?php
        foreach ($_SESSION['user'] as $key => $value) {
        echo "<li>".$key . '-' . $value . "</li>";
        }
        ?>
        </ul>
        </pre>
    <br>
    <form action="CURD/delete.php">
        <input type="submit" value="Delete">
        </form>
        <div class="popup" style="text-align: center;" onclick="myFunction()">Logout
            <span class="popuptext" id="myPopup">
            <a href="logout.php">Точно вийти?</a></span>
        </div>
        
    </div>

</body>
</html>