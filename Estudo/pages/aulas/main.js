document.addEventListener('DOMContentLoaded', function() {
    const images = [
        {
            src: '../../../assets/Begginer.png',
            label: 'Beginner',
            description: 'Este nível é destinado às pessoas que não têm afinidade com programação sobre Estrutura de Dados. Aqui será o lugar ideal para seu início de aprendizado.',
            url: 'begginer/' // Pasta com nome em letras minúsculas
        },
        {
            src: '../../../assets/Median.png',
            label: 'Median',
            description: 'Este nível é destinado às pessoas que têm menos dificuldade com programação sobre Estrutura de Dados e possuem um certo conhecimento do assunto.',
            url: 'median/' // Pasta com nome em letras minúsculas
        },
        {
            src: '../../../assets/HydraIcon.png',
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

window.addEventListener('scroll', function() {
    const elemento = document.querySelector('.top');
    const logo = document.querySelector('.imglogo');
    
    if (window.scrollY <= 30) {
        document.querySelector('.top').style.height = "20vh";
        document.querySelector('.mid').style.marginTop = "20vh";
        document.querySelector('.imglogo').style.height = "8em";
    }
    else if(this.window.scrollY <=39){
        document.querySelector('.top').style.height = "15vh";
        document.querySelector('.mid').style.margin = "10vh 0 0 0";
        document.querySelector('.imglogo').style.height = "6em";
        document.querySelector('.top').style.transition = "0.07s";
        document.querySelector('.mid').style.transition = "0.07s";
        document.querySelector('.imglogo').style.transition = "0.07s";
    }
    else if(this.window.scrollY >= 40){
        document.querySelector('.top').style.height = "10vh";
        document.querySelector('.mid').style.margin = "10vh 0 0 0";
        document.querySelector('.imglogo').style.height = "4em";
        document.querySelector('.top').style.transition = "0.2s";
        document.querySelector('.mid').style.transition = "0.2s";
        document.querySelector('.imglogo').style.transition = "0.2s";
    }
});