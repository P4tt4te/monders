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
        let corrector = document.querySelector('.corrector');
        corrector.textContent = "";
        console.log('oui');
        score++;
        index++;
        evt.target.value = null;
    } else {
        console.log('non');
        let corrector = document.querySelector('.corrector');
        if (evt.target.value < nbr[index]) {
            corrector.textContent = "C'est plus.";
        } else {
            corrector.textContent = "C'est moins.";
        }  
        evt.target.value = null;
    }
    if (index > 4) {
        zone.removeEventListener('change',check);
        console.log('Score : '+score);
        let dec = document.querySelector('.controllermarin');
        dec.click();
    } else {
        source.textContent = nbrromains[index];
        document.querySelector('.indexquestion').textContent = index + 1;
    }
}