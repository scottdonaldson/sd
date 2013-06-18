<?php 
/*
Template Name: Unzip
*/

function unzip_css() { ?>
	<link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/css/unzip.css">
<?php }
add_action('wp_head', 'unzip_css');

get_header(); ?>
<?php
the_post(); 
?>

	<div class="primary">

		<article <?php post_class(); ?>>

			<h1 class="entry-title">
            	<?php the_title(); ?>
            </h1>
            <p>A utility for converting ZIP codes to cities and states (United States only). Copy a list of ZIP codes, one per line, and paste into the box on the left. After unzipping, the list of cities and states will populate in the boxes on the right.</p>

			<div class="input">
				<textarea name="zip" id="zip"></textarea>
				<div class="expand">+</div>
			</div>

			<div class="output">
				<textarea name="unzip" id="city"></textarea>
			</div>

			<div class="output">
				<textarea name="unzip" id="state"></textarea>
			</div>

			<div id="error"></div>

			<input type="submit" value="Unzip">

		</article><!-- .post -->

	</div>

<?php get_footer(); ?>