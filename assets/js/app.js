"use strict";

/**
 * Switch theme color
 */



$('#toggle-theme').on('click', function(){

    $('body').toggleClass('dark');
    themeMonitor();
    
});

themeMonitor();

function themeMonitor() 
{
    $('#toggle-theme').find('span').text( $('body').hasClass('dark') ? "dark" : "light");
}