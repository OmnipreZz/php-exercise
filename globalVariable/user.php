<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>user</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    

    <h2>Sessions</h2>
    <?php
        echo $_SESSION['prenom']." ";
        echo $_SESSION['nom']." ";
        echo $_SESSION['age']; 
    ?>

    <br>
    <br>

    <h2>Cookies</h2>
    <?php
        echo $_COOKIE['login']." ";
        echo $_COOKIE['password']." ";
    ?>

    <h2>New Cookies</h2>
    <?php
        echo $_COOKIE['login']." ";
        echo $_COOKIE['password']." ";
    ?>


</body>
</html>