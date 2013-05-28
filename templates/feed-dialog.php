<?php 
/*
Template Name: FB Feed Dialog
*/

function source_css() { ?>
	<link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/css/source.css">
<?php }
add_action('wp_head', 'source_css');

get_header();
the_post(); 
?>

	<div class="primary">

		<article <?php post_class(); ?>>

			<h1 class="entry-title visuallyhidden">
            	<?php the_title(); ?>
            </h1>

            <div class="author visuallyhidden">By <?php the_author(); ?></div>

			<div class="entry-content">

				<label for="link">
					<h3>Link to share:</h3>
					<input type="text" id="link" name="link" value="http://www.example.com">
				</label>

				<label for="picture">
					<h3>URL of photo:</h3>
					<input type="text" id="picture" name="picture">
				</label>

				<label for="name">
					<h3>Headline text:</h3>
					<input type="text" id="name" name="name">
				</label>

				<label for="caption">
					<h3>Description:</h3>
					<input type="text" id="caption" name="caption">
				</label>

				<label for="redirect_uri">
					<h3>Link to redirect to after sharing:</h3>
					<input type="text" id="redirect_uri" name="redirect_uri">
				</label>
				
				<h3>Result</h3>
				<textarea class="code">https://www.facebook.com/dialog/feed?app_id=123142237735444</textarea>
				
			</div>

		</article><!-- .post -->

	</div>

<?php get_footer(); ?>