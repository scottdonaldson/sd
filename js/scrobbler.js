jQuery(document).ready(function($){
	
	function getStream() {
		$.ajax({
			url: 'http://www.thecurrent.org/playlist/metadata/current',
			dataType: 'jsonp',
			success: function(data){
				console.log(data);
			}
		})
	}

});