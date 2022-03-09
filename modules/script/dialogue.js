window.addEventListener('load', init);
var tabcurrent;
var taillecurrent;

var index;
var taille;

var tabstock;
var tabstockhelper;
var taillehelper;

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
    fetch('../json/dialogue/' + fichier + '.json', config)
        .then(function (response) {
            return response.json();
        })
        .then(function (tab) {
            console.log(tab.dialogue);
            inithelper();
            stock(tab.dialogue);
        })
        .catch(function (error) {
            console.log('Il y a eu un problème avec l\'opération fetch: ' + error.message);
        });
    
}

function inithelper() {
    let zonehelper = document.querySelector('.help');
    if (zonehelper != null) {
        chargerhelper();
    }
}

function chargerhelper() {
    let fichier = document.querySelector('.marin').dataset.page + 'help';
    var config = {
        method: 'GET',
        mode: 'cors',
        cache: 'default'
    };
    console.log(fichier);
    fetch('../json/dialogue/' + fichier + '.json', config)
        .then(function (response) {
            return response.json();
        })
        .then(function (tab) {
            console.log(tab.dialogue);
            stockhelp(tab.dialogue);

        })
        .catch(function (error) {
            console.log('Il y a eu un problème avec l\'opération fetch: ' + error.message);
        });
    
}

function stock(tab) {
    tabstock = tab;
    taille = tab.length;
    if (tabstock != null) {
        let zonestock = document.querySelector('.controllermarin');
        console.log('zonestock:'+zonestock);
        zonestock.addEventListener('click', function() {
            parler(tabstock,taille);
        })
    }
}

function stockhelp(tab) {
    tabstockhelper = tab;
    console.log(tabstockhelper);
    taillehelper = tab.length;
    if (tabstockhelper != null) {
        let zonehelper = document.querySelector('.help');
        console.log('zonehelper:'+zonehelper);
        zonehelper.addEventListener('click',function() {
            parler(tabstockhelper,taillehelper);
        });
    }
}

function parler(tab,taille) {
    console.log('parler');
    index = 0;
    tabcurrent = tab;
    taillecurrent = taille;
    console.log(tabcurrent[index].phrase);
    phrase(tabcurrent[index].phrase);
    let zone = document.querySelector('.marin');
    zone.style.display = 'flex';
    zone.addEventListener('click',finphrase);
}

function phrase(dialogue) {
    let zone = document.querySelector('.texte-parole').textContent = dialogue;
    
}

function position(nom) {
    let zone = document.querySelector('.perso>img').src = "../images/marin/" + nom + ".png";
}

function finphrase() {
    index++;
    if (index < taillecurrent) {
        phrase(tabcurrent[index].phrase);
        position(tabcurrent[index].position);
    } else {
        let zone = document.querySelector('.marin');
        window.setTimeout(desac,700);
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

function desac() {
    console.log('desac');
    let zone = document.querySelector('.marin');
    zone.style.display = 'none';
    let perso = document.querySelector('.perso');
    perso.classList.remove('end');
    let bulle = document.querySelector('.bulle-parole');
    bulle.classList.remove('end');
    let suite = document.querySelector('.suite');
    suite.classList.remove('end');
    clearTimeout();
}