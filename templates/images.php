<?php 
/*
Template Name: Images Feed
*/
get_header();
the_post(); ?>

	<style>

		article img {
			display: block;
			margin: 10px auto;
			max-width: 800px;
			width: 100%;
		}

	</style>

	<article <?php post_class(); ?>>

        <div class="author visuallyhidden">By <?php the_author(); ?></div>

		<div class="entry-content">
			<?php
			$images = new WP_Query(array(
				'posts_per_page' => -1,
				'post_type' => 'image'
				)
			);
			if ( $images->have_posts() ) : while ( $images->have_posts() ) : $images->the_post(); ?>

				<a href="<?php the_field('image_link'); ?>" target="_blank">
					<img src="<?php the_field('image_link'); ?>">
				</a>
			<?php 
			endwhile;
			endif;
			wp_reset_query();
			?>
		</div>

	</article><!-- .post -->

<?php get_footer(); ?>