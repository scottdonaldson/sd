<?php get_header(); the_post(); ?>

	<div class="primary">

		<article <?php post_class(); ?>>
                        
			<h2 class="entry-title">
            	<?php the_title(); ?>
            </h2>
            
            <div class="author visuallyhidden">By <?php the_author(); ?></div>
            
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