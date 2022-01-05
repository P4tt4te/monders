$(function () {
  $(".draggable").draggable({
    snap: ".droppable",
    snapMode: "inner",
  });


  $(".droppable").droppable({
    drop: function (event, ui) {
      console.log($(".draggable").draggable("instance"));
      // console.log($(".draggable").attr("data-name"));
      if ($(event.target).attr("data-name") == "1") {
        $(this)
          .html("Dropped!");
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