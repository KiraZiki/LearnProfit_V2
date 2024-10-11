<?php
// Conexão com o banco de dados
$host = 'localhost'; // O servidor está em seu próprio computador
$db = 'learn_profit'; // Nome do banco de dados que você criou
$user = 'root'; // O usuário padrão do MySQL no XAMPP
$pass = ''; // A senha padrão do MySQL no XAMPP é vazia

$conn = new mysqli('localhost', 'root', '', 'learn_profit');

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Processa o formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); // Hash da senha

    // Prepara e executa a consulta
    $stmt = $conn->prepare("INSERT INTO Usuarios (nome, email, senha) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nome, $email, $senha);

    if ($stmt->execute()) {
        echo "Usuário cadastrado com sucesso!";
    } else {
        echo "Erro: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Learn Profit2</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <header class="top">
        <nav class="logo"><a href="index.php"><img src="assets/" alt="Logo Learn Profit"></a></nav>
        <nav class="options">
            <div class="op">
                <div class="aulas">Aulas</div>
                <div class="suporte">Suporte</div>
            </div>
        </nav>
        <nav class="perfil">
            <div class="cadastro"><a href="cadastro.php">Cadastrar</a></div>
            <div class="login"><a href="">Login</a></div>
        </nav>
    </header>
    
    <section class="mid">
    <div class="fundo">
        <div class="container">
            <h1 class="titulo">Cadastrar</h1>
            <form action="cadastro.php" method="post">
                <div class="campo">
                    <label for="nome"><br></label>
                    <input type="text" id="nome" name="nome" placeholder="Nome" required>
                </div>
                <div class="campo">
                    <label for="email"></label>
                    <input type="text" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="campo">
                    <label for="senha"></label>
                    <input type="password" id="senha" name="senha" placeholder="Senha" required>
                </div>
                <div class="campo">
                    <button type="submit" class="botao">Enviar</button>
                </div>
            </form>
        </div>
    </div>
    </section>
    
    <footer class="bot">
        <section class="footerL">Learn Profit</section>
        <section class="footerR">
            <div class="bottop">GitHub<i class='bx bxl-github'></i></div>
            <div class="botmid">
                <a href="https://github.com/KiraZiki">Daniel Jacometo</a>
                <a href="https://github.com/samcioli">Samira Ocioli</a>
                <a href="https://github.com/Camarginho">Gabriel Camargo</a>
            </div>
        </section>
    </footer>

    <script src='main.js'></script>
</body>
</html>
