jQuery(document).ready(function($){

	// FitText
	$.fn.fitted= function(val) {
		$(this).fitText(val).addClass('fit');
		// 'fit' class ensures that no transitions happen in CSS
	}
	$('#blog-title h1, #blog-title h3').fitted(0.55);
	$('.about-title').fitted(0.63),
	$('.page-template-templatesabout-php .about-title').fitted(0.56);
	$('.categories-title').fitted(0.345);
    $('.images-title').fitted(0.56);
	$('.projects-title').fitted(0.56);
	$('.sidebar .web').fitted(0.135) // Web
	$('.sidebar .music').fitted(0.21) // Music
	$('.sidebar .art').fitted(0.12) // Art
	$('.sidebar .personal').fitted(0.32) // Personal
	$('.sidebar .misc').fitted(0.16); // Misc
	$('.recent-title').fitted(0.345);		

	// FitVids
	$('.post').fitVids();
	
	// Remove preload (transitions)
	$('body').removeClass('preload');

    // Set next and prev to equal height (on single posts)
    var prev = $('.single .prev'),
        next = $('.single .next'); 
    function setPrevNextHeight(){
        var prevHeight = prev.height(),
            nextHeight = next.height(); 
        if (nextHeight < prevHeight) {
            next.height(prevHeight);
        } else if (prevHeight < nextHeight) {
            prev.height(nextHeight);
        }
    }
    setPrevNextHeight();
    $(window).on('resize', setPrevNextHeight);

    // Recent dispatches (main page)
    var recent = $('.recent-list a'),
        top;
    function recentHeight() {
        recent.each(function() {
            $this = $(this);
            top = $this.height() > 22 ? 16 - 0.5 * $this.height() : 5;
            $this.css('top', top);
        });
    }
    recentHeight();
    $(window).on('resize', recentHeight);

});