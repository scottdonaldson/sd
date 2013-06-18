jQuery(document).ready(function($){

	// User inputs
	var input = $('#zip'),
		zips,
		output_cities = $('#city'),
		output_states = $('#state'),
		cities = [],
		states = [];

	var url = 'http://zip.elevenbasetwo.com/v2/US/';

	function unzip() {
		zips = input.val().split('\n');

		for (var i = 0; i < zips.length; i++) {
			$.ajax({
				url: url + zips[i],
				success: function(data) {
					output_cities.val(output_cities.val() + data.city + '\n');
					output_states.val(output_states.val() + data.state + '\n');
				}
			});
		}
	}
	$('input[type="submit"]').on('click', unzip);

});