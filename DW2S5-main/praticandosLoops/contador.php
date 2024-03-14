<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Contador com GET</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        .form-control{
             width: 50%;           
        }
    </style>
</head>
<body>

<div class="container mt-5 mx-auto">
    <h2 class="mb-4">Contador com GET</h2>

    <form method="GET" action="">
        <div class="form-group">
            <label for="valor_inicial">Valor inicial</label>
            <input type="number" class="form-control" id="valor_inicial" name="valor_inicial" required>
            
            <label for="incremento">Incremento</label>
            <input type="number" class="form-control" id="incremento" name="incremento" required>
            
            <label for="valor_final">Valor Final</label>
            <input type="number" class="form-control" id="valor_final" name="valor_final" required>
        </div>
        <button type="submit" class="btn btn-primary">Calcular</button>
        <button type="button" class="btn btn-secondary" id="limparBtn">Limpar</button>
    </form>

    
    <div id="resultado">
        
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "GET") {

        $valor_inicial = isset($_GET['valor_inicial']) ? $_GET['valor_inicial'] : '';
        $incremento = isset($_GET['incremento']) ? $_GET['incremento'] : '';
        $valor_final = isset($_GET['valor_final']) ? $_GET['valor_final'] : '';


        if ($valor_inicial !== '' && $incremento !== '' && $valor_final !== '') {
 
            echo "<ul>";
            for ($i = $valor_inicial; $i <= $valor_final; $i += $incremento) {
                echo "<li>$i</li>";
            }
            echo "</ul>";
        } else {
            echo "<p class='text-danger mt-4'>Por favor, preencha todos os campos do formulário.</p>";
        }
    }
    ?>
    
    </div>
</div>


<!-- Adicione os scripts do Bootstrap CDN -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script>
    
    document.getElementById('limparBtn').addEventListener('click', function() {
        
        document.getElementById('resultado').innerHTML = '';
    });
</script>

</body>
</html>
