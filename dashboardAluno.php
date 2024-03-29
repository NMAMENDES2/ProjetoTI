<?php

session_start();

if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
    header("refresh: 5; url=login.php");
    die("Acesso restrito");
}

$valor_temperatura = file_get_contents("api/files/temperatura/valor.txt");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Aluno</title>
    <link href='https://fonts.googleapis.com/css?family=JetBrains Mono' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="dashboardAluno.css">

    <head>

    <body>
        <nav class="navbar bg-light navbar-expand-sm">
            <div class="container-fluid justify-content-between d-flex align-items-center">
                <a href="#" class="navbar-brand">ESTG 2.0</a>
                <div class="d-flex justify-content-center">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="#" class="nav-link">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Histórico</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Social</a>
                        </li>
                    </ul>
              </div>
                <button class="btn btn-sm btn-outline-secondary"><a href="logout.php" class="nav-link">Logout</a></button>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="card text-center">
                        <div class="card-header">
                            <h5 class="card-title">Temperatura</h5>
                        </div>
                        <div class="card-body">
                            <?php
                                echo("<p>". $valor_temperatura. "</p>");
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center">
                        <div class="card-header">
                            <h5 class="card-title">Social</h5>
                        </div>
                        <div class="card-body d-flex align-items-center justify-content-center" style="height: 300px; overflow: auto" id="scroll">
                            <img src="https://avatars0.githubusercontent.com/u/9892522?v=4&s=400" alt="Teste" style="height: 100%; width: 100%">
                            <p class="card-text" style="width:100%; height:auto; display:none" id="segundaImagem">Teste2</p>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-sm btn-outline-secondary" style="margin-left: 300px;" id="scrollButton">Seguinte</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="dashboardAluno.js"></script>
    </body>

</html>