<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Calculadora de Média Ponderada</title>
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
                <li class="nav-item ">
                    <a class="nav-link" href="exercicio1.php">Exercício 1</a>
                </li>
                <li class="nav-item active">
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
  <h2 class="mt-5">Calculadora de Média Ponderada</h2>

  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
    <div class="mb-3">
      <label for="nota_avaliacoes" class="form-label">Nota Avaliações:</label>
      <input type="number" class="form-control" id="nota_avaliacoes" name="nota_avaliacoes" step="0.01" min="0" max="10" required>
    </div>

    <div class="mb-3">
      <label for="nota_trabalhos" class="form-label">Nota Trabalhos:</label>
      <input type="number" class="form-control" id="nota_trabalhos" name="nota_trabalhos" step="0.01" min="0" max="10" required>
    </div>

    <div class="mb-3">
      <label for="nota_praticandos" class="form-label">Nota Praticandos:</label>
      <input type="number" class="form-control" id="nota_praticandos" name="nota_praticandos" step="0.01" min="0" max="10" required>
    </div>

    <button type="submit" class="btn btn-primary">Calcular Média</button>
    <button type="button" class="btn btn-danger" onclick="limparResultados()">Limpar </button>
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nota_avaliacoes = $_POST["nota_avaliacoes"];
    $nota_trabalhos = $_POST["nota_trabalhos"];
    $nota_praticandos = $_POST["nota_praticandos"];

    
    $notas = array(
        "avaliacoes" => $nota_avaliacoes,
        "trabalhos" => $nota_trabalhos,
        "praticandos" => $nota_praticandos
    );


    arsort($notas);

    $media_ponderada = ($nota_avaliacoes * 5 + $nota_trabalhos * 2 + $nota_praticandos * 3) / 10;

    echo "<h3 class='mt-5'>Notas em Ordem Decrescente:</h3>";
    echo "<ul>";
    foreach ($notas as $rotulo => $nota) {
        echo "<li>$rotulo: $nota</li>";
    }
    echo "</ul>";

    echo "<h3>Média Ponderada:</h3>";
    echo "<p>" . number_format($media_ponderada, 2) . "</p>";
  }
  ?>
</div>

<script>
    function limparResultados() {
        document.getElementById("nota_avaliacoes").value = "";
        document.getElementById("nota_trabalhos").value = "";
        document.getElementById("nota_praticandos").value = "";
    }
</script>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
