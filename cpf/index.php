<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CPF</title>
</head>
<body>
    <h2>Sistema de Login com CPF</h2>

    <form action="index.php" method="POST">
        <label>Digite seu CPF (apenas númemeros)</label>
        <input type="text" name="cpf" minlength="11" maxlength="11" placeholder="Com 11 dígitos" required>
        <br><br>
        <input type="submit" name="cadastrar" value="Cadastrar CPF">
        <input type="submit" name="entrar" value="Entrar">
    </form>
    <hr>
    <?php
    //metodo usado POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        //captura o valor digitado no campo do CPF
        $cpf = $_POST["cpf"];

        //verifica se o CPF contém apenas números e se possui exatamento 11 dígitos 
        if (!ctype_digit($cpf)|| strlen($cpf) != 11) {
            //mostra mensagem de erro e interrompe o código
            echo "<p>O CPF deve conter exatamente 11 números.</p>";
            exit;
        }

        //Faz a conexão com o banco de dados MySQL
        //Parâmetros: servidor , usuário, senha, nome do banco e porta 
        $conn = new mysqli ("localhost", "root", "aluno", "sistemas", 3307);

        //verifica se houve erro na conexão 
        if ($conn->connect_error) {
            //se houver erro, encerra o script e mostra a mensagem 
            die ("<p> Erro ao conectar:" . $conn->connect_error . "</p>");
        }

        // se o usuário clicou em "cadastrar"
        if(isset($_POST["cadastrar"])) {
            //cria o comando SQL para inserir o CPF na tabela "usuarios"
            $sql = "INSERT INTO cliente (cpf) VALUES ('$cpf')";

            //Executa o comando e verifica se deu certo
            if ($conn->query($sql) === TRUE) {
                //Mensagem de sucesso
                echo "<p>CPF cadastrado com sucesso!</p>";
            } else {
                //caso o CPF já exista (chave primária repitida) , exibe aviso
                echo "<p>CPF já cadastrado<p/>";
            }

            
        }
        if (isset($_POST["entrar"])) {
                //cria o comando SQL para buscar o CPF no banco
                $sql = "SELECT cpf FROM cliente WHERE cpf='$cpf'";
                $result = $conn->query($sql);

                //verifica se encontrou o CPF
                if ($result->num_rows > 0) {
                    //se eoncontrou, redirecionar automaticamente para a página "recebe.php"
                    //passando o cpf pela url
                    echo "<script>window.location.href='recebe.php?cpf=$cpf';</script>";
                    exit;
                } else {
                    //se não encontrou , mostra masagem de erro
                    echo "<p>CPF não encontrado . Cadastre-se primeiro.</p>";
                }
            }

        //Fecha a conexão com o banco
        $conn->close();
    }
    
    
    ?>
    
   
</body>
</html>