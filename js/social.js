jQuery(document).ready(function($){

	// User inputs
	var link = $('#link'),
		fbShare = $('#fb-share'),
		tweet = $('#tweet'),
		twShare = $('#tw-share');

	// Outputs
	var fbLink = $('#fb-link'),
		twLink = $('#tw-link'),
		fbHTML = $('#fb-html'),
		twHTML = $('#tw-html');

	// Base URLs
	var fbBase = 'http://www.facebook.com/sharer/sharer.php?u=',
		twBase = 'http://www.twitter.com/intent/tweet?text=';

	function fbURL(url) {
		fbLink.html(fbBase + url);
	}

	function facebookShare(url, text) {
		fbHTML.html('<a href="' + fbBase + url + '">' + text + '</a>');
	}

	function twURL(tweet) {
		twLink.html(twBase + encodeURIComponent(tweet));
	}

	function twitterShare(tweet, text) {
		twHTML.html('<a href="' + twBase + encodeURIComponent(tweet) + '">' + text + '</a>');
	}

	fbURL(link.val());
	facebookShare(link.val(), fbShare.val());
	twURL(tweet.val());
	twitterShare(tweet.val(), twShare.val());

	link.keyup(function(){
		$this = $(this);
		fbURL($this.val());
		facebookShare($this.val(), fbShare.val());
	});
	fbShare.keyup(function(){
		facebookShare(link.val(), $(this).val());
	});

	tweet.keyup(function(){
		$this = $(this);
		twURL($this.val());
		twitterShare($this.val(), twShare.val());
	});
	twShare.keyup(function(){
		twitterShare(tweet.val(), $(this).val());
	});

	$('textarea').focus(function(){
		$this = $(this);
    
	    $this.select();
	    
	    window.setTimeout(function() {
	        $this.select();
	    }, 1);

	    // Work around WebKit's little problem
	    $this.mouseup(function() {
	        // Prevent further mouseup intervention
	        $this.unbind('mouseup');
	        return false;
	    });
	});

});