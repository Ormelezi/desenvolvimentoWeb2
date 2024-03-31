<?php

    function registrarAcesso($pagina) {
        $ip = $_SERVER['REMOTE_ADDR'];
        $dataHora = date('Y-m-d H:i:s');

        $user_agent = $_SERVER['HTTP_USER_AGENT'];
        if (strpos($user_agent, 'MSIE') !== FALSE)
        $navegador = 'Internet explorer';
        elseif (strpos($user_agent, 'Edg') !== FALSE) //Para o IE 11
        $navegador =  'Microsoft Edge';
        elseif (strpos($user_agent, 'Firefox') !== FALSE)
        $navegador =  'Mozilla Firefox';
        elseif (strpos($user_agent, 'Chrome') !== FALSE)
        $navegador =  'Google Chrome';
        elseif (strpos($user_agent, 'Opera Mini') !== FALSE)
        $navegador =  "Opera Mini";
        elseif (strpos($user_agent, 'Opera') !== FALSE)
        $navegador =  "Opera";
        elseif (strpos($user_agent, 'Safari') !== FALSE)
        $navegador =  "Safari";
        else
        $navegador =  $user_agent;

        $log = "$dataHora | Página: $pagina | IP: $ip | Navegador: $navegador\n";
        file_put_contents('log_acessos.txt', $log, FILE_APPEND);
    }


    function incrementarContador($pagina) {
        $contadores = json_decode(file_get_contents('contadores.json'), true);
        $contadores[$pagina]++;
        file_put_contents('contadores.json', json_encode($contadores));
    }


    $paginaAtual = basename($_SERVER['PHP_SELF']);


    incrementarContador($paginaAtual);


    registrarAcesso($paginaAtual);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - Meu Site</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class= "bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Meu Site</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="inicio.php">Início</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sobre.php">Sobre</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="contato.php">Contato</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logs.php">Logs</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-5">
    <h1>Entre em Contato Conosco</h1>
    <p>Use o formulário abaixo para nos enviar uma mensagem:</p>
    
    <form action="#" method="POST">
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu email">
        </div>
        <div class="form-group">
            <label for="mensagem">Mensagem:</label>
            <textarea class="form-control" id="mensagem" name="mensagem" rows="5" placeholder="Digite sua mensagem"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
