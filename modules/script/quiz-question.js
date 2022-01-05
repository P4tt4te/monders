'use strict';
window.addEventListener("load",init);
var quiz;

function init() {
    recupjson();
    console.log('test');
}

function recupjson() {
    var config = { method: 'GET',
               mode: 'cors',
               cache: 'default' };

    fetch('../../public/quiz/tajMahal.json', config)
    .then(function(response) {
        return response.json();
    })
    .then(function(tab) {
        creerquiz(tab.question);
        
    })
    .catch(function(error) {
        console.log('Il y a eu un problème avec l\'opération fetch: ' + error.message);
      })
    ;
}

function creerquiz(tab) {
    quiz = new Quiz(tab);
    console.log(quiz.question(1));
}

class Quiz {

    constructor(tab) {
        this.tab = tab;
    }

    question(num) {
        return this.tab[num];
    }


}