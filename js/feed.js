jQuery(document).ready(function($){

	// User inputs
	var inputs = ['link', 'picture', 'name', 'caption', 'redirect_uri'],
		output = $('textarea');

	function setTextInputCookie(input) {
		input.blur(function(){ cSet('feed_' + input.attr('id'), input.val(), 100); });
	}
	function checkTextInputCookie(input) {
		cGet('feed_' + input.attr('id')) ? input.val(cGet('feed_' + input.attr('id'))) : '';
	}
	function textInputCookie(inputs) {
		for (var i = 0; i < inputs.length; i++) {
			input = $('#' + inputs[i]);
			setTextInputCookie(input);
			checkTextInputCookie(input);
		}
	}
	textInputCookie(inputs);

	function buildURL(link, picture, name, caption, redirect_uri) {
		url = 'https://www.facebook.com/dialog/feed?app_id=123142237735444';
		
		link ? url += '&link=' + link : '';
		picture ? url += '&picture=' + picture : '';
		name ? url += '&name=' + encodeURIComponent(name) : '';
		caption ? url += '&caption=' + encodeURIComponent(caption) : '';
		redirect_uri ? url += '&redirect_uri=' + redirect_uri : '';

		return url;
	}
	output.html(buildURL($('#link').val(), $('#picture').val(), $('#name').val(), $('#caption').val(), $('#redirect_uri').val()));
	$('#link, #picture, #name, #caption, #redirect_uri').on('keyup change', function(){
		output.html(buildURL($('#link').val(), $('#picture').val(), $('#name').val(), $('#caption').val(), $('#redirect_uri').val()));
	});

	output.focus(function(){
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