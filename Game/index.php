<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>HydraStacks</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js' defer></script>
</head>
<body>
    <h1>HydraStacks - Jogos de Estrutura de Dados</h1>
    <div id="moedas">Moedas: 0</div>
    <section id="facil">
        <h2>Nível Fácil</h2>
        <div id="jogo-facil"></div>
        <button onclick="reiniciarFacil()">Reiniciar</button>
        <p id="moedas-necessarias-medio">Moedas necessárias para avançar: 5</p>
        <button id="comprar-medio" onclick="comprarNivel('medio')" disabled>Comprar Nível Médio</button>
    </section>
    <section id="medio" style="display: none;">
        <h2>Nível Médio</h2>
        <div id="jogo-medio"></div>
        <button onclick="reiniciarMedio()">Reiniciar</button>
        <p id="moedas-necessarias-dificil">Moedas necessárias para avançar: 10</p>
        <button id="comprar-dificil" onclick="comprarNivel('dificil')" disabled>Comprar Nível Difícil</button>
    </section>
    <section id="dificil" style="display: none;">
        <h2>Nível Difícil</h2>
        <div id="jogo-dificil"></div>
        <button onclick="reiniciarDificil()">Reiniciar</button>
    </section>
</body>
</html>