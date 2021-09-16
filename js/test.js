var fullscreen = 0;

$(".fullscreen").click(function(){
  if(fullscreen == 0){
    fullscreen = 1;
    $("video").appendTo('body');
    $("#vidControls").appendTo('body');
    $("video").css('position', 'absolute').css('width', '80%').css('height', '100%').css('margin', 0).css('margin-left', '10%').css('top', '0').css('left', '0').css('float', 'left').css('z-index', 600);
}

});

$(function(){
    $(".voile").hide();
    $(".fas").hide();
    $(".fullscreen").click(function(){
        $(".voile").show();
        $(".fas").show();
        $(".voile").css('z-index', 500);
        $('#myvideo').get(0).play();
    });
});