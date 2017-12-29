// images apparitions
$(document).ready(function() {
    // apparition d'une image
    $(".mshnb").delay( 600 ).fadeIn( 800 );
    $(".mshnb").delay( 600 ).fadeOut( 600 );

    $(".boutique").delay( 2000 ).fadeIn( 800 );
    $(".boutique").delay( 2000 ).fadeOut( 600 );
});


// redirection
const xhr = new XMLHttpRequest();
xhr.onload = function() {
    windows.setInterval(function(){
        window.location.href = "./accueil";},4500)
    }
xhr.open("get","./accueil",true)
xhr.send()