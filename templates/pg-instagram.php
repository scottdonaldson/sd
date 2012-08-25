<?php 
/*
Template Name: Instagram Feed
*/
get_header(); ?>

	<div class="seven columns">
    
		<?php the_post(); ?>

				<article <?php post_class('row'); ?>>
                                
					<h2 class="entry-title" style="float:left;width:50%;">
                    	<?php the_title() ?>
                    </h2>
                    <div class="alignright">
                    	<span class="box-small"></span>
                        <span class="box-medium"></span>
                        <span class="box-large"></span>
                    </div>
                    
					<div class="entry-content">
						<?php the_content(); ?>
					    <div class="instagram"></div>
                        <button id="instagram" class="league">More</button>
                    
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