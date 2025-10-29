<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento</title>
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
    color: #1e5fa0; /* tom de azul mais escuro para contraste */
    margin-top: 40px;
}

form {
    background-color: #ffffff;
    max-width: 500px;
    margin: 40px auto;
    padding: 25px 35px;
    border-radius: 10px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
}

label {
    display: block;
    font-weight: 600;
    margin-bottom: 5px;
}

input[type="text"],
input[type="number"],
input[type="date"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #bcd4ec;
    border-radius: 5px;
    margin-bottom: 15px;
    box-sizing: border-box;
}

input[type="radio"] {
    margin-right: 5px;
}

input[type="submit"] {
    background-color: #1e5fa0;
    color: white;
    border: none;
    padding: 12px 20px;
    border-radius: 6px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
    background-color: #174d80;
}

    </style>

</head>
<body>
    <h2>Agendamento de Concerto de Eletrodoméstcos</h2>
    <form action="recebe.php?campanha=agendamento&versao=2.0" method="post">
    <label>Nome:</label>
    <input type="text" name="nome" required ><br><br>
    <label>Telefone:</label>
    <input type="number" name="telefone" required ><br><br>
    <label>Tipo de aparelho:</label>
    <input type="radio" name="aparelho" value="geladeira" required >Geladeira<br><br>
    <input type="radio" name="aparelho" value="micro-ondas" required >Micro-ondas<br><br>
    <input type="radio" name="aparelho" value="maquina" required >Máquina de lavar roupa<br><br>
    <input type="radio" name="aparelho" value="fogao" required >Fogão<br><br>
    <label>Data do atendimento:</label>
    <input type="date" name="data" required ><br><br>
    <label>Descrição do problema:</label>
    <input type="text" name="problema" required ><br><br>
    <input type="submit" value="Enviar">
    </form>
    

</body>
</html>