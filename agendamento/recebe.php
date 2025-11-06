<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* estilo.css */
body {
    font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    background-color: #eaf6ff; /* azul bem clarinho */
    color: #333;
    margin: 0;
    padding: 0;
}

h2 {
    text-align: center;
    color: #1e5fa0;
    margin-top: 40px;
}

/* Container centralizado com estilo de chat */
.chat-container {
    background-color: #ffffff;
    max-width: 500px;
    margin: 40px auto;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    display: flex;
    flex-direction: column;
    gap: 10px;
}

/* Bolhas de mensagem */
.mensagem {
    padding: 12px 16px;
    border-radius: 10px;
    line-height: 1.4;
    font-size: 16px;
    width: fit-content;
    max-width: 85%;
}

/* Mensagens do “usuário” (dados do formulário) */
.mensagem.usuario {
    background-color: #d8ecff; /* azul bem leve */
    align-self: flex-end;
    border: 1px solid #bcd4ec;
}

/* Mensagens do “sistema” (GET, campanha etc.) */
.mensagem.sistema {
    background-color: #f1f6fa;
    align-self: flex-start;
    border: 1px solid #d5e4f0;
}

.voltar {
    text-align: center;
    margin-top: 20px;
}

.voltar a {
    color: #1e5fa0;
    text-decoration: none;
    font-weight: 600;
}

.voltar a:hover {
    text-decoration: underline;
}

    </style>
</head>
<body>
    <div class="chat-container">
    <?php
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];
    $aparelho = $_POST["aparelho"];
    $data = $_POST["data"];
    $problema = $_POST["problema"];

    // conexão com o banco de dados 
    $conn = new mysqli ("localhost", "root", "aluno", "assistencia", 3307);

    if ($conn->connect_error) {
        die("<p style='color:red;'>Erro na conexão com o banco de dados:" . $conn->connect_error . "</p>");
    }

    //inserir os dados 
    $sql = "INSERT INTO agendamentos (nome , telefone , aparelho, data , descricao)
                VALUES ('$nome', '$telefone', '$aparelho', '$data', '$problema')";

     if ($conn->query($sql) === TRUE) {
        echo "<h3> Dados Recebidos (POST)</h3>";
        echo "Nome: $nome <br> Telefone: $telefone <br> Aparelho: $aparelho <br> Data: $data <br> Problema: $problema <br>";
    } else { 
        echo "<p style='color:red;'> Erro ao salvar: " . $conn->error . "</p>";
    }
    
    $conn->close();

}
    if (isset($_GET['campanha']) && isset($_GET['versao'])) {
        //recebendo dados via GET
        $campanha = $_GET['campanha'];
        $versao = $_GET['versao'];
    }
?>
 <a href="agen.php"> Voltar ao formulário </a>
</body>
</html>