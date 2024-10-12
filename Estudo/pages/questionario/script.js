function showDiv1() {
    document.getElementById('div1').classList.remove('hidden');
    document.getElementById('div2').classList.add('hidden');
}

function showDiv2() {
    document.getElementById('div2').classList.remove('hidden');
    document.getElementById('div1').classList.add('hidden');
}