<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Learn Profit2</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <!-- Menu superior do site a Esquerda(Logo que ao clicar volta para home indiferente da pagina), 
        meio(páginas de aulas para realizar as atividades e aprender conforme o level do usuário, área de suporte ao usuário),
        direita(perfil do usuário, aonde ele irá clicar para fazer o logIn ou o cadastro no site) -->
    <header class="top">
        <nav class="logo"><a href="index.php"><img src="assets/" alt="Logo Learn Profit"></a></nav>
        <nav class="options">
            <div class="op">
                <div class="aulas"><a href="">Aulas</a></div>
                <div class="suporte"><a href="">Suporte</a></div>
                <div class="questionario"><a href="pages/questionario/questionario.php">Questionário</a></div>
            </div>
            <div class="opg">
                <div class="game"><a href="">Games</a></div>
            </div>
        </nav>
        <nav class="perfil">
            <div class="cadastro"><a href="">Cadastrar</a></div>
            <div class="login"><a href="">Login</a></div>
        </nav>
    </header>
    
    <!-- Corpo do site, onde ficará todas as informações relevantes presentes nos protótipos -->
    <section class="mid">
        
        <!-- Carrosel interativo com mensagens motivacionais relacionadas a programação(se possivel motivação sobre o tema) -->
        <div class="carrosel">

        </div>
    
        <!-- Sobre nós e explicativa do motivo do projeto e nosso objetivo com o usuário -->
        <div class="sobre">
            <h1>Nosso objetivo</h1>
            <div class="objetivo">
                <div class="leftimg"></div>
                <div class="righttext">
                <p>Nosso objetivo com você, é elevar o nível de 
                aprendizado a um horizonte jamais visto!</p>
                <p>Para isso desenvolvemos métodos para um aprendizado mais fluído e gratificante, 
                visando o seu nível de conhecimento em programação.</p>
                <p>O site conta com 3 diferentes níveis de conhecimento para qual você se sinta 
                mais incluido no ensino para ter uma linha de aprendizagem tênue e de fácil 
                compreendimento!</p>
                <p>Além de uma nova funcionalidade para o aprendizado, que são os jogos!</p>
                <p>O site disponibilizar quiz e um console para realizar os desafios propostos a você!</p>
                </div>
            </div>
        </div>
        <div class="niveis">
            <h1>Como anteriormente dito, separamos o aprendizado por níveis de conhecimentos.
            Sendo eles:</h1>
            <div class="opniveis">
                <div class="nivel1">
                    <img src="" alt="Imagem Nivel Iniciante">
                    <label>Nivel Begginer:</label>
                </div>
                <div class="nivel2">
                    <img src="" alt="Imagem Nivel Intermediário">
                    <label>Nivel Median:</label>
                </div>
                <div class="nivel3">
                    <img src="" alt="Imagem Nivel Avançado">
                    <label>Nivel High:</label>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Todas as informações dos Devs presentes aqui(forma de crédito por ajudar a desenvolver o site) MUDAR COM URGENCIA -->
    <footer class="bot">
        <section class="footerL">Learn Profit</section>
        <section class="footerR">
            <div class="bottop">GitHub<i class='bx bxl-github'></i></div>
            <div class="botmid">
                <a href="https://github.com/KiraZiki">Daniel Jacometo</a>
                <a href="https://github.com/samcioli">Samira Ocioli</a>
                <a href="https://github.com/Camarginho">Gabriel Camargo</a>
            </div>
        </section>
    </footer>


    <script src='main.js'></script>
</body>
</html>