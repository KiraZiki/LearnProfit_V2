document.addEventListener('DOMContentLoaded', function() {
    const images = [
        {
            src: '../../img/beginner.png',
            label: 'Beginner',
            description: 'Este nível é destinado às pessoas que não têm afinidade com programação sobre Estrutura de Dados. Aqui será o lugar ideal para seu início de aprendizado.',
            url: 'begginer/' // Pasta com nome em letras minúsculas
        },
        {
            src: '../../img/median.png',
            label: 'Median',
            description: 'Este nível é destinado às pessoas que têm menos dificuldade com programação sobre Estrutura de Dados e possuem um certo conhecimento do assunto.',
            url: 'median/' // Pasta com nome em letras minúsculas
        },
        {
            src: '../../img/high.png',
            label: 'High',
            description: 'Agora, para os mais experientes em Estrutura de Dados, temos o nível mais avançado. Aqui, além de elevar seu conhecimento, será testado tudo que foi aprendido sobre o assunto.',
            url: 'high/' // Pasta com nome em letras minúsculas
        }
    ];

    let currentIndex = 0;

    const smallImages = document.querySelectorAll('.small-img');
    const mainImage = document.getElementById('main-image');
    const label = document.getElementById('label');
    const description = document.getElementById('description');
    const prevBtn = document.querySelector('.prev');
    const nextBtn = document.querySelector('.next');
    const enterBtn = document.getElementById('enter-btn');

    // Atualiza a imagem principal, o texto e o botão de entrar conforme o índice atual
    function updateCarousel(index) {
        smallImages.forEach((img, i) => {
            img.classList.toggle('selected', i === index);
        });
        mainImage.src = images[index].src;
        label.textContent = images[index].label;
        description.textContent = images[index].description;

        // Atualiza o botão "Entrar no nível" com a URL correta
        enterBtn.onclick = function() {
            window.location.href = images[index].url; // Redireciona para a pasta com nome em minúsculas
        };
    }

    // Função para navegar para a próxima imagem
    function nextImage() {
        currentIndex = (currentIndex + 1) % images.length;
        updateCarousel(currentIndex);
    }

    // Função para navegar para a imagem anterior
    function prevImage() {
        currentIndex = (currentIndex - 1 + images.length) % images.length;
        updateCarousel(currentIndex);
    }

    // Evento de clique nas imagens pequenas
    smallImages.forEach((img, index) => {
        img.addEventListener('click', () => {
            currentIndex = index;
            updateCarousel(currentIndex);
        });
    });

    // Evento de clique nos botões de navegação
    nextBtn.addEventListener('click', nextImage);
    prevBtn.addEventListener('click', prevImage);

    // Inicializa o carrossel com a primeira imagem
    updateCarousel(currentIndex);
});
