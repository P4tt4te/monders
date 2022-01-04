//____________________ LANDING PAGE: MENU RESPONSIVE ____________________
    
//__________APPARITION NAV__________
    $(document).on("click", ".burger", function () {
	    let nav = document.querySelector(".nav-container");
		nav.style.left = '0';
        $(this).addClass("close");
	});

   $(document).on("click", ".burger.close", function () {
       let nav = document.querySelector(".nav-container");
       nav.style.left = '-100%';
       $(this).removeClass("close");
   });	


//__________ACTIVER SON__________
   $(document).on("click", ".son", function () {
        $(".son img").attr("src","../images/sonOff.svg");
        $(this).addClass("close");
   });	

   $(document).on("click", ".son.close", function () {
        $(".son img").attr("src","../images/sonOn.svg");
        $(this).removeClass("close");
   });


//__________CHANGER LANGUE__________
$(document).on("click", ".language", function () {
    $(".language span").text("EN");
    $(this).addClass("english");
});	

$(document).on("click", ".language.english", function () {
    $(".language span").text("FR");
    $(this).removeClass("english");
});



