jQuery(document).ready(function($){
	
	function getStream() {
		$.ajax({
			url: 'http://www.thecurrent.org/playlist/metadata/current',
			dataType: 'text/html',
			success: function(data){
				console.log(data.toString());
			}
		})
	}
	getStream();

});