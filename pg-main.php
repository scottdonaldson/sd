<?php 
/*
Template Name: Main
*/
get_header(); ?>

	<div class="seven columns">
    
		<?php query_posts('posts_per_page=9') : while ( have_posts() ) : 
		$i;
		the_post(); 
		$i++; 
		
			if ($i<4) { ?>

				<article <?php post_class('row'); ?> >
                
                	<?php $img_size = get_field('feat_image_size');
					
					// Full-size featured images
					if ($img_size == 'Full') { ?>
                    	<div class="featured-image">
							<?php the_post_thumbnail('art'); ?> 
                        </div> 
                                
                        <div class="art-content"><!-- Important: Closes in separate PHP if statement -->
							
					<?php // Half-size featured images
					} elseif ($img_size == 'Half') { ?>
                    	<div class="featured-image-square show-on-desktops">
							<?php the_post_thumbnail('square'); ?> 
                        </div>
                    <?php } ?>
                                
					<h2 class="entry-title">
                    	<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title() ?></a>
                    </h2>
                    
                    <div class="entry-date">
                    	<abbr class="published" title="<?php the_time('F j, Y - g:i a'); ?>"><?php the_time('F j, Y - g:i a'); ?></abbr>
                    </div> 
                    
                    <?php // Similar to above, but for mobile
					if ($img_size == 'Half' ) { ?>
                    	<div class="featured-image-square hide-on-desktops">
							<?php the_post_thumbnail('square'); ?> </div>
						<?php } ?>    
                    
					<div class="entry-content">
						<?php the_excerpt(); ?>
					</div> 
                    
                    <?php // Close .art-content
					if ($img_size == 'Full') { ?> 
                    	</div><!-- .art-content -->
					<?php } ?>                      
				
					<div class="read-more">
                    	<?php edit_post_link('Edit / '); ?><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>">More</a>
                    </div>
                    
				</article><!-- .post -->
                
            <?php } elseif ($i==4) { ?>
			
            	<h3>Recent Dispatches</h3>
            
            	<div class="row">
                
                    
                    <ul class="recent-list six columns">
                    	
                        	<li><abbr class="published" title="<?php the_time('F j, Y - g:i a'); ?>"><?php the_time('n/j'); ?></abbr>
                            <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title() ?></a></li>
    
			<?php } elseif ($i==5||$i==7||$i==8) { ?>

                        	<li><abbr class="published" title="<?php the_time('F j, Y - g:i a'); ?>"><?php the_time('n/j'); ?></abbr>
                            <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title() ?></a></li>
                            
			<?php } elseif ($i==6) { ?>

                        	<li><abbr class="published" title="<?php the_time('F j, Y - g:i a'); ?>"><?php the_time('n/j'); ?></abbr>
                            <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title() ?></a></li>   
                    </ul><!-- .six columns -->
                    <ul class="recent-list six columns">  
                                              
  			<?php } elseif ($i==9) { ?>
            
                        	<abbr class="published" title="<?php the_time('F j, Y - g:i a'); ?>"><?php the_time('n/j'); ?></abbr>
                            <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title() ?></a> 
                    </ul><!-- .six columns -->                    
  
            <?php } ?>				
            
            	<?php endwhile; else: ?>
            	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                    
            <?php wp_reset_query(); ?>
            

    </div>

            
	</div>                
                
    <div class="two columns hide-on-phones">
        <?php get_sidebar('cats'); ?>
    </div>
                
    <div class="three columns">
        <?php get_sidebar('projects'); ?>
    </div>        


<?php get_footer(); ?>