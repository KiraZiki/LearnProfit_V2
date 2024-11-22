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
            <div class="cadastro"><a href="../../cadastro/index.php">Cadastrar</a></div>
        </nav>
    </header>
    
    <!-- Corpo do site, onde ficará todas as informações relevantes presentes nos protótipos -->
    <section class="mid">
        <div>
            <p><strong>Aula sobre TAD (Tipo Abstrato de Dados)</strong></p>
            <p>Os Tipos Abstratos de Dados (TADs) são um conceito fundamental em ciência da computação e programação, fornecendo uma maneira de definir e manipular dados de forma abstrata. Neste texto, exploraremos o que são TADs, suas vantagens, desvantagens e como implementá-los em PHP com exemplos de código comentados.</p>
        </div>

        <div>
            <p><strong>O que é um TAD?</strong></p>
            <p>Um Tipo Abstrato de Dados (TAD) é uma definição formal de uma estrutura de dados, juntamente com um conjunto de operações que podem ser realizadas sobre essa estrutura. Um TAD especifica o que deve ser feito, mas não como deve ser feito. Ele se concentra na interface pública e no comportamento, ocultando a implementação interna.</p>
        </div>

        <div>
            <p><strong>Características dos TADs</strong></p>
            <p>Abstração: Os detalhes internos da implementação são ocultos, permitindo que os usuários interajam com a estrutura de dados sem conhecer sua implementação.</p>
            <p>Encapsulamento: A implementação dos dados e das operações é encapsulada dentro de uma interface bem definida.</p>
            <p>Reusabilidade: Os TADs podem ser reutilizados em diferentes partes de um programa ou em diferentes projetos.</p>
            <p>Modularidade: Facilitam a decomposição de um problema em partes menores e manejáveis.</p>
        </div>

        <div>
            <p><strong>Exemplos Comuns de TADs</strong></p>
            <p>Pilha (Stack): Uma estrutura LIFO (Last In, First Out).</p>
            <p>Fila (Queue): Uma estrutura FIFO (First In, First Out).</p>
            <p>Lista (List): Uma coleção de elementos com operações para inserção, remoção e acesso.</p>
            <p>Mapa (Map) ou Dicionário (Dictionary): Uma coleção de pares chave-valor.</p>
        </div>

        <div>
            <p><strong>Implementação de um TAD em PHP: Exemplo de uma Pilha (Stack)</strong></p>
            <p>Vamos implementar uma pilha (Stack) em PHP para ilustrar o conceito de TAD.</p>
        </div>

        <div>
            <p><strong>Definição da Interface</strong></p>
            <p>Primeiro, definimos a interface que especifica as operações da pilha.</p>
        </div>

        <div>
            <img src="../../../../img/abstrato de dados/1-inicio.png">
            <img src="../../../../img/abstrato de dados/2-Push10.png">
            <img src="../../../../img/abstrato de dados/3-Push20.png">
            <img src="../../../../img/abstrato de dados/4-push30.png">
            <img src="../../../../img/abstrato de dados/5-Peek.png">
            <img src="../../../../img/abstrato de dados/6-Pop30.png">
            <img src="../../../../img/abstrato de dados/7-isEmpty ();.png">
            <img src="../../../../img/abstrato de dados/8-Pop20.png">
            <img src="../../../../img/abstrato de dados/9-pop10.png">
            <img src="../../../../img/abstrato de dados/10-isEmpty (True).png">
        </div>

        <div>
            <p><strong>Comentários sobre a Implementação</strong></p>
            <p>push($item): Adiciona um item ao topo da pilha usando a função array_push.</p>
            <p>pop(): Remove e retorna o item do topo da pilha. Lança uma exceção se a pilha estiver vazia.</p>
            <p>peek(): Retorna o item do topo da pilha sem removê-lo. Lança uma exceção se a pilha estiver vazia.</p>
            <p>isEmpty(): Verifica se a pilha está vazia retornando true se o array de itens estiver vazio.</p>
        </div>

        <div>
            <p><strong>Vantagens dos TADs</strong></p>
            <p>Abstração e Encapsulamento: Os TADs fornecem uma maneira clara e consistente de interagir com estruturas de dados, sem se preocupar com os detalhes da implementação.</p>
            <p>Manutenibilidade: Alterações na implementação interna de um TAD não afetam o código que usa o TAD, desde que a interface permaneça a mesma.</p>
            <p>Reusabilidade: Os TADs podem ser usados em diferentes partes de um programa ou em diferentes projetos, aumentando a reutilização de código.</p>
        </div>

        <div>
            <p><strong>Desvantagens dos TADs</strong></p>
            <p>Overhead: A abstração pode introduzir um overhead adicional em termos de desempenho e uso de memória.</p>
            <p>Complexidade: Definir e implementar TADs pode ser mais complexo do que usar estruturas de dados simples diretamente.</p>
        </div>

        <div>
            <p><strong>Conclusão</strong></p>
            <p>Os Tipos Abstratos de Dados são uma ferramenta poderosa na programação que permite a criação de estruturas de dados eficientes e reutilizáveis. Eles fornecem uma maneira de encapsular e abstrair a lógica de manipulação de dados, facilitando a manutenção e a reutilização do código. Compreender e saber implementar TADs em PHP é essencial para desenvolver soluções de software robustas e escaláveis.</p>
        </div>
        <div>
            <p><strong>Desvantagens dos TADs</strong></p>
            <p>Overhead: A abstração pode introduzir um overhead adicional em termos de desempenho e uso de memória.</p>
            <p>Complexidade: Definir e implementar TADs pode ser mais complexo do que usar estruturas de dados simples diretamente.</p>
        </div>
        <div>
            <p><strong>Aula sobre Árvore Trie</strong></p>
            <p>A Árvore Trie (ou Prefix Tree) é uma estrutura de dados usada para armazenar strings de forma eficiente, especialmente em cenários de busca de prefixos. Ela é particularmente útil em algoritmos de autocompletar e buscas de palavras.</p>
        </div>
        <div>
            <p><strong>Aula sobre Árvore Trie</strong></p>
            <p><strong><br>Estrutura:</strong> Cada nó da árvore representa um caractere de uma string. As strings compartilham nós comuns quando possuem prefixos em comum, o que torna a Trie eficiente para buscas e prefixos.
            <strong><br>Busca:</strong> A busca por uma palavra em uma Trie é realizada seguindo os caracteres da palavra em cada nível da árvore. A operação é rápida, com tempo O(k), onde k é o comprimento da palavra.
            <strong><br>Inserção:</strong> Para inserir uma palavra, percorre-se a árvore de acordo com os caracteres da palavra. Se um nó não existir para um caractere, ele é criado.
            <strong><br>Remoção:</strong> A remoção de palavras pode exigir a verificação de nós e a exclusão de nós quando não houver mais palavras compartilhando esse prefixo.
            <strong><br>Vantagens:</strong> Busca e inserção eficientes para strings e prefixos, tornando a Trie muito útil para dicionários e sugestões de autocompletar.
            <strong><br>Desvantagens:</strong> Usa mais memória do que outras estruturas de dados como as ABB, pois cada nó precisa armazenar um ponteiro para cada possível caractere.
