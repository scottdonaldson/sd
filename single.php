<?php get_header(); the_post();

$streamlined = get_field('streamlined');
if ($streamlined == 'No' || $streamlined == '') { ?>
	<div class="seven columns">
<?php } ?>
		<article <?php post_class('row'); ?>>
        
        	<div class="title-and-date">
            	<h1 class="entry-title"><?php the_title() ?></h1>
                        
                <div class="entry-date">
                	<abbr class="published" title="<?php the_time('F j, Y - g:i a'); ?>"><?php the_time('F j, Y - g:i a'); ?></abbr>
                </div>
                
                <div class="author visuallyhidden">By <?php the_author(); ?></div>
            </div>
                    
            <div class="hide-on-phones"><?php the_category(); ?></div>

            <div class="entry-content">
            	<?php the_content(); ?>
            </div>  
                    
            <div class="show-on-phones"><?php the_category(); ?></div>
              
		</article><!-- .post -->
                
        <div class="row">
                	
            <div class="six phone-two columns previous">
                <?php previous_post_link('%link','&larr; Prev: %title'); ?>
            </div>
                        
            <div class="six phone-two columns next">
                <?php next_post_link('%link','Next: %title &rarr;'); ?>
            </div>
                    
		</div>    
                
		<?php if ($streamlined == 'No' || $streamlined == '') {
		comments_template(); } ?>

	<?php 
	if ($streamlined == 'No' || $streamlined == '') { ?>  

	</div> <!-- .seven .columns -->             
                
    <div class="two columns hide-on-phones">
        <?php get_sidebar('recent'); ?>
    </div>
                
    <div class="three columns">
        <?php get_sidebar('projects'); ?>
    </div> 
    
    <?php } ?>       

<?php get_footer(); ?>