<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tabuada com Formulário GET</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">Tabuada com Formulário GET</h2>

    <form method="GET" action="">
        <div class="form-group">
            <label for="valor">Digite um valor:</label>
            <input type="number" class="form-control" id="valor" name="valor" required>
        </div>
        <button type="submit" class="btn btn-primary">Calcular</button>
    </form>

    <?php
    // Verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        // Obtém o valor enviado pelo formulário
        $valor = isset($_GET['valor']) ? $_GET['valor'] : '';

        // Exibe a tabuada
        if (is_numeric($valor)) {
            echo "<h4 class='mt-4'>Tabuada do $valor:</h4>";
            echo "<ul>";
            for ($i = 1; $i <= 10; $i++) {
                $resultado = $valor * $i;
                echo "<li>$valor x $i = $resultado</li>";
            }
            echo "</ul>";
        } else {
            echo "<p class='text-danger mt-4'>Por favor, digite um valor numérico.</p>";
        }
    }
    ?>

</div>

<!-- Adicione os scripts do Bootstrap CDN -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
