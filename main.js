document.addEventListener('DOMContentLoaded', (event) => {
    const estudoButton = document.querySelector('.estudo');
    const gameButton = document.querySelector('.game');
    const container = document.querySelector('.container');

    let lastAction = '';

    estudoButton.addEventListener('mouseover', () => {
        document.body.style.transition = 'background-color 0.35s';
        document.body.style.backgroundColor = 'darkblue';
        estudoButton.style.transition = 'color 0.35s';
        estudoButton.style.color = 'white';
        lastAction = 'estudo';
    });

    gameButton.addEventListener('mouseover', () => {
        document.body.style.transition = 'background-color 0.35s';
        document.body.style.backgroundColor = 'black';
        gameButton.style.transition = 'color 0.35s, border-color 0.35s';
        gameButton.style.color = 'green';
        gameButton.style.borderColor = 'purple';
        lastAction = 'game';
    });

    container.addEventListener('mouseleave', () => {
        document.body.style.transition = 'background-color 0.35s';
        document.body.style.backgroundColor = '';
        estudoButton.style.transition = 'color 0.35s';
        estudoButton.style.color = '';
        gameButton.style.transition = 'color 0.35s, border-color 0.35s';
        gameButton.style.color = '';
        gameButton.style.borderColor = 'black';
        lastAction = '';
    });

    container.addEventListener('mouseenter', () => {
        if (lastAction === 'estudo') {
            document.body.style.transition = 'background-color 0.35s';
            document.body.style.backgroundColor = 'darkblue';
            estudoButton.style.transition = 'color 0.35s';
            estudoButton.style.color = 'white';
        } else if (lastAction === 'game') {
            document.body.style.transition = 'background-color 0.35s';
            document.body.style.backgroundColor = 'black';
            gameButton.style.transition = 'color 0.35s, border-color 0.35s';
            gameButton.style.color = 'green';
            gameButton.style.borderColor = 'purple';
        }
    });
});