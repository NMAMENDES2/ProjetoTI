<?php

session_start();

if(!isset($_SESSION['username']) && !isset($_SESSION['password'])){
    header("refresh: 5; url=login.php");
    die("Acesso restrito");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - DiDiretor</title>
</head>
<body>
    <h1>teste</h1>
</body>
</html>