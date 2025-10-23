<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Formulário Outubro Rosa</h2>
    <form action="index.php" method="post"
    <label>Nome</label>
    <input type="text" name="nome" required><br><br>
    <label>Email:</label>
    <input type="email" name="email" required><br><br>
    <label>Idade:</label>
    <input type="number" name="idade" required><br><br>
    <label>Ja realizou o exame de mamografia?</label><br>
    <input type="radio" name="mamografia" value="Sim" required>Sim<br>
    <input type="radio" name="mamografia" value="Não" required>Não<br>
    <input type="submit" value="Enviar">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $idade = $_POST["idade"];
    $mamografia = $_POST["mamografia"];

    echo"<h3> Dados Recebidos (POST)</h3>";
    echo"Nome: $nome <br> Idade: $idade <br> Email: $email <br>";
    echo"Fez mamografia: $mamografia <br>";
}


?>

</body>
</html>