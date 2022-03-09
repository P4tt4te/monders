document.addEventListener(
    "scroll",
    function() {
      var scrollTop = document.documentElement["scrollTop"] || document.body["scrollTop"];
      var scrollBottom = (document.documentElement["scrollHeight"] || document.body["scrollHeight"]) - document.documentElement.clientHeight;
      scrollPercent = scrollTop / scrollBottom * 100 + "%";
      var text = document.getElementById('percent').innerText;
      text = parseInt(text);
      scroll = Math.round(parseInt(scrollPercent));
  
//   if (scroll >= text){
      document
        .getElementById("_progress")
        .style.setProperty("--scroll", scrollPercent);
      
        document
        .getElementById("percent")
        .textContent = scroll + " %";
//   }
  
    },
    { passive: true }
  );
  
      