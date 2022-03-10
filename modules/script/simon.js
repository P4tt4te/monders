window.addEventListener('load', init);
const  niveau1 = ['R','R','G','Y','B'];
const niveau2 = ['R','R','R','R','R','R','R','R','R','R'];
const niveau3 = ['R','R','R','R','R','R','R','R','R','R','R','R','R','R','R'];
var manche = 1;
var bouton = document.querySelector('.startsimon');

function init() {
    bouton.addEventListener('click',game);
    console.log('init');
}

function game() {
    bouton.removeEventListener('click',game);
    var fini = false;
    /*
    while (fini == false) {
        var tab;
        if (manche == 1) {
            tab = niveau1;
        } else if (manche == 2) {
            tab = niveau2;
        } else {
            tab = niveau3;
        }

    }
    */
   var tab = niveau1;
   for (let i = 0; i < tab.length; i++) {
        console.log('couleur');
        let color = tab[i];
        let delai = 1000 * i;
        switch (color) {
            case 'R':
                console.log('red');
                eclairer('red', delai);
            break;
            case 'G':
                console.log('green');
                eclairer('green', delai);
            break;
            case 'Y':
                console.log('yellow');
                eclairer('yellow', delai);
            break;
            case 'B':
                console.log('blue');
                eclairer('blue', delai);
            break;
        }   
   }
}

function eclairer(couleur,delai) {

    let classe = '.simon'+couleur;
    var zone = document.querySelector(classe);
    var timeon;
    let timer = window.setTimeout(allumer,delai);
    function allumer() {
        console.log('allumer');
        zone.classList.add('on');
        timeon = window.setTimeout(eteindre,800);
        clearTimeout(timer);
    }

    function eteindre() {
        console.log('eteindre');
        zone.classList.remove('on');
        clearTimeout(timeon);
    }

    
    
}