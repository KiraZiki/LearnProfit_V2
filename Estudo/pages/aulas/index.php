<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>HydraStacks</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <!-- Menu superior do site a Esquerda(Logo que ao clicar volta para home indiferente da pagina), 
        meio(páginas de aulas para realizar as atividades e aprender conforme o level do usuário, área de suporte ao usuário),
        direita(perfil do usuário, aonde ele irá clicar para fazer o logIn ou o cadastro no site) -->
    <header class="top">
    <nav class="logo"><a href="../../"><img src="../../../assets/HydraIcon.png" alt="Logo Learn Profit" class="imglogo"></a></nav>
        <nav class="options">
            <div class="op">
                <div class="aulas"><a href=".">Aulas</a></div>
                <div class="suporte"><a href="../suporte">Suporte</a></div>
                <div class="questionario"><a href="../questionario/">Questionário</a></div>
            </div>
            <div class="opg">
                <div class="game"><a href="../../../Game/">Games</a></div>
            </div>
        </nav>
        <nav class="perfil">
            <div class="cadastro"><a href="../cadastro/">Cadastrar</a></div>
        </nav>
    </header>
    
    <!-- Corpo do site, onde ficará todas as informações relevantes presentes nos protótipos -->
    <section class="mid">
        <div class="left" onclick="prevImage()">
            <svg xmlns="http://www.w3.org/2000/svg" width="20em" height="20em" viewBox="0 0 24 24" class="prev">
                <path d="m5 12 7 6v-5h6v-2h-6V6z"></path>
            </svg>
        </div>
        <div class="midmid">
            <div class="midtop">
                <img src="../../../assets/Begginer.png" alt="Image Beginner" class="small-img selected" data-index="0">
                <img src="../../../assets/Median.png" alt="Image Median" class="small-img" data-index="1">
                <img src="../../../assets/HydraIcon.png" alt="Image High" class="small-img" data-index="2">
            </div>
            <div class="midmidmid">
                <img src="../../../assets/Begginer.png" alt="Image Beginner" class="large-img" id="main-image">
                <div class="enter" id="enter-btn" style="pointer: none;">Entrar no nível</div>
            </div>
            <div class="midbot">
                <label id="label">Beginner</label>
                <p id="description">
                    Este nível é destinado às pessoas que não têm afinidade com programação sobre Estrutura de Dados. Aqui será o lugar ideal para seu início de aprendizado.
                </p>
            </div>
        </div>
        <div class="right" onclick="nextImage()">
            <svg xmlns="http://www.w3.org/2000/svg" width="20em" height="20em" viewBox="0 0 24 24" class="next">
                <path d="m19 12-7-6v5H6v2h6v5z"></path>
            </svg>
        </div>
    </section>
    <script src="main.js"></script>
</body>
</html>