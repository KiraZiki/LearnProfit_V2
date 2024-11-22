<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "learn_profit"; // Substitua pelo nome do seu banco de dados

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>