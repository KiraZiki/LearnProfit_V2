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
</head>
<body>
    <h1>Login</h1>
    <form method="POST" action="login.php">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>
        <br>
        <button type="submit">Login</button>
    </form>
    <p>Não tem uma conta? <a href="register.php">Cadastre-se</a></p>
    <?php if (isset($error)) { echo "<p>$error</p>"; } ?>
</body>
</html>