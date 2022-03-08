window.addEventListener('load', init);
var index;
var taille;
var tabstock;

function init() {
    charger();
}

function charger() {
    let fichier = document.querySelector('.marin').dataset.page;
    var config = {
        method: 'GET',
        mode: 'cors',
        cache: 'default'
    };
    console.log(fichier);
    fetch('../../public/dialogue/' + fichier + '.json', config)
        .then(function (response) {
            return response.json();
        })
        .then(function (tab) {
            console.log(tab.dialogue);
            parler(tab.dialogue);

        })
        .catch(function (error) {
            console.log('Il y a eu un problème avec l\'opération fetch: ' + error.message);
        });
    
}

function parler(tab) {
    tabstock = tab;
    taille = tab.length;
    index = 0;
    phrase(tabstock[index].phrase);
    let zone = document.querySelector('.marin');
    zone.addEventListener('click',finphrase);
}

function phrase(dialogue) {
    let zone = document.querySelector('.texte-parole').textContent = dialogue;
    
}

function position(nom) {
    let zone = document.querySelector('.perso>img').src = "../../public/images/marin/" + nom + ".png";
}

function finphrase() {
    index++;
    if (index < taille) {
        phrase(tabstock[index].phrase);
        position(tabstock[index].position);
    } else {
        let zone = document.querySelector('.marin');
        zone.removeEventListener('click',finphrase);
        let perso = document.querySelector('.perso');
        perso.classList.add('end');
        let bulle = document.querySelector('.bulle-parole');
        bulle.classList.add('end');
        let suite = document.querySelector('.suite');
        suite.classList.add('end');
        console.log('fin de phrase');
    }
}