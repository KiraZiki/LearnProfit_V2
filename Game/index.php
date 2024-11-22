<?php
session_start();
include 'db.php';

if (!isset($_SESSION['idUsuario'])) {
    header("Location: login.php");
    exit();
}

$idUsuario = $_SESSION['idUsuario'];

// Obter a quantidade de moedas do jogador
$sql = "SELECT moedas FROM avatares WHERE idUsuario = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $idUsuario);
$stmt->execute();
$stmt->bind_result($moedas);
$stmt->fetch();
$stmt->close();

function listarPastas($dir) {
    $pastas = array_filter(glob($dir . '/*'), 'is_dir');
    return array_map('basename', $pastas);
}

$pastasDeJogos = listarPastas('.');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogos</title>
</head>
<body>
    <h1>Bem-vindo, <?php echo $_SESSION['nome']; ?>!</h1>
    <p>Moedas: <?php echo $moedas; ?></p>
    <a href="logout.php">Logout</a>
    <h2>Jogos Disponíveis</h2>
    <ul>
        <?php foreach ($pastasDeJogos as $pasta) { ?>
            <li><a href="<?php echo $pasta; ?>"><?php echo ucfirst($pasta); ?></a></li>
        <?php } ?>
    </ul>
</body>
</html>