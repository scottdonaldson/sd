jQuery(document).ready(function($){
	
	function getStream() {
		$.ajax({
			type: 'GET',
			url: 'http://www.thecurrent.org/playlist/metadata/current',
			contentType: 'text/plain',
			xhrFields: {
				withCredentials: false
			},
			success: function(data){
				console.log(data.toString());
			}
		});
	}
	getStream();

});