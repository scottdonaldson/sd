<?php get_header(); ?>

	<div class="primary">
    
		<?php the_post(); ?>

				<article <?php post_class('row'); ?>>
                                
					<h2 class="entry-title">
                    	Not found!
                    </h2>
                    
					<div class="entry-content">
						<p>Sorry, but there was a snag in finding this page. You might try:</p>
                        <ol>
                        	<li>Retyping the url or checking your link,</li>
                        	<li>Searching for it: <?php get_search_form(); ?>, or</li>
                            <li><a href="mailto:scott.p.donaldson@gmail.com">Emailing Scott about it.</a></li>
                        </ol>
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