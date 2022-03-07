window.addEventListener('load',init);

function init() {
    alea();
}

function alea() {
    var cartes = document.querySelectorAll('.flip-card .title');
    var tab = [1,2,3,4,5,6];
    var newtab = tabrandom(tab);
    for (i in cartes) {
        console.log(cartes[i]);
        cartes[i].textContent = tab[i];
        cartes[i].addEventListener('click' , anim);
    }
}

function anim(e) {
    console.log(e.target);
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