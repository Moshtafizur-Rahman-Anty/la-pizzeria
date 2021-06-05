
jQuery(document).ready(function($){
    $('.mobile-menu a').on('click', function(e){
        e.preventDefault();
        e.stopPropagation()
        $('.site-nav').slideToggle(300);
    });

    var breakpoint  = 768;

    $(window).resize(function(){
        if($(document).width() >= breakpoint) {
            $('.site-nav').show();
        }
        else {
            $('.site-nav').hide();
        }
    });




jQuery('.blocks-gallery-grid a').each( function() {
    jQuery(this).attr({'data-fluidbox': ''}); 
});

if(jQuery('[data-fluidbox]').length > 0 ) {
    jQuery('[data-fluidbox]').fluidbox();
}

});
