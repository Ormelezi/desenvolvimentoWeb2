<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cálculo de juros de um valor</title>
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
                <li class="nav-item">
                    <a class="nav-link" href="exercicio2.php">Exercício 2</a>
                </li>
                <li class="nav-item active">
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
  <h2 class="mt-5">MacBooks</h2>
  <div class="row">
    <div class="col-md-4">
    <div class="h-100 p-3 card">
      <img src="https://m.media-amazon.com/images/I/411d1gOi6JL._AC_SL1000_.jpg" class="card-img-top img-fluid" alt="MacBook Air 13">
        <div class="card-body">
          <h5 class="card-title">MacBook Pro 16" (M3 Pro)</h5>
          <p class="card-text">MacBook Pro (2023). O notebook da Apple com chip M3 Pro, CPU 12-core e GPU 18-core: Tela Liquid Retina XDR de 16 pol, 18GB memória unificada e SSD 512GB. Funciona com o iPhone/iPad. Preto-espacial.</p>
          <h5 class="card-text">Preço: R$ 28999</h5>
          <a href="#" class="btn btn-primary" onclick="calcularParcelas(28999)">Formas de Pagamento</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
    <div class="h-100 p-3 card">
        <img src="https://m.media-amazon.com/images/I/41nhTCZI1SL._AC_SL1000_.jpg" class="card-img-top" alt="MacBook Pro 14">
        <div class="card-body">
          <h5 class="card-title">MacBook Pro 14" (M3)</h5>
          <p class="card-text">MacBook Pro (2023). O notebook da Apple com chip M3. CPU de 8-core e GPU de 10-core: Tela Liquid Retina XDR de 14,2 pol, 8GB memória unificada e SSD 512GB. Funciona com o iPhone/iPad. Cinza-espacial.</p>
          <h5 class="card-text">Preço: R$ 18499</h5>
          <a href="#" class="btn btn-primary" onclick="calcularParcelas(18499)">Formas de Pagamento</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
    <div class="h-100 p-3 card">
        <img src="https://m.media-amazon.com/images/I/81Fm0tRFdHL._AC_SL1500_.jpg" class="card-img-top" alt="MacBook Air 15.2">
        <div class="card-body">
          <h5 class="card-title">MacBook Air 15.2" (M2)</h5>
          <p class="card-text">Notebook MacBook Air (2023) Apple com chip M2: tela Liquid Retina de 15,3 polegadas, 8GB GB de RAM, SSD de de 256 GB GB, teclado retroiluminado, câmera FaceTime HD de 1080p e Touch ID. Cinza-Escuro.</p>
          <h5 class="card-text">Preço: R$ 12199</h5>
          <a href="#" class="btn btn-primary" onclick="calcularParcelas(12199)">Formas de Pagamento</a>
        </div>
      </div>
    </div>
  </div>

  <div id="formasPagamento" class="mt-5"></div>
</div>

<script>
function calcularParcelas(preco) {
  var desconto = preco * 0.05;
  var acrescimo_5x = preco * 0.05;
  var acrescimo_12x = preco * 0.1;
  var acrescimo_18x = preco * 0.15;
  var preco_vista = preco - desconto;
  var preco_3x = preco / 3;
  var preco_5x = (preco + acrescimo_5x) / 5;
  var preco_12x = (preco + acrescimo_12x) / 12;
  var preco_18x = (preco + acrescimo_18x) / 18;

  document.getElementById("formasPagamento").innerHTML = `
    <h2>Formas de Pagamento</h2>
    <p>À vista: R$ ${preco_vista.toFixed(2)} <span style="color: green;">(5% de desconto)</span></p>
    <p>Parcelado em 3x: R$ ${preco_3x.toFixed(2)}</p>
    <p>Parcelado em 5x: R$ ${preco_5x.toFixed(2)} <span style="color: red;">(5% de acréscimo)</span></p>
    <p>Parcelado em 12x: R$ ${preco_12x.toFixed(2)} <span style="color: red;">(10% de acréscimo)</span></p>
    <p>Parcelado em 18x: R$ ${preco_18x.toFixed(2)} <span style="color: red;">(15% de acréscimo)</span></p>
  `;
}
</script>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>