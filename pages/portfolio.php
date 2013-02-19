<?php 
/*
Template Name: Portfolio
*/
get_header(); the_post(); ?>

	<div class="primary">

		<article <?php post_class(); ?>>
                        
			<h1 class="entry-title">
            	Web Development Portfolio
            </h1>
            
            <div class="author visuallyhidden">By <?php the_author(); ?></div>
            
			<div class="entry-content clearfix">
				<?php
                $items = get_field('items');
                $p = 1;
                
                foreach ($items as $item) { ?>
                    <a class="item p-<?php echo $p; ?>" href="<?php echo $item['link']; ?>" target="_blank">
                        <h2><?php echo $item['name']; ?></h2>
                        <img src="<?php echo $item['image']; ?>" alt="<?php echo $item['name']; ?>">
                        <span class="visit">Visit Site</a>
                    </a>                
                <?php 
                $p++;
                } ?>
			</div>   
            
		</article><!-- .post -->
            
	</div>                

<?php get_footer(); ?>