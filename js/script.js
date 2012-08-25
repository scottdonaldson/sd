jQuery(document).ready(function($){

	// FitText
	$("#blog-title h1, #blog-title h3").fitText(0.55);
	var about = $('.about-title'),
		aboutAbout = $('.page-template-templatesabout-php .about-title');
	about.fitText(0.63);
	aboutAbout.fitText(0.56);
	$(".categories-title").fitText(0.34);
	$(".category-archive").fitText(1.485);
	$(".projects-title").fitText(0.566);
	$('.category-web100').fitText(0.135)
		.next().fitText(0.21) // Music
		.next().fitText(0.12) // Art
		.next().fitText(0.32) // Personal
		.next().fitText(0.16); // Misc
	$(".recent-title").fitText(0.34);		

	// FitVids
	$('.post').fitVids();
	
	// Remove preload (transitions)
	$('body').removeClass('preload');

});