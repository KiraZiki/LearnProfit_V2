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
        <div>
            <p><strong>Aula sobre Árvore Binária de Busca (ABB)</strong></p>
            <p>Uma Árvore Binária de Busca (ABB) é uma estrutura de dados amplamente utilizada na área de ciência da computação, especialmente para operações de busca, inserção e remoção de dados de maneira eficiente. A ABB é um tipo de árvore binária em que cada nó tem, no máximo, dois filhos: um à esquerda e outro à direita. O princípio fundamental de uma ABB é que ela deve manter uma propriedade de ordenação, o que facilita a busca de elementos de forma eficiente.</p>
        </div>
        <div>   
            <p><strong>Estrutura Básica de uma Árvore Binária de Busca</strong></p>
            <p>A estrutura de uma ABB é composta por nós, e cada nó possui: Chave (valor): A informação armazenada no nó. Subárvore esquerda: A subárvore que contém apenas valores menores que a chave do nó. Subárvore direita: A subárvore que contém apenas valores maiores que a chave do nó. A ideia principal de uma árvore binária de busca é que, para cada nó, todos os valores da subárvore esquerda são menores que o valor armazenado no nó, e todos os valores da subárvore direita são maiores. Isso torna a ABB muito eficiente para operações de busca, já que a busca pode ser feita de forma semelhante a uma pesquisa binária.</p>
        </div>
        <div>   
            <p><strong>Exemplo de uma Árvore Binária de Busca:</strong></p>
            <img src="../../../../img/Arvore binaria de busca/arvore.png">
        </div>
        <div>
            <p>O valor 8 é a raiz da árvore. O valor 3 é menor que 8, então está à esquerda. O valor 10 é maior que 8, então está à direita. E assim por diante, seguindo a regra de que todos os nós à esquerda são menores e todos à direita são maiores.</p>
        </div>
        <div>   
            <p><strong>Operações Básicas em uma Árvore Binária de Busca</strong></p>
            <p><strong><br>1. Inserção<br></strong>
Inserir um novo elemento em uma ABB envolve buscar o local correto onde o valor pode ser inserido. O processo de inserção segue a regra de que, ao inserir, se o valor for menor que a chave do nó atual, a inserção ocorre na subárvore esquerda, e se for maior, na subárvore direita. O processo é recursivo até encontrar um nó com um filho nulo, onde o novo valor é inserido.

Exemplo de Inserção: Suponha que queremos inserir o valor 5 na árvore acima. Começamos pela raiz (8), já que 5 é menor que 8, vamos para a subárvore esquerda (3). Como 5 é maior que 3, movemos para a subárvore direita (6). Como 5 é menor que 6, inserimos o valor 5 à esquerda de 6.

<strong><br>2. Busca<br></strong>
A busca por um valor em uma ABB também é eficiente, utilizando a mesma ideia da busca binária. Começa pela raiz e, a cada comparação, descarta metade dos elementos, indo para a subárvore esquerda se o valor buscado for menor e para a subárvore direita se for maior. O processo é repetido recursivamente até encontrar o valor ou chegar a uma folha sem sucesso.

Exemplo de Busca: Suponha que desejamos buscar o valor 7 na árvore. Começamos pela raiz (8). Como 7 é menor que 8, vamos para a subárvore esquerda (3). De novo, como 7 é maior que 3, vamos para a subárvore direita (6). Por fim, como 7 é maior que 6, encontramos o valor 7 à direita de 6.

<strong><br>3. Remoção<br></strong>
Remover um nó de uma ABB pode ser um pouco mais complicado, pois há três casos a considerar:

Caso 1: O nó não tem filhos (nó folha): Nesse caso, o nó pode simplesmente ser removido.
Caso 2: O nó tem um único filho: O nó é removido e o único filho do nó é colocado no lugar do nó removido.
Caso 3: O nó tem dois filhos: Nesse caso, o nó precisa ser substituído pelo sucessor imediato (o menor valor na subárvore direita) ou pelo predecessor imediato (o maior valor na subárvore esquerda). Após essa substituição, o sucessor ou predecessor é removido, o que pode resultar em um caso mais simples de remoção.
Exemplo de Remoção: Suponha que queremos remover o valor 3 da árvore. Como o nó 3 tem dois filhos, substituímos o valor 3 pelo sucessor imediato, que é 4 (o menor valor na subárvore direita de 3), e em seguida removemos o nó 4.
<br>
</div>
<div>
<strong><br>Vantagens e Desvantagens da Árvore Binária de Busca<br></strong>
<strong><br>Vantagens:<br></strong>
Busca eficiente: Com a ABB, é possível fazer buscas de forma muito rápida, em tempo médio de O(log n), onde n é o número de elementos na árvore. Isso ocorre porque a árvore divide a busca pela metade a cada comparação.
Inserção e remoção rápidas: As operações de inserção e remoção também são rápidas, geralmente em O(log n), assumindo que a árvore está balanceada.
<strong><br>Desvantagens:<br></strong>
Árvore desbalanceada: No pior cenário, uma ABB pode se tornar desbalanceada (por exemplo, se os elementos forem inseridos em ordem crescente ou decrescente), transformando-se basicamente em uma lista ligada, com tempo de busca, inserção e remoção de O(n).
Manutenção do balanceamento: Algumas variações da árvore binária de busca, como a Árvore AVL e a Árvore Rubro-Negra, resolvem esse problema através de balanceamento automático, mas isso torna a implementação mais complexa.
Balanceamento de Árvore Binária de Busca
Em uma ABB balanceada, como uma Árvore AVL ou uma Árvore Rubro-Negra, as operações de inserção, remoção e busca permanecem eficientes mesmo em cenários extremos, onde a árvore pode, sem o balanceamento, se tornar uma lista ligada. Essas variações garantem que a altura da árvore seja mantida em níveis baixos, o que é essencial para o desempenho da ABB.</p>
        </div>
        <div>   
            <p><strong>Conclusão</strong></p>
            <p>A Árvore Binária de Busca (ABB) é uma estrutura fundamental e muito eficiente para várias operações de busca, inserção e remoção. Sua implementação básica é simples e sua complexidade se deve ao fato de que os dados são armazenados de forma ordenada, o que permite consultas rápidas. No entanto, é importante lembrar que a eficiência da ABB depende de seu balanceamento, o que pode ser melhorado com variações como a Árvore AVL ou a Árvore Rubro-Negra. Com o domínio da ABB, você estará bem preparado para estudar árvores mais complexas e técnicas de balanceamento.</p>
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