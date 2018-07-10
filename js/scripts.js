$ = jQuery.noConflict();

$(document).ready(function() {

    //Ocultar y mostrar menu

    $('.mobile-menu a').on('click', function() {
        $('nav.menu-sitio').toggle('slow');
    });

    //Reaccionar a resize
    var breakpoint = 768;

    $(window).resize(function() {
        if ($(document).width() >= breakpoint) {
            $('nav.menu-sitio').show();
        } else {
            $('nav.menu-sitio').hide();
        }
    });
});