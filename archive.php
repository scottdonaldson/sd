<?php get_header(); ?>

	<div class="primary">
    
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

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
            
        <?php endwhile; endif; ?>
            
        <div id="pagination" class="league">
			<?php wp_pagenavi(); ?>
        </div>
            
	</div><!-- .primary -->               
                
    <div class="secondary">
        <?php get_sidebar('cats'); ?>
    </div>
                
    <div class="tertiary">
        <?php get_sidebar('projects'); ?>
    </div>        


<?php get_footer(); ?>