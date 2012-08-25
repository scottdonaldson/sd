(function($){
  $.fn.lastFM = function(options) {
    
    var defaults = {
      number: 10,
      username: 'scottdonaldson',
      apikey: '912f8ba8e35cabba50ca62279f5ad7a0',
      artSize: 'medium',

      /* Need fallback for when there's no image */
      noart: 'images/noartwork.gif',
      onComplete: function(){}
    },
    settings = $.extend({}, defaults, options);

    var username = 'scottdonaldson',
        key = '912f8ba8e35cabba50ca62279f5ad7a0';

    var url = {
      recent: 'http://ws.audioscrobbler.com/2.0/?method=user.getRecentTracks&user='+username+'&api_key='+key+'&format=json&callback=?',
      topArtists: 'http://ws.audioscrobbler.com/2.0/?method=user.getTopArtists&user='+username+'&api_key='+key+'&format=json&callback=?',
      topAlbums: 'http://ws.audioscrobbler.com/2.0/?method=user.getTopAlbums&user='+username+'&api_key='+key+'&format=json&callback=?'
    }
    var $this = $(this);
    
    var container = $this.html();
    
    $this.children(':first').remove();
    
    if(settings.artSize == 'small'){imgSize = 0}
    if(settings.artSize == 'medium'){imgSize = 1}
    if(settings.artSize == 'large'){imgSize = 2}

    this.each(function() {
      
      $.getJSON(url.recent, function(data){ 
        $.each(data.recenttracks.track, function(i, item){

          if(item.image[1]['#text'] == ''){
            art = settings.noart;
          }else{
            art = stripslashes(item.image[imgSize]['#text']);
          }

          url = stripslashes(item.url);
          song = item.name;
          artist = item.artist['#text'];
          album = item.album['#text'];

          $this.append(container);
          
          var $current = $this.children(':eq('+i+')');
          
          $current.find('[class=lfm_song]').append(song);
          $current.find('[class=lfm_artist]').append(artist);
          $current.find('[class=lfm_album]').append(album);
          $current.find('[class=lfm_art]').append("<img src='"+art+"' alt='Artwork for "+album+"'/>");
          $current.find('a').attr('href', url).attr('title', 'Listen to '+song+' on Last.FM').attr('target', '_blank');
          
          //callback
          if(i==(settings.number-1)){
            settings.onComplete.call(this);
          }
          
        });
      });
    });
  };
  
  //Clean up the URL's
  function stripslashes( str ) {   
    return (str+'').replace(/\0/g, '0').replace(/\\([\\'"])/g, '$1');
  }
})(jQuery);