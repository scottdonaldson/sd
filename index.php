<?php get_header(); ?>

	<div class="primary">
    
		<?php 
        $i = 0;
        if ( have_posts() ) : while ( have_posts() ) : 
		the_post(); 
		$i++; 
    		if ( $i < 4 ) { ?>
                <article <?php post_class(); ?>>
                    <?php $img_size = get_field('feat_image_size');
					
					// Full-size featured images
					if ($img_size == 'Full') { ?>
                    	<div class="full">
							<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'art'); ?>
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                <img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>" />
                            </a>
							
					<?php 
                    // Half-size featured images
					} elseif ($img_size == 'Half') { ?>
                    	<div class="square">
							<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'square'); ?>
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                <img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>" />
                            </a>
                    <?php } ?>
                                
        					<div class="title-date">
                                <h2 class="entry-title">
                                	<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark">
                                        <?php the_title(); ?>
                                    </a>
                                </h2>
                    
                            	<abbr class="entry-date" title="<?php the_time('F j, Y - g:i a'); ?>">
                                    <?php the_time('F j, Y - g:i a'); ?>
                                </abbr>
                            </div><!-- .title-date -->
                    
        					<div class="entry-content">
        						<?php the_excerpt(); ?>
        					</div>                     
				
        					<div class="read-more">
                            	<?php edit_post_link('Edit / '); ?><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>">More</a>
                            </div>
                    <?php if ($img_size == 'Full' || $img_size == 'Half') { ?>        
                        </div><!-- .full or .square -->
                    <?php } ?>    
                    
				</article><!-- .post -->
                
            <?php } elseif ($i == 4) { ?>
			
            	<h3>Recent Dispatches</h3>
                
                    <ul class="recent-list">
                    	
                        <li>
                            <abbr title="<?php the_time('F j, Y - g:i a'); ?>">
                                <?php the_time('n/j'); ?>
                            </abbr>
                            <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark">
                                <?php the_title() ?>
                            </a>
                        </li>
    
			<?php } elseif ( $i == 5 || $i == 7 || $i == 8 ) { ?>

                        <li>
                            <abbr title="<?php the_time('F j, Y - g:i a'); ?>">
                                <?php the_time('n/j'); ?>
                            </abbr>
                            <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark">
                                <?php the_title() ?>
                            </a>
                        </li>
                            
			<?php } elseif ( $i == 6 ) { ?>

                        <li>
                            <abbr title="<?php the_time('F j, Y - g:i a'); ?>">
                                <?php the_time('n/j'); ?>
                            </abbr>
                            <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark">
                                <?php the_title() ?>
                            </a>
                        </li>   
                    </ul><!-- .recent-list -->
                    <ul class="recent-list">  
                                              
  			<?php } elseif ( $i == 9 ) { ?>
            
                        <li>
                        	<abbr title="<?php the_time('F j, Y - g:i a'); ?>">
                                <?php the_time('n/j'); ?>
                            </abbr>
                            <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark">
                                <?php the_title() ?>
                            </a> 
                        </li>
                    </ul><!-- .recent-list -->                    
            <?php } 
        endwhile; endif; ?>    
    </div><!-- .primary -->              
                
    <div class="secondary">
        <?php get_sidebar( 'cats' ); ?>
    </div>
                
    <div class="tertiary">
        <?php get_sidebar( 'projects' ); ?>
    </div>        


<?php get_footer(); ?>