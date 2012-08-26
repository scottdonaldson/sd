<?php get_header(); ?>

	<div class="primary">
    
    	<h2>Search results for <span class="result"><?php the_search_query(); ?></span></h2>
    
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

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
            
            	<?php endwhile; else: ?>
            	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                    
            <?php endif; ?>
            
            </div><!-- #loop -->
            
            <div id="pagination">
				<?php next_posts_link(__('LOAD MORE')); ?>
            </div>
            
	</div>                
                
    <div class="two columns hide-on-phones">
        <?php get_sidebar('cats'); ?>
    </div>
                
    <div class="three columns">
        <?php get_sidebar('projects'); ?>
    </div>        


<?php get_footer(); ?>