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
xhr.open("GET", "./accueil", true);
xhr.onload = function() {
    setInterval(function() {
    window.location = "./accueil"
    }, 3000)
}
xhr.send()