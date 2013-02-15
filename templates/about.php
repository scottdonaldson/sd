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
                    
					<div class="entry-content">
						<?php the_content(); ?>
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