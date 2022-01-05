'use strict';
window.addEventListener("load",init);

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
        console.log(tab.question);
    })
    .catch(function(error) {
        console.log('Il y a eu un problème avec l\'opération fetch: ' + error.message);
      })
    ;
}