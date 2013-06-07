<?php
/*
Template Name: About
*/

get_header(); ?>

	<div class="primary">
    
		<?php the_post(); ?>

				<article <?php post_class(); ?>>
                                
					<h2 class="entry-title">
                    	Hi, I'm Scott
                    </h2>

                    <?php
                    // This is where we calculate how many days old I am
					$days = strtotime('now') - strtotime('21 September 1987');
					// convert the time difference to days
					$days = ceil($days/(60 * 60 * 24));
					// add comma
					$days = number_format($string, 0, '', ',');
					?>
                    
					<div class="entry-content">
						<img class="aligncenter size-full" title="Scott Donaldson. Photo by Nate Ryan." alt="Scott Donaldson. Photo by Nate Ryan." src="http://scottdonaldson.net/wp-content/uploads/2011/11/Scott-Donaldson.jpg">

						<p>I'm a DC-based front-end web developer and caretaker of two bunnies. With designer Lisa Otto, I'm one half of the web team <a href="http://www.parsleyandsprouts.com" target="_blank">Parsley &amp; Sprouts</a>. I'm a cowriter and performer of the Internet comedy series <a href="http://www.restho.me" target="_blank">'Rest Home</a>. You might also catch me writing for <a href="http://www.playgroundmisnomer.com/author/scott" target="_blank">Playground Misnomer</a>, a Midwest music blog. I'm <?= $days ?> days old. This site is for my other doings, thinkings, and makings. You might find them interesting also.</p>
						<p>Email me at <a href="mailto:scott.p.donaldson@gmail.com">scott.p.donaldson@gmail.com</a>.</p>
					</div>   
                    
				</article><!-- .post -->
            
	</div>                
                
    <div class="secondary">
        <?php get_sidebar('cats'); ?>
    </div>
                
    <div class="tertiary">
        <?php get_sidebar('projects'); ?>
    </div>        


<?php get_footer(); ?>