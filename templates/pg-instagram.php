<?php 
/*
Template Name: Instagram Feed
*/
get_header(); the_post(); ?>

	<div class="primary">

        <article <?php post_class('row'); ?>>
                                
			<div class="clearfix">
                <h2 class="entry-title alignleft">
                	<?php the_title() ?>
                </h2>
                <div class="alignright">
                    <span class="box small"></span>
                    <span class="box medium"></span>
                    <span class="box large"></span>
                </div>
            </div>

			<div class="entry-content">
				<?php the_content(); ?>
				<div class="instagram"></div>
                <button id="instagram" class="league">More</button>
                    
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