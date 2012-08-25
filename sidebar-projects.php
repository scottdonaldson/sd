<div class="sidebar hide-on-phones" id="projects-sidebar">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('projects') ) : // begin primary sidebar widgets ?>
		<h3 class="projects-title league">Other Projects</h3>	
        
        <a href="http://www.parsleyandsprouts.com" target="_blank">
        	<h4>Parsley &amp; Sprouts</h4>
        	<img src="<?php echo bloginfo('template_url'); ?>/images/Parsley-photo.jpg" alt="Parsley & Sprouts" />
        </a>
        
        <p>Minneapolis and St. Paul web and print design, code, and development.</p>        
        <a href="http://www.playgroundmisnomer.com" target="_blank">
            <h4>Playground Misnomer</h4>
            <img src="<?php echo bloginfo('template_url'); ?>/images/PM-photo.jpg" alt="Playground Misnomer" />
        </a>
        
        <p>A Midwest music blog, with album and concert reviews of national and local artists.</p>
        
        <a href="http://www.restho.me" target="_blank">
        	<h4>'Rest Home</h4>
        	<img src="<?php echo bloginfo('template_url'); ?>/images/RestHome-photo.jpg" alt="'Rest Home" />
        </a>
        
        <p>Internet comedy series &mdash; expected launch in September 2012. Stay tuned!</p>


		<?php endif; // end primary sidebar widgets  ?>
</div>