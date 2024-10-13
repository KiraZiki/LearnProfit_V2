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
    <nav class="logo"><a href="../../../"><img src="../../../../assets/HydraIcon.png" alt="Logo Learn Profit" class="imglogo"></a></nav>
        <nav class="options">
            <div class="op">
                <div class="aulas"><a href="../">Aulas</a></div>
                <div class="suporte"><a href="../../suporte/">Suporte</a></div>
                <div class="questionario"><a href="../../questionario/">Questionário</a></div>
            </div>
            <div class="opg">
                <div class="game"><a href="../../../../Game/">Games</a></div>
            </div>
        </nav>
        <nav class="perfil">
            <div class="cadastro"><a href="../../cadastro/">Cadastrar</a></div>
        </nav>
    </header>
    
    <!-- Corpo do site, onde ficará todas as informações relevantes presentes nos protótipos -->
    <section class="mid">
    <div>
            <p><strong>Aula sobre Listas Simplesmente Encadeadas</strong></p>
            <p>As listas simplesmente encadeadas são uma estrutura de dados fundamental na ciência da computação, frequentemente usadas para implementar listas, filas, pilhas e outras estruturas complexas. Neste texto, vamos explorar o que são listas simplesmente encadeadas, suas vantagens e desvantagens, e como implementá-las em Python com exemplos de código comentados.</p>
        </div>

        <div>
            <p><strong>O que é uma Lista Simplesmente Encadeada?</strong></p>
            <p>Uma lista simplesmente encadeada é uma coleção linear de elementos, onde cada elemento (chamado de nó) contém dois componentes principais:</p>
            <p>Dado: O valor armazenado no nó.</p>
            <p>Ponteiro: Uma referência ao próximo nó da lista.</p>
            <p>O primeiro nó da lista é chamado de cabeça (head) e o último nó aponta para None, indicando o fim da lista.</p>
        </div>

        <div>
            <p><strong>Estrutura de um Nó</strong></p>
            <p>Primeiro, vamos definir a classe Node, que representa cada nó da lista simplesmente encadeada.</p>
        </div>

        <div>
            <img src="../../../../img/SImples cadeada/1_Inicio.png">
        </div>

        <div>
            <p><strong>Estrutura da Lista Simplesmente Encadeada</strong></p>
            <p>A classe LinkedList gerencia os nós e implementa as operações básicas da lista simplesmente encadeada.</p>
        </div>

        <div>
            <img src="../../../../img/SImples cadeada/2-append 10.png">
            <img src="../../../../img/SImples cadeada/3-Append20.png">
            <img src="../../../../img/SImples cadeada/4-Append30.png">
            <img src="../../../../img/SImples cadeada/5-Prepend5.png">
            <img src="../../../../img/SImples cadeada/6-Delete20.png">
            <img src="../../../../img/SImples cadeada/7-Display.png">
        </div>

        <div>
            <p><strong>Comentários sobre a Implementação</strong></p>
            <p>__construct: Inicializa a lista encadeada com a cabeça (head) como null.</p>
            <p>isEmpty: Verifica se a lista está vazia retornando true se head for null.</p>
            <p>append($data): Adiciona um novo nó ao final da lista. Se a lista estiver vazia, o novo nó se torna a cabeça. Caso contrário, percorre a lista até o final e adiciona o novo nó.</p>
            <p>prepend($data): Adiciona um novo nó ao início da lista. Faz o novo nó apontar para a antiga cabeça e atualiza a cabeça para ser o novo nó.</p>
            <p>delete($key): Remove o nó que contém o valor especificado (key). Percorre a lista para encontrar o nó a ser removido e ajusta os ponteiros conforme necessário.</p>
            <p>display(): Percorre a lista desde a cabeça até o final, coletando os dados de cada nó e exibindo-os.</p>
        </div>

        <div>
            <p><strong>Conclusão</strong></p>
            <p>As listas simplesmente encadeadas são uma estrutura de dados eficiente para inserir e remover elementos, especialmente quando a ordem dos elementos é importante. Com a implementação em PHP, podemos criar, manipular e exibir elementos de uma lista simplesmente encadeada, aproveitando a simplicidade e flexibilidade dessa estrutura de dados.</p>
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