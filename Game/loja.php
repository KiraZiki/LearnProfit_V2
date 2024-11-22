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

// Dados simulados de itens disponíveis para compra com imagens
$itens = [
    ['idItem' => 1, 'nome' => 'Pirata', 'preco' => 50, 'imagem' => '../img/Produtos/idle 01.png'],
    ['idItem' => 2, 'nome' => '???', 'preco' => 30, 'imagem' => 'images/escudo_ferro.png'],
    ['idItem' => 3, 'nome' => '???', 'preco' => 10, 'imagem' => 'images/pocao_vida.png'],
];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de Itens</title>
    <style>
        /* Resetando margens e padding */
        body, html {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
            height: 100%;
        }

        /* Barra de menu */
        nav {
            background-color: #333;
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 1000;
            padding: 10px 0;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav ul li {
            display: inline-block;
            margin-left: 20px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 1.2em;
            padding: 10px 20px;
            display: inline-block;
        }

        /* Estilo do botão à esquerda */
        .left-button {
            background-color: #4CAF50;
            border-radius: 5px;
        }

        .left-button:hover {
            background-color: #45a049;
        }

        /* Centralizando o conteúdo principal */
        body {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            padding-top: 80px; /* Deixa espaço para a barra de menu */
        }

        /* Título principal */
        h1 {
            font-size: 2.5em;
            margin-bottom: 20px;
            color: #4CAF50;
        }

        /* Exibição das moedas */
        p {
            font-size: 1.2em;
            margin: 10px 0;
            color: #555;
        }

        /* Lista de itens */
        ul.itens {
            list-style-type: none;
            padding: 0;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        ul.itens li {
            margin: 15px;
            background-color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            width: 250px;
            text-align: center;
        }

        ul.itens li img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            margin-bottom: 10px;
        }

        ul.itens li a {
            font-size: 1.2em;
            color: #4CAF50;
            text-decoration: none;
        }

        ul.itens li a:hover {
            color: #45a049;
        }

        /* Botão de logout */
        .logout {
            padding: 10px 20px;
            background-color: #FF5733;
            color: white;
            border-radius: 5px;
            text-decoration: none;
            font-size: 1.1em;
            margin-top: 20px;
        }

        .logout:hover {
            background-color: #c0392b;
        }
    </style>
</head>
<body>
    <!-- Barra de menu com o nome do usuário à direita e um botão à esquerda -->
    <nav>
        <ul>
            <!-- Botão à esquerda -->
            <li><a href="../Estudo/index.php" class="left-button">Estudos</a></li>
            <!-- Nome do usuário à direita -->
            <li style="color: white; font-size: 1.2em; padding-top: 5px; margin-right: 20px;"><?php echo $_SESSION['nome']; ?></li>
        </ul>
    </nav>

    <!-- Exibição das moedas -->
    <h1>Moedas: <?php echo $moedas; ?></h1>
    
    <!-- Botão de logout -->
    <a href="logout.php" class="logout">Logout</a>
    
    <h2>Itens Disponíveis para Compra</h2>
    <ul class="itens">
        <?php foreach ($itens as $item) { ?>
            <li>
                <img src="<?php echo $item['imagem']; ?>" alt="<?php echo $item['nome']; ?>">
                <a href="comprar.php?idItem=<?php echo $item['idItem']; ?>">
                    <?php echo ucfirst($item['nome']); ?> - <?php echo $item['preco']; ?> Moedas
                </a>
            </li>
        <?php } ?>
    </ul>
</body>
</html>
