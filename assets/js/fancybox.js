$(document).ready(function() {
    $('.fancybox').fancybox({
        width: 1020,
        type: 'iframe',
        fitToView : true,
        
        openEffect : 'elastic',
        padding: 0,
        openSpeed  : 150,

        closeEffect : 'elastic',
        closeSpeed  : 150,

        closeClick : true,        
    });

    $('.fancybox-leadership').fancybox({
        width: 980,
        type: 'iframe',
        fitToView : true,
        
        openEffect : 'fade',
        padding: 0,
        openSpeed  : 100,

        closeEffect : 'fade',
        closeSpeed  : 100,

        closeClick : true,        
    });
});