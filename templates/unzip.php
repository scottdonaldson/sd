<?php 
/*
Template Name: Unzip
*/

function social_css() { ?>
	<link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/css/social.css">
<?php }
add_action('wp_head', 'social_css');

get_header(); ?>
<style>
	header {
		display: none;
	}
</style>
<?php
the_post(); 
?>

	<div class="primary">

		<article <?php post_class(); ?>>

			<div class="input">
				<textarea name="zip" id="zip"></textarea>
			</div>

			<div class="output">
				<textarea name="unzip" id="city"></textarea>
			</div>

			<div class="output">
				<textarea name="unzip" id="state"></textarea>
			</div>

			<input type="submit" value="Unzip">

		</article><!-- .post -->

	</div>

<?php get_footer(); ?>