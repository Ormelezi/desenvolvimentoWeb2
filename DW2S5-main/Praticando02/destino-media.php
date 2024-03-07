<?php
$nota1 = filter_input(INPUT_POST, 'nota1', FILTER_VALIDATE_FLOAT);
$nota2 = filter_input(INPUT_POST, 'nota2', FILTER_VALIDATE_FLOAT);
$nota3 = filter_input(INPUT_POST, 'nota3', FILTER_VALIDATE_FLOAT);

$media = ($nota1 + $nota2 + $nota3) / 3;

$resposta = "";

if ($media < 4) {
    $resposta = "<b style='color: red'><u>REPROVADO</u></b>";
} else if ($media >= 6) {
    $resposta = "<b style='color: green'><u>APROVADO</u></b>";
} else {
    $resposta = "de <b style='color: orange'><u>RECUPERAÇÃO</u></b>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1>Praticando - Calculadora média</h1>
        <hr />
        <p>Um aluno com as notas <b><?= $nota1 ?></b>, <b><?= $nota2 ?></b>, <b><?= $nota3 ?></b> tem uma média igual
            a <b><?= $media?></b></p>
        <br />
        <p>Com esta média o aluno está <?= $resposta ?></p>
    </div>
</body>

</html>