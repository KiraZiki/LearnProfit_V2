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
        <nav class="logo"><a href="../../"><img src="assets/" alt="Logo Learn Profit"></a></nav>
        <nav class="options">
            <div class="op">
                <div class="aulas"><a href="pages/aulas/">Aulas</a></div>
                <div class="suporte"><a href="">Suporte</a></div>
                <div class="questionario"><a href="pages/questionario/questionario.php">Questionário</a></div>
            </div>
            <div class="opg">
                <div class="game"><a href="">Games</a></div>
            </div>
        </nav>
        <nav class="perfil">
            <div class="cadastro"><a href="./pages/cadastro/cadastro.php">Cadastrar</a></div>
        </nav>
    </header>
    
    <!-- Corpo do site, onde ficará todas as informações relevantes presentes nos protótipos -->
    <section class="mid">
       <div class="menu">
            <p>Nos deem feedback sobre o problema encontrado no site</p>
            <input type="text" name="relato" placeholder="Digite aqui" class="relato">
            <input type="submit" value="Enviar">
       </div>
    </section>
    <script src='main.js'></script>
</body>
</html>