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

    fetch('../../public/quiz/tajMahal.json', config)
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
    var next = setInterval(prochaine, 201);

    function prochaine() {
        console.log(quiz.getfinq());
        if (quiz.getfinq() == true) {
            clearInterval(next);
            if (quiz.getnum() == 10) {
                fin = true;
                console.log('finquiz');
            } else {
                console.log('prochaine q');
                quiz.monterquestion(this.numero);
                next = setInterval(t, 200);
            }
        }
    }
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
                this.score++;
                this.numero++;

            } else {
                console.log('non');
                this.numero++;
            }
            for (let i = 0; i < bouton.length; i++) {
                bouton[i].removeEventListener('click', test);
            }
            finbouton = true;
        }

        //gerer le timer 

        var time = document.querySelector('.ntime');
        time.textContent = 10;
        var t = 10;
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

        var fini = setInterval(finito, 200,this.finquestion);

        function finito(stp) {
            console.log('finito');
            console.log(stp);
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
                stp = true;
                console.log(stp);
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