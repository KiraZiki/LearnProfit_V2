window.addEventListener('scroll', function() {
    const elemento = document.querySelector('.top');
    
    if (window.scrollY <= 30) {
        document.querySelector('.top').style.height = "20vh";
        document.querySelector('.mid').style.marginTop = "20vh";
    }
    else if(this.window.scrollY <=39){
        document.querySelector('.top').style.height = "15vh";
        document.querySelector('.mid').style.margin = "10vh 0 0 0";
        document.querySelector('.top').style.transition = "0.05s";
        document.querySelector('.mid').style.transition = "0.05s";
    }
    else if(this.window.scrollY >= 40){
        document.querySelector('.top').style.height = "10vh";
        document.querySelector('.mid').style.margin = "10vh 0 0 0";
        document.querySelector('.top').style.transition = "0.25s";
        document.querySelector('.mid').style.transition = "0.25s";
    }
});
