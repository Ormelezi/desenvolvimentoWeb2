<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Página Gerada</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Prova</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="exercicio1.php">Exercício 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="exercicio2.php">Exercício 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="exercicio3.php">Exercício 3</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="exercicio4.php">Exercício 4</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
  
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera os valores dos campos do formulário
    $titulo = $_POST["titulo"];
    $alinhamento = $_POST["alinhamento"];
    $corpo = $_POST["corpo"];
    $imagem = $_POST["imagem"];
    $mostrar_imagem = $_POST["mostrar_imagem"];
    $cor_texto = $_POST["cor_texto"];

    // Define cookies para cada informação do campo
    setcookie("titulo", $titulo, time() + (86400 * 30), "/");
    setcookie("alinhamento", $alinhamento, time() + (86400 * 30), "/");
    setcookie("corpo", $corpo, time() + (86400 * 30), "/");
    setcookie("imagem", $imagem, time() + (86400 * 30), "/");
    setcookie("mostrar_imagem", $mostrar_imagem, time() + (86400 * 30), "/");
    setcookie("cor_texto", $cor_texto, time() + (86400 * 30), "/");

    echo "<div style='text-align: $alinhamento;'>";
    echo "<h1 style='color: $cor_texto;'>$titulo</h1>";
    echo "<div style='text-align: $alinhamento;'>";
    echo "<p style='color: $cor_texto;'>$corpo</p>";

    if ($mostrar_imagem == "inline") {
        echo "<div style='text-align: $alinhamento;'>";
        echo "<img src='$imagem' alt='Imagem' class='img-fluid'>";
    } elseif ($mostrar_imagem == "background") {
        echo "<style>body { background-image: url('$imagem'); background-position: center; background-attachment: fixed; }</style>";
    }
  }
  ?>

  <p>Data e Hora de Geração: <?php echo date("d/m/Y H:i:s"); ?></p>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
