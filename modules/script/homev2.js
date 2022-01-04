'use strict';
$(document).ready(function () {

    var bouton = document.querySelector(".commencer");
    
    bouton.addEventListener("click", fermerOverlay);

    function fermerOverlay() {
        var overlay = document.querySelector(".overlay");
        overlay.setAttribute.display = "none";

    }


});