$(function () {
  var data;
  $(".draggable").draggable({
    snap: ".droppable",
    snapMode: "inner",
    stop: function() {
      console.log('stopp');
    },
    start: function() {
      console.log($(this).attr('data-name'));
      data = $(this).attr('data-name');
    }
  });


  $(".droppable").droppable({
    drop: function (event, ui) {
      console.log($(event.target).children());
      // console.log($(".draggable").attr("data-name"));
      if (data == "1") {
        $(this)
          .html("Dropped!");
        $(".droppable").droppable("disable");
        $(".draggable").draggable("disable");
      }else{
        $(this)
        .html("not Dropped!");
      }

      console.log("drop");
      $(this).attr("data-drop", "yes");
    },
    out: function (event, ui) {
      $(this).attr("data-drop", "");
    }
  });
});