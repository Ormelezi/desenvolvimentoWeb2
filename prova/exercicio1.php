<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulário Gerador de Páginas</title>
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
  <h2 class="mt-5">Gerador de Páginas 2.0</h2>

  <form action="exercicio1_destino.php" method="POST">
    <div class="mb-3">
      <label for="titulo" class="form-label">Título da página:</label>
      <input type="text" class="form-control" id="titulo" name="titulo" value="<?php echo isset($_COOKIE['titulo']) ? $_COOKIE['titulo'] : ''; ?>">
    </div>

    <div class="mb-3">
      <label for="alinhamento" class="form-label">Alinhamento:</label>
      <select class="form-select" id="alinhamento" name="alinhamento">
        <option value="center" <?php if(isset($_COOKIE['alinhamento']) && $_COOKIE['alinhamento'] == 'center') echo 'selected'; ?>>Centralizado</option>
        <option value="left" <?php if(isset($_COOKIE['alinhamento']) && $_COOKIE['alinhamento'] == 'left') echo 'selected'; ?>>Esquerda</option>
        <option value="right" <?php if(isset($_COOKIE['alinhamento']) && $_COOKIE['alinhamento'] == 'right') echo 'selected'; ?>>Direita</option>
      </select>
    </div>

    <div class="mb-3">
      <label for="corpo" class="form-label">Corpo:</label>
      <textarea class="form-control" id="corpo" name="corpo" rows="4"><?php echo isset($_COOKIE['corpo']) ? $_COOKIE['corpo'] : ''; ?></textarea>
    </div>

    <div class="mb-3">
      <label for="imagem" class="form-label">Imagem (URL):</label>
      <input type="text" class="form-control" id="imagem" name="imagem" value="<?php echo isset($_COOKIE['imagem']) ? $_COOKIE['imagem'] : ''; ?>">
    </div>

    <div class="mb-3">
      <label for="mostrar_imagem" class="form-label">Mostrar imagem:</label>
      <select class="form-select" id="mostrar_imagem" name="mostrar_imagem">
        <option value="inline" <?php if(isset($_COOKIE['mostrar_imagem']) && $_COOKIE['mostrar_imagem'] == 'inline') echo 'selected'; ?>>No corpo da página (inline)</option>
        <option value="background" <?php if(isset($_COOKIE['mostrar_imagem']) && $_COOKIE['mostrar_imagem'] == 'background') echo 'selected'; ?>>No plano de fundo (background)</option>
      </select>
    </div>

    <div class="mb-3">
      <label for="cor_texto" class="form-label">Cor do texto:</label>
      <input type="color" class="form-control" id="cor_texto" name="cor_texto" value="<?php echo isset($_COOKIE['cor_texto']) ? $_COOKIE['cor_texto'] : '#000000'; ?>">
    </div>

    <button type="submit" class="btn btn-primary">Gerar Página</button>
    <button type="button" class="btn btn-secondary" onclick="limparFormulario()">Limpar</button>
    <button type="button" class="btn btn-danger" onclick="limparCookies()">Limpar Cookies</button>
  </form>
</div>

<script>
function limparFormulario() {
  document.getElementById("titulo").value = "";
  document.getElementById("corpo").value = "";
  document.getElementById("imagem").value = "";
  document.getElementById("cor_texto").value = "#000000";
}

function limparCookies() {
  document.cookie = 'titulo=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
  document.cookie = 'alinhamento=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
  document.cookie = 'corpo=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
  document.cookie = 'imagem=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
  document.cookie = 'mostrar_imagem=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
  document.cookie = 'cor_texto=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
}
</script>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
