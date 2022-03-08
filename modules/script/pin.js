(function () {
    "use strict";

    
    
    document.addEventListener("DOMContentLoaded", initialiser);

    function initialiser(evt) { 
        let pin = document.getElementsByClassName("pin");

        for (let unPin of pin) {
            unPin.addEventListener("mouseenter", MontrerImage);
            unPin.addEventListener("mouseleave", EnleverImage);
        }

    }


     function MontrerImage(evt) {
         let image = this.nextElementSibling;
         image.style.display = 'grid';
    }
    

    function EnleverImage(evt) {
         let image = this.nextElementSibling;
         image.style.display = 'none';
         
    }


}());