</p>
        </div>
        <div>
        <p><strong>Exemplo de uma Árvore TRIE:</strong></p>
            <img src="../../../../img/Arvore binaria de busca/arvoretrie.png">
        </div>
        <div>
            <p><strong>Conclusão</strong></p>
            <p>A Árvore Trie é uma estrutura de dados extremamente útil quando o objetivo é realizar buscas rápidas, especialmente quando lidamos com um grande volume de strings ou quando a busca por prefixos é necessária. Sua capacidade de compartilhar prefixos entre as palavras torna as operações de busca e inserção muito eficientes. No entanto, o principal ponto de atenção é o consumo de memória, que pode ser significativo dependendo do número de palavras e do tamanho dos caracteres armazenados. Mesmo com essa desvantagem, suas vantagens são evidentes em casos de autocompletar, dicionários e outras aplicações que exigem uma busca rápida e eficiente por prefixos.</p>
        </div>
        <div>
            <p><strong>Aula sobre Árvore Rubro-Negra</strong></p>
            <p>A Árvore Rubro-Negra é uma árvore binária de busca auto-balanceada, onde cada nó possui uma cor (vermelho ou negro). Ela é uma variação das árvores binárias de busca que garante um balanceamento eficiente, mantendo o tempo de operação das operações em O(log n).</p>
        </div>
        <div>
            <p><strong>Propriedades:</strong></p>
            <p>Cada nó é vermelho ou negro.<br>
A raiz é sempre negra.<br>
Os filhos de um nó vermelho são sempre negros.<br>
De qualquer nó, o número de nós negros no caminho até as folhas deve ser o mesmo (propriedade de balanceamento).<br></p>
        </div>
        <div>
            <p><strong>Aula sobre Árvore Rubro-Negra</strong></p>
            <p><strong><br>Busca: </strong>A busca em uma árvore Rubro-Negra segue a mesma lógica das árvores binárias de busca, com a vantagem de que a estrutura é balanceada, garantindo O(log n) de complexidade.
            <strong><br>Inserção: </strong>Após a inserção de um nó, a árvore pode precisar de ajustes (rotações e mudanças de cores) para manter suas propriedades de balanceamento.
            <strong><br>Remoção: </strong>A remoção também pode exigir várias rotações e mudanças de cor para garantir que as propriedades da árvore Rubro-Negra sejam mantidas.
            <strong><br>Vantagens: </strong>A árvore Rubro-Negra garante um balanceamento eficiente, proporcionando operações rápidas com complexidade O(log n), e é frequentemente usada em implementações de mapas e conjuntos.
            <strong><br>Desvantagens: </strong>A implementação é mais complexa devido às regras de balanceamento e manutenção das cores dos nós.</p>
        </div>
        <div>
        <p><strong>Exemplo de uma Árvore Rubro-Negra:</strong></p>
            <img src="../../../../img/Arvore binaria de busca/arvorerubro.png">
        </div>
        <div>
            <p><strong>Conclusão</strong></p>
            <p>A Árvore Rubro-Negra é uma solução eficiente para manter uma árvore binária de busca balanceada. Suas propriedades garantem que as operações de inserção, remoção e busca sejam realizadas de maneira otimizada, sempre com complexidade O(log n), o que é crucial em sistemas que requerem alto desempenho e grande volume de dados. Embora sua implementação seja mais complexa devido à necessidade de ajustes após cada operação, a garantia de balanceamento torna-a uma escolha popular em diversas aplicações, como na implementação de estruturas de dados como mapas e conjuntos. Seu uso é vantajoso em cenários onde o equilíbrio constante da árvore é essencial para evitar degradação de desempenho.</p>
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