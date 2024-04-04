<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>- Gerador de dados (Composer)</title>
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
                <li class="nav-item">
                    <a class="nav-link" href="exercicio1.php">Exercício 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="exercicio2.php">Exercício 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="exercicio3.php">Exercício 3</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="exercicio4.php">Exercício 4</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
  <h2 class="mt-5">Gerador de Dados Aleatórios</h2>

  <a href="?numero=5" class="btn btn-primary">Gerar 5 linhas</a>
  <a href="?numero=10" class="btn btn-primary">Gerar 10 linhas</a>
  <a href="?numero=15" class="btn btn-primary">Gerar 15 linhas</a>

  <?php
  require_once 'vendor/autoload.php';


  if (isset($_GET['numero'])) {
      $numero_linhas = $_GET['numero'];


      $faker = Faker\Factory::create('pt_BR');

      echo '<table class="table mt-4">';
      echo '<thead><tr><th>Nome</th><th>Email</th><th>Endereço</th></tr></thead>';
      echo '<tbody>';

      for ($i = 0; $i < $numero_linhas; $i++) {
          echo '<tr>';
          echo '<td>' . $faker->name . '</td>';
          echo '<td>' . $faker->email . '</td>';
          echo '<td>' . $faker->address . '</td>';
          echo '</tr>';
      }
      echo '</tbody>';
      echo '</table>';
  }
  ?>

</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>

