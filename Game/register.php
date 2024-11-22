<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Verificar se o email já está registrado
    $sql = "SELECT idUsuario FROM usuarios WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $error = "Email já registrado!";
    } else {
        // Inserir novo usuário na tabela `usuarios`
        $sql = "INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $nome, $email, $senha);
        if ($stmt->execute()) {
            $idUsuario = $stmt->insert_id;
            $_SESSION['idUsuario'] = $idUsuario;
            $_SESSION['nome'] = $nome;

            // Criar um novo avatar para o usuário
            $sqlInsertAvatar = "INSERT INTO avatares (idUsuario) VALUES (?)";
            $stmtInsertAvatar = $conn->prepare($sqlInsertAvatar);
            $stmtInsertAvatar->bind_param("i", $idUsuario);
            $stmtInsertAvatar->execute();
            $stmtInsertAvatar->close();

            header("Location: index.php");
        } else {
            $error = "Erro ao registrar usuário!";
        }
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
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

        /* Estilizando o formulário de cadastro */
        form {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        /* Estilizando inputs e o botão */
        input[type="text"], input[type="email"], input[type="password"] {
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
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
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
    <form method="POST" action="register.php">
        <h1>Cadastro</h1>
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>
        <br>
        <button type="submit">Cadastrar</button>
        <p>Já tem uma conta? <a href="login.php">Faça login</a></p>
        <?php if (isset($error)) { echo "<p>$error</p>"; } ?>
    </form>
</body>
</html>
