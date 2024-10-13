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
    <title>HydraStacks</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<header class="top">
<nav class="logo"><a href="../../"><img src="../../../assets/HydraIcon.png" alt="Logo Learn Profit" class="imglogo"></a></nav>
        <nav class="options">
            <div class="op">
                <div class="aulas"><a href="../aulas/">Aulas</a></div>
                <div class="suporte"><a href="../suporte/">Suporte</a></div>
                <div class="questionario"><a href="../questionario/">Questionário</a></div>
            </div>
            <div class="opg">
                <div class="game"><a href="../../../Game/">Games</a></div>
            </div>
        </nav>
        <nav class="perfil">
            <div class="cadastro"><a href=".">Cadastrar</a></div>
        </nav>
</header>
    
<section class="mid">
    <div class="cadlogMenu">
        <!-- Formulário de Cadastro -->
        <div id="cadastroForm" class="cadastroForm" style="display: none;">
            <h1>Cadastrar</h1>
            <form action="" method="post">
                <div>
                    <input type="text" id="nome" name="nome" placeholder="Nome" required>
                </div>
                <div>
                    <input type="email" id="email" name="email" placeholder="Email" required>
                </div>
                <div>
                    <input type="password" id="senha" name="senha" placeholder="Senha" required>
                </div>
                <button type="submit" name="cadastrar">Cadastrar</button>
            </form>
        </div>
        
        <!-- Div para alternar entre Cadastro e Login -->
        <div class="cadlogSwitch">
            <p id="showCadastro" style="display: flex; justify-content: center; align-items: center; cursor: pointer; width: 100%; height: 100%;">Cadastro</p>
            <p id="showLogin" style="display: flex; justify-content: center; align-items: center; cursor: pointer; display: none; width: 100%; height: 100%;">Login</p>
        </div>

        <!-- Formulário de Login -->
        <div id="loginForm" class="loginForm">
            <h1>Login</h1>
            <form action="" method="post">
                <div>
                    <input type="email" id="email_login" name="email_login" placeholder="Email" required>
                </div>
                <div>
                    <input type="password" id="senha_login" name="senha_login" placeholder="Senha" required>
                </div>
                <button type="submit" name="entrar">Entrar</button>
            </form>
        </div>
    </div>
</section>

<!-- Adicione este script JavaScript -->
<script>
    document.getElementById('showCadastro').addEventListener('click', function() {
        document.getElementById('cadastroForm').style.display = 'flex';
        document.getElementById('loginForm').style.display = 'none';
        document.getElementById('showCadastro').style.display = 'none';
        document.getElementById('showLogin').style.display = 'flex';
    });

    document.getElementById('showLogin').addEventListener('click', function() {
        document.getElementById('cadastroForm').style.display = 'none';
        document.getElementById('loginForm').style.display = 'flex';
        document.getElementById('showCadastro').style.display = 'flex';
        document.getElementById('showLogin').style.display = 'none';
    });
</script>
</body>
</html>