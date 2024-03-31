<?php
$senha_correta = "senha_da_nasa"; 
$senha_inserida = $_POST['senha'] ?? '';
$autenticado = false;


$contadores = json_decode(file_get_contents('contadores.json'), true);

$logs = file_get_contents('log_acessos.txt');

$totalAcessos = array_sum($contadores);

if (isset($_POST['submit'])) {
    if ($senha_inserida === $senha_correta) {
        $autenticado = true;

    } else {
        $autenticado = false;
        $mensagem_erro = "Senha incorreta!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>logs de acesso</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

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
                    <li class="nav-item">
                        <a class="nav-link" href="contato.php">Contato</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="logs.php">Logs</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <?php if ($autenticado == false): ?>

            <div class="row justify-content-center">
                <div class="col-md-6 mt-5">
                    <form method="post" action="">
                        <div class="form-group">
                            <label for="senha">Senha:</label>
                            <input type="password" class="form-control form-control-sm" id="senha" name="senha" required>
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit">Enviar</button>
                    </form>
                </div>
            </div>
            <?php endif; ?>    

        <?php if (isset($mensagem_erro)): ?>

            <div class="row justify-content-center">
                <div class="alert alert-danger col-md-6 mt-5" role="alert">
                    <?= $mensagem_erro ?>
                </div>
            </div>
        </div>

        <?php endif; ?>

        <?php if ($autenticado == true): ?>
            <div class="container mt-5">
                <h1>Estatísticas de Acessos</h1>
                <p><strong>Total de acessos:</strong> <?php echo $totalAcessos; ?></p>
                <h2>Quantidade de acessos por página:</h2>
                <ul>
                    <li>Início: <?php echo $contadores['inicio.php']; ?></li>
                    <li>Sobre: <?php echo $contadores['sobre.php']; ?></li>
                    <li>Contato: <?php echo $contadores['contato.php']; ?></li>
                </ul>
                <h2>Registros de Acessos:</h2>
                <pre><?php echo $logs; ?></pre>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
