window.addEventListener('load', init);
var nbr = [6,7,8,9,10];
var nbrromains = ["VI","VII","VIII","IX","X"];
var source = document.querySelector('.romain');
var zone = document.querySelector('.inputromain');
var index = 0;
var score = 0;

function init() {
    
    zone.addEventListener('change',check);
    source.textContent = nbrromains[0];
    
}

function check(evt) {
    console.log(evt.target.value);
    if (evt.target.value == nbr[index]) {
        console.log('oui');
        score++;
        evt.target.value = null;
    } else {
        console.log('non');
        evt.target.value = null;
    }
    index++;
    if (index > 4) {
        zone.removeEventListener('change',check);
        console.log('Score : '+score);
    } else {
        source.textContent = nbrromains[index];
        document.querySelector('.indexquestion').textContent = index + 1;
    }
}