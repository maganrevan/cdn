var sort_images = function(){
    $("#accordion div").each(function(){
      if($(this).attr("source")){
        var children = $("#sources").find("img[source*='"+$(this).attr("source")+"']").parent();
        if(children.length > 0){
          $(this).append(children);
        }
        $(this).css("height","auto");
      }
    });
}

var init_main = function(){
  $( "#accordion" ).accordion({
    collapsible: true,
    animate: 200,
    active: false
  });

  sort_images();
}

$(document).ready(function(){
  init_main();
});
