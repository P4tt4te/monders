window.addEventListener('load', init);
const niveau1 = ['R', 'R', 'G', 'Y', 'B'];
const niveau2 = ['R', 'R', 'G', 'Y', 'B', 'R', 'R'];
const niveau3 = ['R', 'R', 'G', 'Y', 'B', 'R', 'R', 'G', 'Y', 'Y'];
var manche = 1;
var bouton = document.querySelector('.startsimon');
console.log(bouton);
var timerverif;

function init() {
    bouton.addEventListener('click', game);
    console.log('init');
}

function game() {
    console.log('game');
    bouton.removeEventListener('click', game);
    console.log('MANCHE N°' + manche);
    var tab = niveau1;
    switch (manche) {
        case 2:
            tab = niveau2;
            break;
        case 3:
            tab = niveau3;
            break;
        default:
            tab = niveau1;
            break;
    }

    var sommetime = 0;
    for (let i = 0; i <= tab.length; i++) {
        console.log('for');
        if (i == tab.length) {
            console.log('timer verif');
            console.log('sommetime = ' + sommetime)
            timerverif = window.setTimeout(verif, sommetime);
        } else {
            console.log('couleur');

            let color = tab[i];
            let delai = 1000 * i;
            sommetime = sommetime + 1000;
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



}

function verif() {
    clearTimeout(timerverif);
    console.log('verif');
    var zonegreen = document.querySelector('.simongreen');
    var zonered = document.querySelector('.simonred');
    var zoneyellow = document.querySelector('.simonyellow');
    var zoneblue = document.querySelector('.simonblue');
    var tabverif;
    var tabuti = [];
    var index = 0;

    if (manche == 1) {
        tabverif = niveau1;
    } else if (manche == 2) {
        tabverif = niveau2;
    } else {
        tabverif = niveau3;
    }

    zonegreen.addEventListener('click', vert);
    zonered.addEventListener('click', rouge);
    zoneyellow.addEventListener('click', jaune);
    zoneblue.addEventListener('click', bleu);

    function vert() {
        eclairer('green', 0);
        tabuti[index] = 'G';
        index++;
        tabcheck();
    }

    function rouge() {
        eclairer('red', 0);
        tabuti[index] = 'R';
        index++;
        tabcheck();
    }

    function jaune() {
        eclairer('yellow', 0);
        tabuti[index] = 'Y';
        index++;
        tabcheck();
    }

    function bleu() {
        eclairer('blue', 0);
        tabuti[index] = 'B';
        index++;
        tabcheck();
    }

    function tabcheck() {
        if (index == tabverif.length) {
            zonegreen.removeEventListener('click', vert);
            zonered.removeEventListener('click', rouge);
            zoneyellow.removeEventListener('click', jaune);
            zoneblue.removeEventListener('click', bleu);
            let equals = (a, b) => JSON.stringify(a) === JSON.stringify(b);
            if (equals(tabuti, tabverif)) {
                console.log('bravo');
                manche++;
                if (manche > 3) {
                    findujeu();
                } else {
                    let corrector = document.querySelector('.corrector');
                    corrector.textContent = "";
                    let num = document.querySelector('.indexquestion');
                    num.textContent = manche;
                    let timernewgame = window.setTimeout(newgame, 1500);
                    function newgame() {
                        clearTimeout(timernewgame);
                        game();
                    }
                }
            } else {
                let corrector = document.querySelector('.corrector');
                corrector.textContent = "Ce n'est pas la bonne réponse";
                game();
            }
        }
    }


}

function findujeu() {
    console.log('FIN DU JEU');
}

function eclairer(couleur, delai) {

    let classe = '.simon' + couleur;
    var zone = document.querySelector(classe);
    var timeon;
    let timer = window.setTimeout(allumer, delai);

    function allumer() {
        console.log('allumer');
        zone.classList.add('on');
        timeon = window.setTimeout(eteindre, 700);
        clearTimeout(timer);
    }

    function eteindre() {
        console.log('eteindre');
        zone.classList.remove('on');
        clearTimeout(timeon);
    }



}