<?php get_header(); the_post(); ?>
	<div class="primary">
		<article <?php post_class(); ?>>
        
        	<div class="title-date">
            	<h1 class="entry-title">
                    <?php the_title() ?>
                </h1>
                <abbr class="entry-date" title="<?php the_time('F j, Y - g:i a'); ?>">
                    <?php the_time('F j, Y - g:i a'); ?>
                </abbr>
                
                <div class="author visuallyhidden">By <?php the_author(); ?></div>
            </div>
                    
            <div class="clearfix"><?php the_category(); ?></div>

            <div class="entry-content">
            	<?php the_content(); ?>
            </div>  
              
		</article><!-- .post -->
                
        <nav class="navigation clearfix">
            <div class="prev clearfix">
                <?php previous_post_link('%link','<div class="arrow">&larr;</div><div class="link">Prev: %title</div>'); ?>
            </div>
            <div class="next clearfix">
                <?php next_post_link('%link','<div class="arrow">&rarr;</div><div class="link">Next: %title</div>'); ?>
            </div>
		</nav>

	</div><!-- .primary -->             
                
    <div class="secondary">
        <?php get_sidebar('recent'); ?>
    </div>
                
    <div class="tertiary">
        <?php get_sidebar('projects'); ?>
    </div>       

<?php get_footer(); ?>