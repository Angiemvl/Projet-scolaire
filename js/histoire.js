$(function(){
    $('#s2').hide();
    $('#t2').css('border', 'none');

    $('#t2').click(function(){
        $('#s2').fadeIn();
        $('#s1').fadeOut();
        $('#t1').css('border', 'none');
        $('#t2').css('border-bottom', ' double white 4px');

    });
    
    $('#t1').click(function(){
        $('#s1').fadeIn();
        $('#s2').fadeOut();
        $('#t2').css('border', 'none');
        $('#t1').css('border-bottom', ' double white 4px');
    });
});