$(function(){
    $.SyntaxHighlighter.init({
        /**
         * The baseUrl to load Google's Prettify from.
         * This is used to load in Google's Prettify if the load option is true and it was not found.
         */
        'prettifyBaseUrl': '/prettify',

        'baseUrl': 'prettify',
        'lineNumbers': true,
    });

    $('#debugMode').click(function(){
        $('.grid').toggleClass('debug');
        return false;
    });

    $(function () {
        setTimeout(function () {
            var $sidebar = $("#float-menu");
            var $window = $(window); 
            var offset = $sidebar.offset(); 
            var maxMarginTop = $('.content').height() - 250;
            var minMarginTop = parseInt($sidebar.css('margin-top'));
            var topPadding = 20;

            if(minMarginTop < maxMarginTop){
                $window.scroll(function() {
                    if (($window.scrollTop() > offset.top)) {
                        var newMarginTop = $window.scrollTop() - offset.top + topPadding
                        if (newMarginTop > maxMarginTop) newMarginTop = maxMarginTop
                            if (newMarginTop < minMarginTop) newMarginTop = minMarginTop
                                $sidebar.stop().css({
                                    marginTop: newMarginTop
                                })
                        } else {
                            $sidebar.stop().css({
                                marginTop: minMarginTop
                            })
                        }
                    })
                }
        }, 500)
    });

    /*

    http://net.tutsplus.com/tutorials/html-css-techniques/creating-a-floating-html-menu-using-jquery-and-css/*/
    /*var name = "#floatMenu";  
    var menuYloc = null;  
    if ($(name).length > 0 ) {
        menuYloc = parseInt($(name).css("top").substring(0,$(name).css("top").indexOf("px")))  
        var offset = menuYloc+$(document).scrollTop()+"px";  
        $(name).css({top:offset});  
        $(window).scroll(function () {  
            var offset = menuYloc+$(document).scrollTop()+"px";  
            $(name).css({top:offset});  
        });  
    }
    $(function () {
        setTimeout(function () {
            var $sidebar = $("#floatMenu")
            , $window = $(window)
            , offset = $sidebar.offset()
            , maxMarginTop = $('.content').height() - 250
            //, maxMarginTop = $('.content').height() - $sidebar.height() + 70
            , minMarginTop = parseInt($sidebar.css('margin-top'))
            , topPadding = 70
            if(minMarginTop < maxMarginTop){

            $window.scroll(function() {
                if (($window.scrollTop() > offset.top)) {
                    var newMarginTop = $window.scrollTop() - offset.top + topPadding
                    if (newMarginTop > maxMarginTop) newMarginTop = maxMarginTop
                        if (newMarginTop < minMarginTop) newMarginTop = minMarginTop
                            $sidebar.stop().css({
                                marginTop: newMarginTop
                            })
                    } else {
                        $sidebar.stop().css({
                            marginTop: minMarginTop
                        })
                    }
                })
            }
        }, 500)
    }) 
    */
})