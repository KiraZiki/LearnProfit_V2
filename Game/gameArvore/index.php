<?php
session_start();
include '../db.php';
include '../salvarMoedas.php';

if (!isset($_SESSION['idUsuario'])) {
    header("Location: ../login.php");
    exit();
}

$idUsuario = $_SESSION['idUsuario'];

function atualizarMoedas($idUsuario, $vidas) {
    // Calcular moedas com base nas vidas restantes
    if ($vidas === 3) {
        $moedas = 20;
    } elseif ($vidas === 2) {
        $moedas = 10;
    } elseif ($vidas === 1) {
        $moedas = 5;
    } else {
        $moedas = 0;
    }

    // Salvar as moedas no banco de dados
    salvarMoedas($idUsuario, $moedas);

    // Obter a quantidade total de moedas do usuário após a atualização
    global $conn;
    $sql = "SELECT moedas FROM avatares WHERE idUsuario = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $idUsuario);
    $stmt->execute();
    $stmt->bind_result($totalMoedas);
    $stmt->fetch();
    $stmt->close();

    return ['moedas_ganhas' => $moedas, 'total_moedas' => $totalMoedas];
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo de Busca na Árvore</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 20px;
        }
        .node {
            display: inline-block;
            margin: 10px;
            padding: 10px;
            border: 1px solid #000;
            border-radius: 50%;
            background-color: #f0f0f0;
            font-weight: bold;
        }
        .tree {
            text-align: center;
            margin-bottom: 20px;
        }
        button {
            margin: 5px;
            padding: 10px 20px;
            border: none;
            background-color: #007BFF;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        #message {
            font-size: 1.2em;
            color: green;
            margin-top: 20px;
        }
        #moedas-ganhas {
            font-size: 1.2em;
            color: orange;
        }
        #vidas {
            font-size: 1.2em;
            color: red;
        }
    </style>
</head>
<body>
    <h1>Jogo de Busca na Árvore</h1>
    <div id="tree-info">
        <p id="tree-values"></p>
        <p id="root-value"></p>
        <p id="target-value"></p>
    </div>
    <div id="tree" class="tree"></div>
    <div>
        <button onclick="moveLeft()">Esquerda</button>
        <button onclick="moveRight()">Direita</button>
        <button onclick="confirmValue()">Confirmar</button>
    </div>
    <div>
        <p id="message"></p>
        <p id="moedas-ganhas"></p>
        <p id="vidas">Vidas: 3</p>
    </div>
    <script>
        class Node {
            constructor(value) {
                this.value = value;
                this.left = null;
                this.right = null;
            }
        }

        class BST {
            constructor() {
                this.root = null;
            }

            insert(value) {
                const newNode = new Node(value);
                if (this.root === null) {
                    this.root = newNode;
                } else {
                    this.insertNode(this.root, newNode);
                }
            }

            insertNode(node, newNode) {
                if (newNode.value < node.value) {
                    if (node.left === null) {
                        node.left = newNode;
                    } else {
                        this.insertNode(node.left, newNode);
                    }
                } else {
                    if (node.right === null) {
                        node.right = newNode;
                    } else {
                        this.insertNode(node.right, newNode);
                    }
                }
            }

            traverse(node, callback) {
                if (node !== null) {
                    this.traverse(node.left, callback);
                    callback(node);
                    this.traverse(node.right, callback);
                }
            }
        }

        function getRandomValues(count, min, max) {
            const values = new Set();
            while (values.size < count) {
                values.add(Math.floor(Math.random() * (max - min + 1)) + min);
            }
            return Array.from(values);
        }

        function createRandomBST() {
            const bst = new BST();
            const values = getRandomValues(7, 10, 99); // 7 valores aleatórios entre 10 e 99
            values.forEach(value => bst.insert(value));
            return { bst, values };
        }

        const { bst, values } = createRandomBST();
        let currentNode = bst.root;

        // Seleciona um valor aleatório da árvore que não seja a raiz
        const targetValues = values.filter(value => value !== bst.root.value);
        const targetValue = targetValues[Math.floor(Math.random() * targetValues.length)];

        let vidas = 3;

        function updateCurrentNode() {
            const treeDiv = document.getElementById('tree');
            treeDiv.innerHTML = `<div class="node">${currentNode.value}</div>`;
        }

        function moveLeft() {
            if (currentNode.left !== null) {
                currentNode = currentNode.left;
                updateCurrentNode();
            } else {
                alert("Não há nó à esquerda!");
            }
        }

        function moveRight() {
            if (currentNode.right !== null) {
                currentNode = currentNode.right;
                updateCurrentNode();
            } else {
                alert("Não há nó à direita!");
            }
        }

        function confirmValue() {
            if (currentNode.value === targetValue) {
                document.getElementById('message').innerText = `Parabéns! Você encontrou o número ${targetValue}.`;
                saveScore();
            } else {
                vidas--;
                document.getElementById('vidas').innerText = `Vidas: ${vidas}`;
                if (vidas === 0) {
                    document.getElementById('message').innerText = `Você perdeu todas as vidas!`;
                    saveScore();
                } else {
                    alert("Valor incorreto! Continue procurando.");
                }
            }
        }

        function startGame() {
            currentNode = bst.root;
            updateCurrentNode();
        }

        function saveScore() {
            const idUsuario = <?php echo $idUsuario; ?>;
            const xhr = new XMLHttpRequest();
            xhr.open("POST", "../salvarMoedas.php", true);
            xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    const response = JSON.parse(xhr.responseText);
                    document.getElementById('moedas-ganhas').innerText = `Você ganhou ${response.moedas_ganhas} moedas.`;
                    // Atualizar a quantidade de moedas na sessão
                    sessionStorage.setItem('total_moedas', response.total_moedas);
                }
            };
            xhr.send(JSON.stringify({ moedasGanhas: vidas, idUsuario: idUsuario }));
        }

        function initGame() {
            const valuesList = [];
            bst.traverse(bst.root, node => valuesList.push(node.value));
            document.getElementById('tree-values').innerText = `Valores da árvore: ${valuesList.join(', ')}`;
            document.getElementById('root-value').innerText = `Raiz: ${bst.root.value}`;
            document.getElementById('target-value').innerText = `Número a ser encontrado: ${targetValue}`;
            updateCurrentNode();
            startGame();
        }

        initGame();
    </script>
</body>
</html>
