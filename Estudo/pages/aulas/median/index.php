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
            <div class="cadastro"><a href="../../cadastro/index.php">Cadastrar</a></div>
        </nav>
    </header>
    
    <!-- Corpo do site, onde ficará todas as informações relevantes presentes nos protótipos -->
    <section class="mid">
        <div>
            <p><strong>Aula sobre Listas Duplamente Encadeadas</strong></p>
            <p>As listas duplamente encadeadas são uma estrutura de dados avançada que permite uma navegação bidirecional através dos elementos. Neste texto, vamos explorar o que são listas duplamente encadeadas, suas vantagens e desvantagens, e como implementá-las em PHP com exemplos de código comentados.</p>
        </div>

        <div>
            <p><strong>O que é uma Lista Duplamente Encadeada?</strong></p>
            <p>Uma lista duplamente encadeada é uma coleção linear de elementos, onde cada elemento (chamado de nó) contém três componentes principais:</p>
            <p>Dado: O valor armazenado no nó.<br>
            Ponteiro para o Próximo: Uma referência ao próximo nó da lista.<br>
            Ponteiro para o Anterior: Uma referência ao nó anterior na lista.</p>
        </div>

        <div>
            <p><strong>Estrutura de um Nó</strong></p>
            <p>Cada nó na lista duplamente encadeada contém um dado e duas referências (ou ponteiros) para os nós adjacentes. Em PHP, podemos definir essa estrutura com uma classe chamada Node.</p>
        </div>

        <div>
            <img src="../../../../img/Duplamente Encadeadas/1-inicio.png">
        </div>
        
        <div>
            <p><strong>Estrutura da Lista Duplamente Encadeada</strong></p>
            <p>Agora, vamos definir a classe DoublyLinkedList, que gerencia os nós e implementa as operações básicas da lista duplamente encadeada.</p>
        </div>

        <div>
            <img src="../../../../img/Duplamente Encadeadas/2-append10.png">
            <img src="../../../../img/Duplamente Encadeadas/3-append20.png">
            <img src="../../../../img/Duplamente Encadeadas/4-append30.png">
            <img src="../../../../img/Duplamente Encadeadas/5-prepend5.png">
            <img src="../../../../img/Duplamente Encadeadas/6-Delete20.png">
            <img src="../../../../img/Duplamente Encadeadas/7-Display.png">
        </div>
        
        <div>
            <p><strong>__construct</strong></p>
            <p>Inicializa a lista encadeada com a cabeça (head) e a cauda (tail) como null.</p>
        </div>

        <div>
            <p><strong>isEmpty</strong></p>
            <p>Verifica se a lista está vazia retornando true se head for null.</p>
        </div>

        <div>
            <p><strong>append</strong></p>
            <p>Adiciona um novo nó no final da lista. Se a lista estiver vazia, o novo nó se torna a cabeça e a cauda. Caso contrário, ajusta os ponteiros para adicionar o novo nó no final.</p>
        </div>

        <div>
            <p><strong>prepend</strong></p>
            <p>Adiciona um novo nó no início da lista. Se a lista estiver vazia, o novo nó se torna a cabeça e a cauda. Caso contrário, ajusta os ponteiros para adicionar o novo nó no início.</p>
        </div>

        <div>
            <p><strong>delete</strong></p>
            <p>Remove o nó que contém o valor especificado (key). Percorre a lista para encontrar o nó a ser removido, ajustando os ponteiros conforme necessário.</p>
        </div>

        <div>
            <p><strong>displayForward</strong></p>
            <p>Percorre a lista desde a cabeça até o final, coletando os dados de cada nó e os exibindo.</p>
        </div>

        <div>
            <p><strong>displayBackward</strong></p>
            <p>Percorre a lista desde a cauda até o início, coletando os dados de cada nó e os exibindo.</p>
        </div>

        <div>
            <p><strong>Vantagens das Listas Duplamente Encadeadas</strong></p>
            <p>Navegação Bidirecional: Permite percorrer a lista em ambas as direções (para frente e para trás).</p>
            <p>Facilidade de Remoção: A remoção de um nó é mais eficiente, pois não é necessário percorrer a lista desde a cabeça para encontrar o nó anterior.</p>
            <p>Inserção mais Flexível: Facilita a inserção de novos nós em qualquer posição da lista.</p>
        </div>

        <div>
            <p><strong>Desvantagens das Listas Duplamente Encadeadas</strong></p>
            <p>Uso Adicional de Memória: Cada nó requer armazenamento adicional para dois ponteiros (anterior e próximo).</p>
            <p>Complexidade: A implementação e a manutenção são mais complexas do que em listas simplesmente encadeadas.</p>
        </div>

        <div>
            <p><strong>Conclusão</strong></p>
            <p>As listas duplamente encadeadas são uma estrutura de dados poderosa que oferece navegação bidirecional, facilitando inserções e remoções em qualquer posição da lista.</p>
            <p>Embora sejam mais complexas de implementar e usem mais memória do que as listas simplesmente encadeadas, suas vantagens em flexibilidade e eficiência fazem delas uma escolha útil em muitas aplicações.</p>
            <p>Compreender como implementá-las em PHP é fundamental para desenvolver algoritmos e estruturas de dados avançadas.</p>
        </div>
        <div>
            <p><strong>Aula sobre Árvore B</strong></p>
            <p>A Árvore B é uma árvore auto-balanceada usada para armazenar grandes volumes de dados, comumente encontrada em sistemas de gerenciamento de banco de dados e sistemas de arquivos. Ao contrário das árvores binárias de busca (ABB), cada nó em uma Árvore B pode ter mais de dois filhos. Ela mantém as chaves de forma ordenada, garantindo que todos os caminhos da raiz até as folhas tenham a mesma profundidade, o que garante eficiência nas operações de busca, inserção e remoção.</p>
        </div>
        <div>
            <p><strong>Busca: </strong>Realizada de forma similar à ABB, mas permitindo múltiplos filhos por nó.
            <strong><br>Inserção: </strong>Ao inserir uma chave, se um nó atingir o limite de chaves, ele se divide e uma chave é promovida para o nó pai.
            <strong><br>Remoção: </strong>Requer fusão ou empréstimo de chaves para manter a árvore balanceada.
            <strong><br>Vantagens: </strong>Eficiência no acesso ao disco e tempo de operação de O(log n).
            <strong><br>Desvantagens: </strong>Complexa de implementar devido à necessidade de gerenciar múltiplos filhos e divisão de nós.</p>
        </div>
        <div>
        <img src="../../../../img/Arvore binaria de busca/arvoreB.png">
        </div>
        <div>
        <p><strong>Aula sobre Árvore AVL</strong></p>
            <p>A Árvore AVL é uma árvore binária de busca balanceada onde a diferença de altura entre subárvores de qualquer nó (fator de balanceamento) é no máximo 1. Ela garante que as operações de busca, inserção e remoção sejam eficientes (O(log n)).</p>
        </div>
        <div>
            <p><strong><br>Balanceamento: </strong>Após cada operação, a árvore verifica o fator de balanceamento de cada nó e realiza rotações (simples ou duplas) para manter a árvore balanceada.
            <strong><br>Busca: </strong>Semelhante à ABB, mas com a garantia de que a árvore estará balanceada, o que garante tempo de operação O(log n).
            <strong><br>Inserção e Remoção: </strong>Após uma inserção ou remoção, a árvore realiza rotações para manter o fator de balanceamento de cada nó dentro do limite.
            <strong><br>Vantagens: </strong>Operações rápidas devido ao balanceamento garantido.
            <strong><br>Desvantagens: </strong>A sobrecarga de manter o balanceamento pode tornar as operações de inserção e remoção mais complexas.</p>
        </div>
        <div>
        <img src="../../../../img/Arvore binaria de busca/arvoreavl.png">
        </div>
        <div>
            <p>Essas árvores são importantes em contextos onde o desempenho das operações precisa ser garantido em grandes volumes de dados.</p>
        </div>
    </section>
    
    <!-- Todas as informações dos Devs presentes aqui(forma de crédito por ajudar a desenvolver o site) MUDAR COM URGENCIA -->
    <footer class="bot">
        <section class="footerL">HydraStacks</section>
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