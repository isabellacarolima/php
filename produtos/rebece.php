<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $produto = $_POST["produto"];
        $categoria = $_POST["categoria"];
        $preco = $_POST["valor"];
        $quantidade = $_POST["quantidade"];

        echo "<h3> Dados Recebidos (POST)</h3>";
        echo "Produto: $produto <br> Categoria: $categoria <br> Preço: $preco <br> Quantidade: $quantidade <br>";
    }
    if (isset($_GET['campanha']) && isset($_GET['versao'])) {
        //recebendo dados via GET
        $campanha = $_GET['campanha'];
        $versao = $_GET['versao'];
    }

    ?>
</body>

</html>