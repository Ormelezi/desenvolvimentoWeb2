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
    <title>Início - Meu Site</title>
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
                <li class="nav-item active">
                    <a class="nav-link" href="inicio.php">Início</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sobre.php">Sobre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contato.php">Contato</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logs.php">Logs</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-5 mb-4">
    <h1>Bem-vindo à Página de Início</h1>   
    <div class= "mt-4">
        <h4>Lorem ipsum dolor.</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad ut voluptate voluptatem vel aspernatur soluta. Quam laudantium, cupiditate qui laborum, vero error possimus est id, sunt minima voluptate fuga nesciunt?</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus consequatur, unde id, maxime aut assumenda natus dolorum obcaecati voluptatibus eaque delectus doloribus nesciunt placeat. Magni deleniti doloribus excepturi repellat perspiciatis!</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae nemo incidunt maiores sit voluptates tempore corporis in totam blanditiis molestias magnam, dolore libero. Iure neque voluptatibus quasi veritatis consectetur asperiores!</p>
        <div class="row">
            <div class="col-md-6">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In, repellendus est? Porro dolore reprehenderit nam exercitationem blanditiis dolores amet cumque culpa? Ut eum non, labore totam unde provident voluptates nam?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat inventore voluptatem nisi quibusdam amet architecto minus tenetur nesciunt placeat cum laudantium porro excepturi quos autem nostrum aliquam quod, ut deleniti!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae vero minus modi officia quia aut laboriosam. Tempora voluptates excepturi minima nisi molestiae culpa repellat veritatis eum. Omnis quisquam ullam dolorem?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, fugit! Quia nulla facilis aspernatur placeat, rerum necessitatibus error ipsam excepturi enim officiis illo tempora, dolores voluptatibus ratione alias, consequatur quas.</p>
            </div>
            <div class="col-md-6">
                <img src="https://gluby.com.br/storage/uploads/blog/posts/20230126_07295643357.png" alt="lorem ipusum" class="img-fluid">
            </div>
        </div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae voluptate eos atque, facilis velit sed magni numquam officia error deleniti illum perspiciatis unde iure neque doloremque, quo provident nisi totam.</p>    
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus possimus sequi veritatis fugit praesentium assumenda voluptatibus quis numquam animi, quam enim dolores, cumque ipsa autem corporis ipsam? Libero, eius et!</p>

    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
