window.addEventListener('load',init);
var compare = null;
var win = 0;

function init() {
    alea();
}

function alea() {
    var titres = document.querySelectorAll('.flip-card .title');
    var cartes = document.querySelectorAll('.flip-card');
    var tab = [1,1,2,2,3,3];
    var newtab = tabrandom(tab);
    for (i in titres) {
        console.log(titres[i]);
        titres[i].textContent = tab[i];
    }

    for (i in cartes) {
        console.log(cartes[i]);
        cartes[i].addEventListener('click',anim);
        cartes[i].dataset.nbr = tab[i];
    }
}

function anim(e) {
    console.log(this);
    console.log(compare);
    this.classList.add('select');
    if (compare == null) {
        compare = this;
    } else if (this.dataset.nbr == compare.dataset.nbr) {
        console.log('c la win');
        win++;
        this.removeEventListener('click',anim);
        compare.removeEventListener('click',anim);
        compare = null;
        if (win > 2) {
            findujeu();
        }
    } else {
        let timer = window.setTimeout(fin, 1000, this, compare);
        compare = null;
    }

    function fin(a,b) {
        console.log('fin');
        a.classList.remove('select');
        b.classList.remove('select');
        this.clearInterval();
    }

}

function tabrandom(tab) {
    console.log(tab);
    let nbr = Math.floor(Math.random() * 5);
    let choix = tab[nbr];
    for (let i = 0; i < tab.length; i++) {
        nbr = Math.floor(Math.random() * 5);
        choix = tab[nbr];
        tab.splice(nbr,1);
        console.log(tab);
        tab.push(choix);
        console.log(tab);
    }
    return tab;
}

function findujeu() {
    console.log('FIN DU JEU');
}