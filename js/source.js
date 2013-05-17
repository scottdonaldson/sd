jQuery(document).ready(function($){

	// User inputs
	var base = $('#base'),
		source = $('#source'),
		sourceOther = $('#source-other'),
		getSource = source,
		medium = $('#medium'),
		mediumOther = $('#medium-other'),
		getMedium = medium,
		content = $('#content'),
		campaign = $('#campaign'),
		select,
		output = $('textarea');

	source.change(function(){
		$this = $(this);
		if ($this.find('option:selected').val() == 'other') {
			getSource = sourceOther;
			sourceOther.show();
		} else {
			getSource = source;
			sourceOther.hide();
		}
	}).blur(function(){
		$this = $(this);
		cSet('url_sourcery_source', $(this).val(), 100);
	});
	if (cGet('url_sourcery_source') != 'other') {
		source.find('option[value="' + cGet('url_sourcery_source') + '"]').attr('selected', 'selected');
	} else {
		source.find('option:last').attr('selected', 'selected');
		sourceOther.val(cGet('url_sourcery_source_other')).show();
		getSource = sourceOther;
	}
	sourceOther.blur(function(){
		cSet('url_sourcery_source_other', $(this).val(), 100);
	});

	medium.change(function(){
		$this = $(this);
		if ($this.find('option:selected').val() == 'other') {
			getMedium = $('#medium-other');
			mediumOther.show();
		} else {
			getMedium = medium;
			mediumOther.hide();
		}
	}).blur(function(){
		cSet('url_sourcery_medium', $(this).val(), 100);
	});
	if (cGet('url_sourcery_medium') != 'other') {
		medium.find('option[value="' + cGet('url_sourcery_medium') + '"]').attr('selected', 'selected');
	} else {
		medium.find('option:last').attr('selected', 'selected');
		mediumOther.val(cGet('url_sourcery_medium_other')).show();
		getMedium = mediumOther;
	}
	mediumOther.blur(function(){
		cSet('url_sourcery_medium_other', $(this).val(), 100);
	});

	function setTextInputCookie(input) {
		input.blur(function(){ cSet('url_sourcery_' + input.attr('id'), input.val(), 100); });
	}
	function checkTextInputCookie(input) {
		cGet('url_sourcery_' + input.attr('id')) ? input.val(cGet('url_sourcery_' + input.attr('id'))) : '';
	}
	function textInputCookie(inputs) {
		for (var i = 0; i < inputs.length; i++) {
			input = $('#' + inputs[i]);
			setTextInputCookie(input);
			checkTextInputCookie(input);
		}
	}
	textInputCookie(['base', 'content', 'campaign']);

	function buildURL(base, source, medium, content, campaign) {
		url = base + '?utm_source=' + encodeURIComponent(source) + '&utm_medium=' + encodeURIComponent(medium);
		content ? url += '&utm_content=' + encodeURIComponent(content) : '';
		campaign ? url += '&utm_campaign=' + encodeURIComponent(campaign) : '';

		return url;
	}
	output.html(buildURL(base.val(), getSource.val(), getMedium.val(), content.val(), campaign.val()));
	$('#base, #source, #source-other, #medium, #medium-other, #content, #campaign').on('keyup change', function(){
		output.html(buildURL($('#base').val(), getSource.val(), getMedium.val(), $('#content').val(), $('#campaign').val()));
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