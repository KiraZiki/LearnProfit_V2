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
</head>
<body>
    <h1>Cadastro</h1>
    <form method="POST" action="register.php">
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
    </form>
    <?php if (isset($error)) { echo "<p>$error</p>"; } ?>
</body>
</html>