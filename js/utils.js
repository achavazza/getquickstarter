$(function(){
    hHeight = $('#header').outerHeight();
    wHeight     = $(window).height();
    jumboheight = (wHeight-(hHeight)-40);
    $('#header').scrollToFixed({
        minWidth : 768,
        //dontSetWidth : true,
        removeOffsets : true,
        spacerClass : 'fixedspacer'
    });
    $('#sidebar').scrollToFixed({
        minWidth : 768,
        marginTop: hHeight,
        offsets : false
    });
    $('#jumbotron').children('.jumbo-content').addClass('loaded');
    $('#jumbotron').height(jumboheight)
    /*$('#show-sidebar').on('click', function(){
        $('body').toggleClass('off-canvas');
        return false;
    })*/

    $('body').on('click','.toggle-debug', function(){
        $('body').toggleClass('debug');
        return false;
    });
})