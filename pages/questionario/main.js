function showDiv2() {
    document.getElementById('div2').classList.remove('hidden');
}

function showmenu(){
    if(document.getElementById('menuLR').style.display != "flex"){
        document.getElementById('menuLR').style.display = "flex";
        document.getElementById('first').style.display = "flex";
    }
    else{
        document.getElementById('menuLR').style.display = "none";
        document.getElementById('second').style.display = "none";
    }
}

function chosemenu(){
        document.getElementById('first').style.display = "none";
        document.getElementById('second').style.display = "flex";
}
function showDiv1() {
    document.getElementById('div1').classList.remove('hidden');
    document.getElementById('div2').classList.add('hidden');
}

function showDiv2() {
    document.getElementById('div2').classList.remove('hidden');
    document.getElementById('div1').classList.add('hidden');
}
window.addEventListener('scroll', function() {
    const elemento = document.querySelector('.top');
    
    if (window.scrollY >= 30) {
        document.querySelector('.top').style.height = "10vh";
        document.querySelector('.mid').style.margin = "10vh 0 0 0";
        document.querySelector('.top').style.transition = "0.5s";
    }
    else if(this.window.scrollY <= 40){
        document.querySelector('.top').style.height = "15vh";
        document.querySelector('.mid').style.margin = "10vh 0 0 0";
        document.querySelector('.top').style.transition = "0.08s";
    }
    else {
        document.querySelector('.top').style.height = "20vh";
        document.querySelector('.mid').style.margin = "20vh 0 0 0";
    }
});
