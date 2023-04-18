<?php
session_start();
$_SESSION["username"] = "fajrin";
$_SESSION["password"] = "nurhakim";
echo "session variable are set";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <?php
    echo "Username nya adalah : ".$_SESSION["username"];
    ?>
    <br>
    <?php
    echo "Passwordnya nya adalah : ".$_SESSION["password"];
    ?>

    <?php
    session_unset();

    session_destroy();
    ?>
</body>
</html>