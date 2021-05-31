<?php
session_start();
if(!(isset($_SESSION['isLogged']) && $_SESSION['isLogged'])){
    header("Location: login-page.php");
    return;
        }

        session_unset();
        session_destroy();
        header("Location: login-page.php");
    return;
    ?>


 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>