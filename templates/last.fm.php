<?php
/*
Template Name: Last.FM
*/
function get_lastfm() { ?>
	<script>
		jQuery(document).ready(function($){
			$.ajax({
				url: 'http://ws.audioscrobbler.com/2.0/?method=user.getRecentTracks&user=scottdonaldson&api_key=912f8ba8e35cabba50ca62279f5ad7a0&format=json&limit=50',
				type: 'GET',
		        dataType: 'json',
		        success: function(data){
		        	var tracks = $('.tracks'),
		        		recentTracks = data['recenttracks']['track'],
		        		newTrack,
		        		thisTrack;

		        	console.log(data['recenttracks']);	
			        for (i = 0; i<recentTracks.length; i++) {
			        	thisTrack = recentTracks[i];
			        	newTrack = '<p><small>'+thisTrack.date['#text']+'</small> '+thisTrack.name+' by '+thisTrack.artist['#text']+'<img src="'+thisTrack.image[0]['#text']+'" class="alignright" /></p>';
			        	tracks.append(newTrack);
		        	}
		        },
			});
			$.ajax({
				url: 'http://ws.audioscrobbler.com/2.0/?method=user.getTopArtists&user=scottdonaldson&api_key=912f8ba8e35cabba50ca62279f5ad7a0&format=json',
				type: 'GET',
		        dataType: 'json',
		        success: function(data){
		        	var artists = $('.artists'),
			        	topartists = data['topartists']['artist'];
		        	
		        	for (i = 0; i<topartists.length; i++) {
		        		artists.append(topartists[i].name);
		        	}
		        },
			});
			$.ajax({
				url: 'http://ws.audioscrobbler.com/2.0/?method=user.getTopAlbums&user=scottdonaldson&api_key=912f8ba8e35cabba50ca62279f5ad7a0&format=json',
				type: 'GET',
		        dataType: 'json',
		        success: function(data){
		        	var albums = $('.albums'),
			        	topalbums = data['topalbums']['album'];
		        	
		        	for (i = 0; i<topalbums.length; i++) {
		        		albums.append(topalbums[i].name);
		        	}
		        },
			});
		});
	</script>
<?php }
add_action('wp_footer', 'get_lastfm');

get_header(); 
the_post(); ?>

<h1 class="entry-title"><?php the_title(); ?></h1>
<h2>Recent Tracks</h2>
<div class="tracks"></div>

<h2>Top Artists</h2>
<div class="artists"></div>

<h2>Top Albums</h2>
<div class="albums"></div>



<?php get_footer(); ?>