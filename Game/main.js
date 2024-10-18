let moedas = 0;
let nivelAtual = 'facil';
let perguntaAtual = 0;

document.addEventListener('DOMContentLoaded', () => {
    iniciarNivel('facil');
    atualizarMoedas();
});

function atualizarMoedas() {
    document.getElementById('moedas').textContent = `Moedas: ${moedas}`;
    document.getElementById('comprar-medio').disabled = moedas < 5;
    document.getElementById('comprar-dificil').disabled = moedas < 10;
}

function iniciarNivel(nivel) {
    nivelAtual = nivel;
    perguntaAtual = 0;
    iniciarProximaPergunta();
}

function iniciarProximaPergunta() {
    const perguntas = {
        facil: [
            {
                pergunta: 'Qual é a sequência correta de inserção em uma fila simplesmente encadeada em ordem crescente?',
                opcoes: ['1 -> 2 -> 3', '3 -> 2 -> 1', '2 -> 1 -> 3', '1 -> 3 -> 2'],
                correta: '1 -> 2 -> 3'
            },
            {
                pergunta: 'Qual é a operação para adicionar um elemento em uma fila?',
                opcoes: ['push', 'enqueue', 'pop', 'dequeue'],
                correta: 'enqueue'
            },
            {
                pergunta: 'Qual é a operação para remover um elemento de uma fila?',
                opcoes: ['push', 'enqueue', 'pop', 'dequeue'],
                correta: 'dequeue'
            }
        ],
        medio: [
            {
                pergunta: 'Qual das seguintes listas duplamente encadeadas está correta?',
                opcoes: ['A <-> B <-> C', 'A <-> C <-> B', 'B <-> A <-> C', 'C <-> B <-> A'],
                correta: 'A <-> B <-> C'
            },
            {
                pergunta: 'Qual é a operação para adicionar um elemento em uma lista duplamente encadeada?',
                opcoes: ['insert', 'append', 'add', 'enqueue'],
                correta: 'insert'
            },
            {
                pergunta: 'Qual é a operação para remover um elemento de uma lista duplamente encadeada?',
                opcoes: ['delete', 'remove', 'pop', 'dequeue'],
                correta: 'remove'
            }
        ],
        dificil: [
            {
                pergunta: 'O que está acontecendo na seguinte operação de pilha?',
                codigo: 'push(1)\npush(2)\npop()\npush(3)',
                opcoes: ['A pilha está vazia', 'A pilha contém: 1, 2, 3', 'A pilha contém: 1, 3', 'A pilha contém: 3, 2, 1'],
                correta: 'A pilha contém: 1, 3'
            },
            {
                pergunta: 'Qual é a operação para adicionar um elemento em uma pilha?',
                opcoes: ['push', 'enqueue', 'pop', 'dequeue'],
                correta: 'push'
            },
            {
                pergunta: 'Qual é a operação para remover um elemento de uma pilha?',
                opcoes: ['push', 'enqueue', 'pop', 'dequeue'],
                correta: 'pop'
            }
        ]
    };

    const pergunta = perguntas[nivelAtual][perguntaAtual];
    const jogoHtml = `
        <p>${pergunta.pergunta}</p>
        ${pergunta.codigo ? `<pre>${pergunta.codigo}</pre>` : ''}
        <ul>
            ${pergunta.opcoes.map((opcao, index) => `<li><input type="radio" name="${nivelAtual}" value="${opcao}"> ${opcao}</li>`).join('')}
        </ul>
        <button onclick="verificarResposta('${pergunta.correta}')">Verificar</button>
        <p id="resultado-${nivelAtual}"></p>
    `;
    document.getElementById(`jogo-${nivelAtual}`).innerHTML = jogoHtml;
}

function verificarResposta(correta) {
    const respostas = document.getElementsByName(nivelAtual);
    const resultado = document.getElementById(`resultado-${nivelAtual}`);
    for (const resposta of respostas) {
        if (resposta.checked) {
            if (resposta.value === correta) {
                resultado.textContent = 'Correto!';
                moedas += 5;
                perguntaAtual++;
                if (perguntaAtual < 3) {
                    iniciarProximaPergunta();
                } else {
                    if (nivelAtual === 'facil') {
                        document.getElementById('facil').style.display = 'none';
                        document.getElementById('medio').style.display = 'block';
                        iniciarNivel('medio');
                    } else if (nivelAtual === 'medio') {
                        document.getElementById('medio').style.display = 'none';
                        document.getElementById('dificil').style.display = 'block';
                        iniciarNivel('dificil');
                    } else if (nivelAtual === 'dificil') {
                        exibirTelaDesculpas();
                    }
                }
            } else {
                resultado.textContent = 'Incorreto. Você perdeu todas as suas moedas.';
                moedas = 0;
                atualizarMoedas();
            }
            atualizarMoedas();
            break;
        }
    }
}

function reiniciarFacil() {
    moedas = 0;
    atualizarMoedas();
    document.getElementById('facil').style.display = 'block';
    document.getElementById('medio').style.display = 'none';
    document.getElementById('dificil').style.display = 'none';
    iniciarNivel('facil');
}

function reiniciarMedio() {
    reiniciarFacil();
}

function reiniciarDificil() {
    reiniciarFacil();
}

function comprarNivel(nivel) {
    if (nivel === 'medio' && moedas >= 5) {
        moedas -= 5;
        document.getElementById('facil').style.display = 'none';
        document.getElementById('medio').style.display = 'block';
        iniciarNivel('medio');
    } else if (nivel === 'dificil' && moedas >= 10) {
        moedas -= 10;
        document.getElementById('medio').style.display = 'none';
        document.getElementById('dificil').style.display = 'block';
        iniciarNivel('dificil');
    }
    atualizarMoedas();
}
