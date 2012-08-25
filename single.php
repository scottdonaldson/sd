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
                    
            <div class="hide-on-phones"><?php the_category(); ?></div>

            <div class="entry-content">
            	<?php the_content(); ?>
            </div>  
                    
            <div class="show-on-phones"><?php the_category(); ?></div>
              
		</article><!-- .post -->
                
        <nav class="navigation clearfix">
            <?php previous_post_link('%link','&larr; Prev: %title'); ?>
            <?php next_post_link('%link','Next: %title &rarr;'); ?>             
		</nav>    
                
		<?php if ($streamlined == 'No' || $streamlined == '') {
		comments_template(); } ?>

	<?php 
	if ($streamlined == 'No' || $streamlined == '') { ?>  

	</div> <!-- .seven .columns -->             
                
    <div class="secondary">
        <?php get_sidebar('recent'); ?>
    </div>
                
    <div class="tertiary">
        <?php get_sidebar('projects'); ?>
    </div> 
    
    <?php } ?>       

<?php get_footer(); ?>