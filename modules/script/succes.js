$(function () {
  var data;
  $(".draggable").draggable({
    snap: ".droppable",
    snapMode: "inner",
    start: function() {
      console.log($(this).attr('data-name'));
      data = $(this).attr('data-name');
    }
  });


  $(".droppable").droppable({
    drop: function (event, ui) {
      console.log($(event.target).children());
      // console.log($(".draggable").attr("data-name"));
      if (data == "3") {
        $(this)
          .html("C'est bon !");
          console.log("bonne réponse, bloquage du module drag and drop")
        $(".droppable").droppable("disable");
        $(".draggable").draggable("disable");
      }else{
        $(this)
        .html("Ce n'est pas la bonne ville.");
        console.log("ville pas bonne");
      }

      $(this).attr("data-drop", "yes");
    },
    out: function (event, ui) {
      $(this).attr("data-drop", "");
    }
  });
});