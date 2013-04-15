<?php 
/*
Template Name: Full width (no sidebars) page
*/
get_header();
the_post(); ?>

	<div class="primary">

		<article <?php post_class(); ?>>

			<h1 class="entry-title">
            	<?php the_title(); ?>
            </h1>

            <div class="author visuallyhidden">By <?php the_author(); ?></div>

			<div class="entry-content">
				<?php the_content(); ?>
			</div>

		</article><!-- .post -->

	</div>

<?php get_footer(); ?>