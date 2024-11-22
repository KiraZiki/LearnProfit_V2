<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Verificar se o usuário existe na tabela `usuarios`
    $sql = "SELECT idUsuario, nome FROM usuarios WHERE email = ? AND senha = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $senha);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($idUsuario, $nome);
        $stmt->fetch();

        // Verificar se o usuário já tem um avatar na tabela `avatares`
        $sqlAvatar = "SELECT idAvatar FROM avatares WHERE idUsuario = ?";
        $stmtAvatar = $conn->prepare($sqlAvatar);
        $stmtAvatar->bind_param("i", $idUsuario);
        $stmtAvatar->execute();
        $stmtAvatar->store_result();

        if ($stmtAvatar->num_rows == 0) {
            // Criar um novo avatar para o usuário se não existir
            $sqlInsertAvatar = "INSERT INTO avatares (idUsuario) VALUES (?)";
            $stmtInsertAvatar = $conn->prepare($sqlInsertAvatar);
            $stmtInsertAvatar->bind_param("i", $idUsuario);
            $stmtInsertAvatar->execute();
            $stmtInsertAvatar->close();
        }

        $_SESSION['idUsuario'] = $idUsuario;
        $_SESSION['nome'] = $nome;
        header("Location: index.php");
    } else {
        $error = "Email ou senha incorretos!";
    }

    $stmt->close();
    $stmtAvatar->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        /* Resetando margens e padding */
        body, html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            height: 100%;
        }

        /* Estilizando a página para centralizar o conteúdo */
        body {
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }

        /* Estilizando o formulário de login */
        form {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        /* Estilizando inputs e o botão */
        input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        /* Estilizando links */
        a {
            color: #007BFF;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        /* Estilo para mensagens de erro */
        p {
            color: red;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <form method="POST" action="login.php">
        <h1>Login</h1>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>
        <br>
        <button type="submit">Login</button>
        <p>Não tem uma conta? <a href="register.php">Cadastre-se</a></p>
        <?php if (isset($error)) { echo "<p>$error</p>"; } ?>
    </form>
</body>
</html>
