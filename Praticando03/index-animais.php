<?php

$clique = filter_input(INPUT_GET, 'clique', FILTER_SANITIZE_SPECIAL_CHARS);
$ultimos = filter_input(INPUT_GET, 'ultimos', FILTER_SANITIZE_SPECIAL_CHARS);

if ($clique) {
    switch ($clique) {
        case 'Lontra':
            $animal = 'Lontra';
            $curiosidade = 'As lontras são mamíferos carismáticos e brincalhões. Elas dão as mãos para não se separarem enquanto dormem no mar.';
            $ultimos .= "Lontra,";
            break;
        case 'Elefante':
            $animal = 'Elefante';
            $curiosidade = 'Elefantes são os maiores mamíferos terrestres. Possuem trombas incrivelmente flexíveis e inteligência notável.';
            $ultimos .= "Elefante,";
            break;
        case 'Pinguim':
            $animal = 'Pinguim';
            $curiosidade = 'Pinguins são aves marinhas adaptadas à vida na água. Não voam, mas nadam habilmente com suas asas transformadas em nadadeiras.';
            $ultimos .= "Pinguim,";
            break;
        case 'Guepardo':
            $animal = 'Guepardo';
            $curiosidade = 'uepardos são os animais terrestres mais rápidos, atingindo velocidades de até 100 km/h. Possuem corpos esbeltos e manchas distintas.';
            $ultimos .= "Guepardo,";
            break;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
    .bloco {
        display: flex;
        justify-content: space-around;
        align-items: center;
        flex-wrap: wrap;
    }

    img:hover {
        transform: scale(1.1);
        border: 2px solid red;
    }
    </style>
</head>

<body>
    <div class="container">
        <h1>Praticando 3 - Animais</h1>
        <hr />
        <div class="bloco">
            <a href="index-animais.php?clique=Lontra&ultimos=<?= $ultimos ?>"><img
                    src="https://static.escolakids.uol.com.br/2019/07/lontra.jpg" width="300" height="200"
                    alt="Lontra"></a>
            <a href="index-animais.php?clique=Elefante&ultimos=<?= $ultimos ?>"><img
                    src="https://braziljournal.com/wp-content/uploads/2023/11/elefante.jpeg"
                    width="300" height="200" alt="Elefante"></a>
            <a href="index-animais.php?clique=Pinguim&ultimos=<?= $ultimos ?>"><img
                    src="https://static.todamateria.com.br/upload/pi/ng/pinguim01-cke.jpg"
                    width="300" height="200" alt="Pinguim"></a>
            <a href="index-animais.php?clique=Guepardo&ultimos=<?= $ultimos ?>"><img
                    src="https://d26lpennugtm8s.cloudfront.net/stores/890/836/rte/por-que-o-guepardo-corre-tao-rapido.jpg" width="300"
                    height="200" alt="Guepardo"></a>
        </div>
        <br />
        <div>
            <?php

            if ($clique) :
            ?>
            <p>
                Você clicou no <b><?= $animal ?></b>.
            </p>
            <p>
                <?= $curiosidade ?>
            </p>
            <p>
                <a href="index-animais.php">Limpar tudo</a>
            </p>

            <?php
            endif;

            if ($ultimos && (substr_count($ultimos, ',') > 1)) :
            ?>

            <p>
                Últimos animais clicados:
            </p>

            <?php
                $arrDividido = explode(',', $ultimos);
                $i = 0;
                $cont = substr_count($ultimos, ',');
                $cont -= 1;
                foreach ($arrDividido as $strDiv) {
                    if ($i < $cont) {
                        echo '<b>' . $strDiv . '</b><br />';
                    }
                    $i++;
                }
            endif;
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>