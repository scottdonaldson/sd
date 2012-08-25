/* Adapted from potomak's Instagram jQuery plugin */

(function($){
  $.fn.instagram = function(options) {
    var that = this,
        apiEndpoint = "https://api.instagram.com/v1",
        settings = {
            hash: null
          , userId: null
          , locationId: null
          , search: null
          , accessToken: null
          , clientId: null
          , show: null
          , onLoad: null
          , onComplete: null
          , maxId: null
          , minId: null
          , next_url: null
        };
        
    options && $.extend(settings, options);
    
    function createPhotoElement(photo) {
	  var captionText = (photo.caption ? photo.caption.text : "");	
      return $('<div>')
        .addClass('instagram-placeholder wp-caption alignleft')
        .attr('id', photo.id)
        .append(
        	$('<img>')
            .addClass('instagram-image')
            .attr('src', photo.images.standard_resolution.url)
        )
		.append('<p class=wp-caption-text>'+captionText+'</p>');
    }
    
    function composeRequestURL() {

      var url = apiEndpoint,
          params = {};
      
      if (settings.next_url != null) {
        return settings.next_url;
      }

      if(settings.hash != null) {
        url += "/tags/" + settings.hash + "/media/recent";
      }
      else if(settings.search != null) {
        url += "/media/search";
        params.lat = settings.search.lat;
        params.lng = settings.search.lng;
        settings.search.max_timestamp != null && (params.max_timestamp = settings.search.max_timestamp);
        settings.search.min_timestamp != null && (params.min_timestamp = settings.search.min_timestamp);
        settings.search.distance != null && (params.distance = settings.search.distance);
      }
      else if(settings.userId != null) {
        url += "/users/" + settings.userId + "/media/recent";
      }
      else if(settings.locationId != null) {
        url += "/locations/" + settings.locationId + "/media/recent";
      }
      else {
        url += "/media/popular";
      }
      
      settings.accessToken != null && (params.access_token = settings.accessToken);
      settings.clientId != null && (params.client_id = settings.clientId);
      settings.minId != null && (params.min_id = settings.minId);
      settings.maxId != null && (params.max_id = settings.maxId);

      url += "?" + $.param(params)
      
      return url;
    }
    
    settings.onLoad != null && typeof settings.onLoad == 'function' && settings.onLoad();
    
    $.ajax({
      type: "GET",
      dataType: "jsonp",
      cache: false,
      url: composeRequestURL(),
      success: function(res) {
        var length = typeof res.data != 'undefined' ? res.data.length : 0;
        var limit = settings.show != null && settings.show < length ? settings.show : length;
        
        if(limit > 0) {
          for(var i = 0; i < limit; i++) {
            that.append(createPhotoElement(res.data[i]));
          }
        }
        else {
          that.append(createEmptyElement());
        }

        settings.onComplete != null && typeof settings.onComplete == 'function' && settings.onComplete(res.data, res);
      }
    });
    
    return this;
  };

/* ------ Different sizes ------- */
  
	var boxSmall = $('.box-small');
 	var boxMedium = $('.box-medium');
	var boxLarge = $('.box-large');
	var body = $('body');
	
	boxSmall.on('click',function(){
		body
			.removeClass('large-activated')
			.addClass('small-activated')
	});
	
	boxMedium.on('click',function(){
		body
			.removeClass('small-activated large-activated')
	});
	  
  	boxLarge.on('click',function(){
  		body
			.removeClass('small-activated')
			.addClass('large-activated')
 	});
  
})(jQuery);
