jQuery(document).ready(function($){

	var body = $('body');

	// User inputs
	var input = $('#zip'),
		zips,
		output_cities = $('#city'),
		output_states = $('#state'),
		error = $('#error'),
		theError,
		expand = $('.expand');

	var url = 'http://zip.elevenbasetwo.com/v2/US/';
	
	function returnError(i) {
		output_cities.val(output_cities.val() + 'ERROR\n');
		output_states.val(output_states.val() + 'ERROR\n');

		error.html('Error on line ' + (i + 1) + '. Check the list of ZIP codes.');

		theError = i;
		expand.addClass('shown').on('click', function(){
			explode(theError);
		});
	}

	function returnSuccess(data) {
		output_cities.val(output_cities.val() + data.city + '\n');
		output_states.val(output_states.val() + data.state + '\n');
	}

	function clearOutput() {
		error.html('');
		output_cities.val('');
		output_states.val('');
	}

	function getResult(zips, i) {
		if (i < zips.length) {
			$.ajax({
				url: url + zips[i],
				error: function(){
					returnError(i);
				},
				success: function(data) {
					returnSuccess(data);
					getResult(zips, i + 1);
				}
			});
		}
	}

	function unzip() {
		clearOutput();
		zips = input.val().split('\n');

		getResult(zips, 0);
	}
	$('input[type="submit"]').on('click', unzip);

	var overlay = $('<div class="overlay"></div>'),
		checkInput = $('<div class="check-input"></div>'),
		checking,
		errorStart;
	function explode(theError) {

		overlay.appendTo(body).css({
			opacity: 1
		});

		setTimeout(function(){
			checkInput.appendTo(body).html(input.val().replace(/\n/g, '<br>'));

			checking = checkInput.html().split('<br>');
			
			for (var i = 0; i < checking.length; i++) {
				checkInput.prepend('<span class="indicator" style="top: ' + (40 + (22 * i)) + 'px;">' + (i + 1) + '.</span>');
			}

			// we can use indexOf() since we're looking for the first instance of 
			// the thing that threw the error
			errorStart = checkInput.html().indexOf(checking[theError]);
			console.log(checkInput.html().substr(errorStart, checking[theError].length));
			checkInput.html(checkInput.html().replace(checkInput.html().substr(errorStart, checking[theError].length), '<span style="background: #ff0;">' + checkInput.html().substr(errorStart, checking[theError].length) + '</span>'));

		}, 500);
	}

	function resetErrors() {
		checkInput.remove();
		overlay.css({
			opacity: 0
		});
		setTimeout(function(){
			overlay.remove();
		}, 500);

		expand.removeClass('shown');
	}

	$(window).on('keydown', function(e) {
		if (e.keyCode === 27) {
			resetErrors();
		}
	});

});