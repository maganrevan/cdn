var sort_images = function(){
    $("#accordion div").each(function(){
      console.log("test1");
      if($(this).attr("source")){
        console.log("test2");
        var children = $("#sources").find("img[source*='"+$(this).attr("source")+"']").parent();
        console.log(children);
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
