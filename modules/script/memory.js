window.addEventListener('load', init);
var compare = null;
var win = 0;

function init() {
    alea();
}

function alea() {
    var cartes = document.querySelectorAll('.flip-card');
    var tab = [1, 11, 2, 22, 3, 33];
    tab = tabrandom(tab);
    tab = graphic(tab);


    for (i in cartes) {

        cartes[i].addEventListener('click', anim);
        cartes[i].dataset.nbr = tab[i];

    }
}

function graphic(tab) {
    var zones = document.querySelectorAll('.flip-card-back>img');

    for (i in zones) {
        switch (tab[i]) {
            case 1:
                zones[i].src = '../images/memory/cleb.svg';
                zones[i].classList.add('cle');
                break;
            case 2:
                zones[i].src = '../images/memory/cler.svg';
                zones[i].classList.add('cle');
                break;
            case 3:
                zones[i].src = '../images/memory/clej.svg';
                zones[i].classList.add('cle');
                break;
            case 11:
                zones[i].src = '../images/memory/serb.svg';
                zones[i].classList.add('serrure');
                tab[i] = 1;
                break;
            case 22:
                zones[i].src = '../images/memory/serr.svg';
                zones[i].classList.add('serrure');
                tab[i] = 2;
                break;
            case 33:
                zones[i].src = '../images/memory/serj.svg';
                zones[i].classList.add('serrure');
                tab[i] = 3;
                break;
            default:
                break;
        }
    }
    return tab;
}

function anim(e) {

    this.classList.add('select');
    if (compare == null) {
        compare = this;
    } else if (this.dataset.nbr == compare.dataset.nbr) {
        console.log('c la win');
        win++;
        this.removeEventListener('click', anim);
        compare.removeEventListener('click', anim);
        compare = null;
        if (win > 2) {
            findujeu();
        }
    } else {
        let timer = window.setTimeout(fin, 1000, this, compare);
        compare = null;
    }

    function fin(a, b) {

        a.classList.remove('select');
        b.classList.remove('select');
        this.clearInterval();
    }

}

function tabrandom(tab) {

    let nbr = Math.floor(Math.random() * 5);
    let choix = tab[nbr];
    for (let i = 0; i < tab.length; i++) {
        nbr = Math.floor(Math.random() * 5);
        choix = tab[nbr];
        tab.splice(nbr, 1);

        tab.push(choix);

    }
    return tab;
}

function findujeu() {
    console.log('FIN DU JEU');
}