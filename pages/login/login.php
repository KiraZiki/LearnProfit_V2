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

// Processa o formulário de login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

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
            header("Location: index.php"); // Redireciona para a página inicial
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
    <title>Login - Learn Profit</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
</head>
<body>
    <header>
        <h1>Login</h1>
    </header>
    
    <section>
        <form action="login.php" method="post">
            <div>
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" required>
            </div>
            <div>
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required>
            </div>
            <button type="submit">Entrar</button>
        </form>
        <p>Não tem uma conta? <a href="cadastro.php">Cadastrar</a></p>
    </section>
</body>
</html>
