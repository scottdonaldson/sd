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

	// Instagram
	var insta_container = $(".instagram"),
        insta_next_url;
    insta_container.instagram({
        userId: '7769924', 
        accessToken: '7769924.2d0dece.2746a5143c9a42359f616f0f9dbd91a5', 
        show: 18, 
        onComplete: function (photos, data) {
            insta_next_url = data.pagination.next_url
        }
    });
    $('#instagram').on('click', function(){
        var button = $(this), 
        text = button.text();
        if (button.text() != 'Loading…'){
            button.text('Loading…');
            insta_container.instagram({
                next_url: insta_next_url,
                show: 18, 
                onComplete: function(photos, data) {
                    insta_next_url = data.pagination.next_url;
                	button.text(text);
                },
            })
        }       
    }); 

});