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

			<div class="entry-content"></div>

		</article><!-- .post -->

	</div>

<?php get_footer(); ?>