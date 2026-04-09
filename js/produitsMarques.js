$(document).ready(function(){
    var zindex = 10;
    
    $("div.card").click(function(e){
      var isShowing = false;
  
      if ($(this).hasClass("show")) {
        isShowing = true
      }
  
      if ($("div.cards").hasClass("showing")) {
        $("div.card.show")
          .removeClass("show");
  
        if (isShowing) {
          $("div.cards")
            .removeClass("showing");
        } else {
          $(this)
            .css({zIndex: zindex})
            .addClass("show");
  
        }
  
        zindex++;
  
      } else {
        // no cards in view
        $("div.cards")
          .addClass("showing");
        $(this)
          .css({zIndex:zindex})
          .addClass("show");
  
        zindex++;
      }
      
    });
  });