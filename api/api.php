<?php

header('Context-Type: text/html; charset=utf-8'); // Serve para especificar que tipo de conteúdo enviado é do tipo html

$REQUEST = $_SERVER['REQUEST_METHOD'];

if($REQUEST == 'POST'){
    print_r($_POST);
    echo('Recebi um POST');
    if(isset($_POST['nome']) && isset($_POST['valor']) && isset($_POST['hora'])){
        file_put_contents("files/".$_POST['nome']."/valor.txt", $_POST['valor']);
        file_put_contents("files/".$_POST['nome']."/hora.txt", $_POST['hora']);
        file_put_contents("files/".$_POST['nome']."/log.txt", $_POST['hora']." ". $_POST['valor']. PHP_EOL, FILE_APPEND);
    }
    else{
        echo "Parametros recebido n são validos";
        http_response_code(404);
    }
}
else{
    if($REQUEST == 'GET'){
        if(isset($_GET['nome'])){
            if($_GET['nome'] == "temperatura" || $_GET['nome'] == "lotacaoCantina"){ // Para já são estes os sensores
                echo file_get_contents("files/".$_GET['nome']."/valor.txt");
            }
            else{
                echo("Sensor inválido"); // Ou algo do género
                http_response_code(400);
            }
        }
        else{
            echo("Faltam parametros no GET");
            http_response_code(400);
        }
    }
    else{
        echo("Método não permitido");
        http_response_code(403);
    }
}