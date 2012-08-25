$(document).ready(function(){

	// FitVids
	$(".post").fitVids();
	
	// Site title hover
	var title = $('#blog-title a');
	title.mouseenter(function(){
		$(this)
			.animate({
				color:'#999'
			},150)
			.find('span').animate({
				color:'#eee'	
			},150);
	});
	title.mouseleave(function(){
		$(this)
			.animate({
				color:'#565656'
			},150)
			.find('span').animate({
				color:'#d3e2e2'
			},150);
	});	
	

	// Responsive height of art feat images
	
	var featImg = $('.featured-image'),
		featImgWidthInit = .4*featImg.width();
	featImg.height(featImgWidthInit);
	featImg.next('.art-content').css('top',-1.1*featImgWidthInit);
	
	
	var winWidthInit = $(window).width();
	if (winWidthInit<1020) {
		about.css('margin-top',0.0467*winWidthInit-26);
		aboutAbout.css('margin-top',0.0389*winWidthInit-23);
	} else {
		about.css('margin-top',22);
		aboutAbout.css('margin-top',17);
	}
		
	$(window).resize(function(){
		$this = $(this);
		var featImgWidth = .4*featImg.width();
		featImg.height(featImgWidth);
		featImg.next('.art-content').css('top',-1.1*featImgWidth);
	
		if ($this.width()<1020) {
			var winWidth = $this.width();
			about.css('margin-top',0.0467*winWidth-26);
			aboutAbout.css('margin-top',0.0389*winWidth-23);
		}
	});
	
	// Home page recent dispatches... Vertically aligning two or three line items
	
	$('.home .recent-list li a').each(function(){
		var height = $(this).height();
		if (height>32) {
			$(this).css('margin-top','-0.6em');
		}
	});
	

});