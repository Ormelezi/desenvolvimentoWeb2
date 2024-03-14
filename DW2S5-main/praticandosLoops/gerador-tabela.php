<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Gerador de tabela</title>
</head>

<body>

    <div class="container mt-5">
        <h1>Gerador de tabela</h1>
        <hr />
        <form action="gerador-destino.php" method="post" class="col-4">
            <label for="">Linhas:</label>
            <input type="number" name="linha" id="linha" class="form-control mb-3">
            <label for="">Colunas:</label>
            <input type="number" name="coluna" id="coluna" class="form-control mb-3">
            <label for="">Estilo:</label>
            <select name="estilo" id="estilo" class="form-control mb-3">
                <option value="table-primary">table-primary</option>
                <option value="table-success">table-success</option>
                <option value="table-danger">table-danger</option>
                <option value="table-warning">table-warning</option>
                <option value="table-dark">table-dark</option>
            </select>
            <button type="submit" class="btn btn-primary">Enviar</button>
            <button type="reset" class="btn btn-secondary">Limpar</button>
        </form>
    </div>
</body>

</html>