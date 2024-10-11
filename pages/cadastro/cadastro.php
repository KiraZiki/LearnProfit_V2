<?php
session_start(); // Inicia a sessão

// Conexão com o banco de dados
$host = 'localhost'; 
$db = 'learn_profit'; 
$user = 'root'; 
$pass = ''; 

$conn = new mysqli($host, $user, $pass, $db);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Processa o formulário de cadastro
if (isset($_POST['cadastrar'])) {
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

// Processa o formulário de login
if (isset($_POST['entrar'])) {
    $email = $_POST['email_login'];
    $senha = $_POST['senha_login'];

    // Busca o usuário no banco de dados
    $stmt = $conn->prepare("SELECT idUsuario, senha FROM Usuarios WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    // Verifica se o usuário existe
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($idUsuario, $senhaHash);
        $stmt->fetch();

        // Verifica a senha
        if (password_verify($senha, $senhaHash)) {
            // Senha correta, inicia a sessão
            $_SESSION['idUsuario'] = $idUsuario;
            header("Location: dashboard.php"); // Redireciona para a página inicial
            exit();
        } else {
            echo "Senha incorreta.";
        }
    } else {
        echo "Usuário não encontrado.";
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
            <div class="cadastro"><a href="./pages/cadastro/cadastro.php">Cadastrar</a></div>
            <div class="login"><a href="./pages/login/login.php">Login</a></div>
        </nav>
    </header>
    
    <section class="mid">
        <h1>Cadastrar</h1>
        <form action="" method="post">
            <div>
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" placeholder="Nome" required>
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Email" required>
            </div>
            <div>
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" placeholder="Senha" required>
            </div>
            <button type="submit" name="cadastrar">Cadastrar</button>
        </form>
        <div>
            <p>cadastro</p>
            <p>login</p>
        </div>
        <h1>Login</h1>
        <form action="" method="post">
            <div>
                <label for="email_login">Email:</label>
                <input type="email" id="email_login" name="email_login" placeholder="Email" required>
            </div>
            <div>
                <label for="senha_login">Senha:</label>
                <input type="password" id="senha_login" name="senha_login" placeholder="Senha" required>
            </div>
            <button type="submit" name="entrar">Entrar</button>
        </form>
        <p>Não tem uma conta? <a href="#">Cadastrar</a></p>
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