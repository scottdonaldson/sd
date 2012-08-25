<?php
/*
Template Name: About
*/

get_header(); ?>

	<div class="seven columns">
    
		<?php the_post(); ?>

				<article <?php post_class('row'); ?>>
                                
					<h2 class="entry-title">
                    	Hi, I'm Scott
                    </h2>
                    
					<div class="entry-content">
						<?php the_content(); ?>
					</div>   
                    
				</article><!-- .post -->
            
	</div>                
                
    <div class="two columns hide-on-phones">
        <?php get_sidebar('cats'); ?>
    </div>
                
    <div class="three columns">
        <?php get_sidebar('projects'); ?>
    </div>        


<?php get_footer(); ?>