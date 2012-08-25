jQuery(document).ready(function($){

	// FitText
	$.fn.fitted= function(val) {
		$(this).fitText(val).addClass('fit');
		// 'fit' class ensures that no transitions happen in CSS
	}
	$('#blog-title h1, #blog-title h3').fitted(0.55);
	$('.about-title').fitted(0.63),
	$('.page-template-templatesabout-php .about-title').fitted(0.56);
	$('.home .categories-title').fitted(0.345);
	$('.projects-title').fitted(0.56);
	$('.home .sidebar .web').fitted(0.135) // Web
	$('.home .sidebar .music').fitted(0.21) // Music
	$('.home .sidebar .art').fitted(0.12) // Art
	$('.home .sidebar .personal').fitted(0.32) // Personal
	$('.home .sidebar .misc').fitted(0.16); // Misc
	$('.recent-title').fitted(0.345);		

	// FitVids
	$('.post').fitVids();
	
	// Remove preload (transitions)
	$('body').removeClass('preload');

});