<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1>Praticando 4 - Gerador de Tabela</h1>
        <hr />

        <h3>Tabela <?= $_POST["linha"] ?>x<?= $_POST["coluna"] ?></h3>
        <table class="table <?= $_POST["estilo"] ?>">
            <?php
                for ($i=0; $i < $_POST["linha"]; $i++) { 
                    echo "<tr>";
                    for ($j=0; $j < $_POST["coluna"]; $j++) { 
                        echo "<td>-</td>";
                    }
                    echo "</tr>";
                }
            ?>
        </table>
    </div>
</body>

</html>