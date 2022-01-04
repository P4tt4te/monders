'use strict';
document.addEventListener("DOMContentLoaded",initialiser);
function initialiser(e)
{

    var bouton = document.querySelector(".commencer");
    
    bouton.addEventListener("click", fermerOverlay);

    function fermerOverlay() {
        var overlay = document.querySelector(".overlay");
        overlay.classList.add("disapear");
        console.log(overlay);
    }


};