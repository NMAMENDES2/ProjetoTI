<?php 
session_start();
if(isset($_POST['username']) && isset($_POST['password'])){
    if($_POST['username'] == 'aluno'){
        $ficheiro = fopen("aluno.txt", 'r') or die ("Erro");
        $pass_hash = trim(fgets($ficheiro));
        fclose($ficheiro);
        if($_POST['password'] == $pass_hash){
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['password'] = $_POST['password'];
            header('refresh: 0; url = dashboardAluno.php');
        }
    }
    elseif($_POST['username'] == 'funcionario'){
        $ficheiro = fopen("funcionario.txt", 'r') or die ("Erro");
        $pass_hash = trim(fgets($ficheiro));
        fclose($ficheiro);
        if($_POST['password'] == $pass_hash){
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['password'] = $_POST['password'];
            header('refresh: 0; url = dashboardFuncionario.php');
        }
    }
    elseif($_POST['username'] == 'diretor'){
        $ficheiro = fopen("diretor.txt", 'r') or die ("Erro");
        $pass_hash = trim(fgets($ficheiro));
        fclose($ficheiro);
        if($_POST['password'] == $pass_hash){
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['password'] = $_POST['password'];
            header('refresh: 0; url = dashboardDiretor.php');
        }
    }
}
?>

<!doctype html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projeto TI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=JetBrains Mono' rel='stylesheet'>
    <link rel="stylesheet" href="login.css">
</head>
  <body>
    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="row">
            <div class="col">
              <form action="" method="post">
                <label for="username">Utilizador</label>
                <input type="text" class="form-control" placeholder="Nome de utilizador" name="username">
                <label for="password">Password</label>
                <input type="password" class="form-control" placeholder="Password" name="password">
                <button class="btn">Submit</button>
                </form>
            </div>
        </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>