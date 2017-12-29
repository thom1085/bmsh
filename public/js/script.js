// parallax sur l'image d'en-tête


// flexslider en-tête
/*$(document).ready(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    animationLoop: false,
    itemWidth: 210,
    itemMargin: 5
  });
});*/




// page catalogue - action sur les images
$(document).ready(function() {
	$(".produits li").mouseenter(function() {
		$(this).css({'opacity': 1});
		// régler l'affichage des légendes au passage de la souris
		// à faire quand la liaison avec la bdd sera faite
		$(".produits figcaption").fadeIn(200);
	});
	$(".produits li").mouseleave(function() {
		$(this).css({'opacity': 0.6});
		// régler l'affichage des légendes au passage de la souris
		// à faire quand la liaison avec la bdd sera faite
		$(".produits figcaption").fadeOut(200);
	});

});



// flexslider - page d'accueil - menu Savoir-faire
$(window).load(function() {
	$('.flexslider').flexslider({
	animation: "slide",
	animationLoop: false,
	itemWidth: 210,
	itemMargin: 5,
	minItems: 2,
	maxItems: 4
	});
});




 
