<?php get_header(); the_post(); ?>
	<div class="seven columns">

		<article <?php post_class('row'); ?>>
        
        	<div class="title-and-date">
            	<h1 class="entry-title"><?php the_title() ?></h1>
                        
                <div class="entry-date">
                	<abbr class="published" title="<?php the_time('F j, Y - g:i a'); ?>"><?php the_time('F j, Y - g:i a'); ?></abbr>
                </div>
                
                <div class="author visuallyhidden">By <?php the_author(); ?></div>
            </div>

            <div class="entry-content">
            	<?php the_content(); ?>
            </div>  
              
		</article><!-- .post -->   

	</div> <!-- .seven .columns -->             
                
    <div class="two columns hide-on-phones">
        <?php get_sidebar('recent'); ?>
    </div>
                
    <div class="three columns">
        <?php get_sidebar('projects'); ?>
    </div> 
    
    <?php } ?>       

<?php get_footer(); ?>