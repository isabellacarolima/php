<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
</head>

<body>
    <h2>Cadastro de Podrutos</h2>
    <form action="recebe.php?campanha=blackfriday&versao=2.0" method="post">
        <label>Nome do produto:</label>
        <input type="text" name="produto" required><br><br>
        <label>Categoria:</label>
        <input type="text" name="categoria" required><br><br>
        <label>Preço:</label>
        <input type="number" name="valor" required><br><br>
        <label>Quantidade em estoque:</label>
        <input type="number" name="quantidade" required><br><br>
        <input type="submit" value="Enviar">
    </form>

    
</body>

</html>