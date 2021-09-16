$(function(){

    $('#voile').hide();
    $('#cross').hide();

    $('#play').click(function(){
        $('video').css('opacity', '1');
        $('#box_Video').addClass('A_video');
        $('#box_Video').removeClass('cA_video');
        $('#voile').fadeIn(1000);
        $('#play').hide();
        $('#video').get(0).play();
        $('#cross').fadeIn(1000);
    });

    $('#cross').click(function(){
        $('#box_Video').addClass('cA_video');
        $('#box_Video').removeClass('A_video');
        $('#voile').fadeOut(1000);
        $('#play').fadeIn(1000);
        $('#video').css('opacity', '0.4');
        $('#video').get(0).pause();
        $('#cross').hide();
    });

    $('#video, #play').mouseenter(function(){
        $('#video').css('opacity', '1');
    });

    $('#voile').mouseenter(function(){
        $('#video').css('opacity', '1');
    });

    $('video').mouseleave(function(){
        $('#video').css('opacity', '0.4');
    });


    $(window).resize(resizePage2);
    resizePage2();
    
    function resizePage2() {
        var width = $(window).width();
        if (width < 620) {
            $('nav').hide();
            $('#croix').hide();
    
            $('#barre').click(function () {
                $('nav').slideDown();
                $('#barre').hide();
                $('#croix').show();
            });
    
            $('#croix').click(function () {
                $('nav').slideUp();
                $('#barre').show();
                $('#croix').hide();
            });
        } else {
            $('nav').show();
        }
    }
});