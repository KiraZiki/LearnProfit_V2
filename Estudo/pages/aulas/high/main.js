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