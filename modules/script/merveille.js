document.addEventListener("DOMContentLoaded",init);
const adresse = window.location.search;
var merveille = null;

function init() {
    let params = new URLSearchParams(adresse);
    merveille = params.get('merveille');
    console.log(merveille);
    if (merveille != null) {
        chargermerveille();
    }
}

function chargermerveille() {
    var config = {
        method: 'GET',
        mode: 'cors',
        cache: 'default'
    };

    
    fetch('../json/merveille/' + merveille + '.json', config)
        .then(function (response) {
            return response.json();
        })
        .then(function (tab) {
            contenumerveille(tab);
            imagemerveille();
        })
        .catch(function (error) {
            console.log('Il y a eu un problème avec l\'opération fetch: ' + error.message);
        });
}

function contenumerveille(tab) {
    console.log(tab);
    let title = document.querySelector('.texte-merveille>h1');
    let lieu = document.querySelector('.texte-merveille>h2');
    title.textContent = tab.textemerveille.h1;
    lieu.textContent = tab.textemerveille.h2;
    let num = document.querySelector('.numero-merveille .numero');
    num.textContent = tab.numeromerveille;

    let txt1 = document.querySelector('.txt1');
    txt1.textContent = tab.textepresentation;
    let txt2 = document.querySelector('.txt2');
    txt2.textContent = tab.textedeux;
    let txt3 = document.querySelector('.txt3');
    txt3.textContent = tab.textetrois;
}

function imagemerveille() {
    let img1 = document.querySelector('.image-merveille');
    img1.src = '../images/Merveilles/'+merveille+'/'+merveille+'.png';
    let img2 = document.querySelector('.numero-merveille img');
    img2.src = '../images/Merveilles/'+merveille+'/icon-'+merveille+'.png';
    let img3 = document.querySelector('.img3');
    img3.src = '../images/Merveilles/'+merveille+'/'+merveille+'-1.png';
    let img4 = document.querySelector('.img4');
    img4.src = '../images/Merveilles/'+merveille+'/'+merveille+'-2.png';
    let img5 = document.querySelector('.img5');
    img5.src = '../images/Merveilles/'+merveille+'/'+merveille+'-3.png';

}