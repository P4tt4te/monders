'use strict';
window.addEventListener("load", init);
var quiz;

function init() {
    recupjson();
    console.log('test');
}

function recupjson() {
    var config = {
        method: 'GET',
        mode: 'cors',
        cache: 'default'
    };

    var dataquiz = document.querySelector('.container').dataset.quiz;
    var fichier;

    switch (dataquiz) {
        case 1:
            fichier = "tajMahal";
            break;
        case 2:
            fichier = "";
            break;
        default:
            fichier = "tajMahal";
            break;
    }

    fetch('../public/assets/quiz/' + fichier + '.json', config)
        .then(function (response) {
            return response.json();
        })
        .then(function (tab) {
            creerquiz(tab.question);

        })
        .catch(function (error) {
            console.log('Il y a eu un problème avec l\'opération fetch: ' + error.message);
        });
}

function creerquiz(tab) {
    quiz = new Quiz(tab);
    var fin = false;
    quiz.monterquestion(quiz.getnum());


}

function updatescore(nbr) {
    quiz.setscore(nbr);
}

//permet de passer à la prochaine question
function prochaine() {
    console.log('prochaine');

    if (quiz.getnum() == 9) {
        console.log('finquiz score final : ' + quiz.getscore());
        openmodal(quiz.getscore());
    } else {
        console.log('prochaine q');
        quiz.setnum(1);
        quiz.monterquestion(quiz.getnum());
        reloadanimation();

    }
}

function openmodal(score) {
    var vraiscore = score * 10 + '%';
    document.querySelector('.affichagescore').textContent = vraiscore;
    var modal = document.getElementById("myModal");
    modal.style.display = "block";

    var obj = new FormData();
    obj.append("nomQuiz",document.querySelector('.container').dataset.quiz);
    obj.append("Score",score * 10);


    var config = {
        method: 'POST',
        body: obj,
    };

    fetch('../controllers/quiz.php', config)
        .then(function (response) {
            return response.json();
        })
        .catch(function (error) {
            console.log('Il y a eu un problème avec l\'opération fetch: ' + error.message);
        });
    
}

//recharge les animations css du quiz
function reloadanimation() {
    var barre = document.querySelector('.barTimer');
    var container = document.querySelector('.container');
    container.classList.remove('text-focus-in');
    barre.classList.remove('barani');
    barre.offsetWidth;
    container.offsetWidth;
    container.classList.add('text-focus-in');
    barre.classList.add('barani');

}

class Quiz {

    constructor(tab) {
        this.tab = tab;
        this.score = 0;
        this.numero = 0;
        this.finquestion;
    }

    question(num) {
        return this.tab[num];
    }

    getnum() {
        return this.numero;
    }

    setnum(nbr) {
        this.numero = this.numero + nbr;
    }

    getscore() {
        return this.score;
    }

    setscore(nbr) {
        this.score = this.score + nbr;
    }


    monterquestion(num) {
        // monter la question
        console.log('monter question');
        var blocq = document.querySelector('.question');
        var numero = document.querySelector('.num');
        var q1 = document.querySelector('.reponse1');
        var q2 = document.querySelector('.reponse2');
        var q3 = document.querySelector('.reponse3');
        var q4 = document.querySelector('.reponse4');
        var finbouton = false;
        var fintime = false;
        this.finquestion = false;


        blocq.textContent = this.tab[num].nom;
        numero.textContent = num + 1;
        q1.textContent = this.tab[num].A;
        q2.textContent = this.tab[num].B;
        q3.textContent = this.tab[num].C;
        q4.textContent = this.tab[num].D;

        //tester la réponse
        var bouton = document.querySelectorAll('.boutonreponse');
        var reponse = this.tab[num].reponse;
        for (let i = 0; i < bouton.length; i++) {
            bouton[i].addEventListener('click', test);
        }

        function test(e) {
            console.log(this.dataset.lettre);
            if (this.dataset.lettre == reponse) {
                console.log('oui');
                updatescore(1);
            }

            for (let i = 0; i < bouton.length; i++) {
                bouton[i].removeEventListener('click', test);
            }
            finbouton = true;
        }

        //gerer le timer 

        var time = document.querySelector('.ntime');
        time.textContent = 20;
        var t = 20;
        var x = setInterval(bip, 1000);

        function bip() {
            t--;
            time.textContent = t;
            if (t == 0) {
                clearInterval(x);
                fintime = true;
                this.numero++;
            }
        }

        //tester si la question est fini temps ou bouton

        var fini = setInterval(finito, 200);

        function finito() {
            if (fintime == true) {
                for (let i = 0; i < bouton.length; i++) {
                    bouton[i].removeEventListener('click', test);
                }
                finbouton = true;
            } else if (finbouton == true) {
                clearInterval(x);
                fintime = true;
            }

            if (fintime == true && finbouton == true) {
                console.log('fini');
                clearInterval(fini);
                prochaine();
            }
        }
    }

    getfinq() {
        return this.finquestion;
    }

    questionsuivante() {
        this.monterquestion(this.numero);
    }

    checkreponse(num) {
        var bouton = document.querySelectorAll('.boutonreponse');
        var reponse = this.tab[num].reponse;
        for (let i = 0; i < bouton.length; i++) {
            bouton[i].addEventListener('click', test);
        }

        function test(e) {
            console.log(this.dataset.lettre);
            if (this.dataset.lettre == reponse) {
                console.log('oui');
                this.score++;
                this.numero++;

            } else {
                console.log('non');
                this.numero++;
            }
            for (let i = 0; i < bouton.length; i++) {
                bouton[i].removeEventListener('click', test);
            }

        }
    }




    timer() {
        var time = document.querySelector('.ntime');
        time.textContent = 10;
        var t = 10;
        var x = setInterval(bip, 1000);

        function bip() {
            t--;
            time.textContent = t;
            if (t == 0) {
                clearInterval(x);
            }
        }
    }


}