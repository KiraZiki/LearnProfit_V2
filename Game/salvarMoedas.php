<?php
function salvarMoedas($idUsuario, $moedas) {
    // Configurações do banco de dados
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "learn_profit";

    // Cria a conexão
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica a conexão
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

    // Prepara a declaração SQL
    $sql = "UPDATE avatares SET moedas = moedas + ? WHERE idUsuario = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        die("Erro na preparação da declaração: " . $conn->error);
    }

    // Vincula os parâmetros
    $stmt->bind_param("ii", $moedas, $idUsuario);

    // Executa a declaração
    if ($stmt->execute() === false) {
        die("Erro na execução da declaração: " . $stmt->error);
    }

    // Fecha a declaração e a conexão
    $stmt->close();
    $conn->close();
}

// Supondo que você tenha uma variável $moedasGanhas que contém o número de moedas ganhas no jogo
// Supondo que você tenha uma variável $moedasGanhas que contém o número de moedas ganhas no jogo
$moedasGanhas = $_POST['moedasGanhas']; // Valor vindo de um formulário ou requisição

// Supondo que você tenha uma variável $idUsuario que contém o ID do usuário
$idUsuario = $_POST['idUsuario']; // Valor vindo de um formulário ou requisição

// Chama a função para salvar as moedas ganhas no banco de dados
salvarMoedas($idUsuario, $moedasGanhas);
?>
<!-- // Supondo que você tenha uma variável $moedasGanhas que contém o número de moedas ganhas no jogo
$moedasGanhas = 150; // Exemplo de valor

// Supondo que você tenha uma variável $idUsuario que contém o ID do usuário
$idUsuario = 1; // Exemplo de valor

// Chama a função para salvar as moedas ganhas no banco de dados
salvarMoedas($idUsuario, $moedasGanhas); -->