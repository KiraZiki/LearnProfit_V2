<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['idUsuario'])) {
    header("Location: login.php"); // Redireciona para a página de login se não estiver logado
    exit();
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Dashboard - Learn Profit</title>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
</head>
<body>
    <header>
        <h1>Bem-vindo ao Dashboard!</h1>
    </header>
    <main>
        <p>Você está logado como usuário com ID: <?php echo $_SESSION['idUsuario']; ?></p>
        <p>Esta é a sua área de usuário.</p>
        <a href="logout.php">Sair</a> <!-- Link para logout -->
    </main>
    <footer>
        <section>© 2024 Learn Profit</section>
    </footer>
</body>
</html>
