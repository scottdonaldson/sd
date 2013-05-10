<?php 
/*
Template Name: URL Sourcery
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
					<p>Base URL:</p>
					<input type="text" id="base" name="base" value="http://www.example.com">
				</label>

				<label for="source">
					<select name="source" id="source">
						<option value="DNC">DNC</option>
						<option value="DWS">DWS</option>
						<option value="other">Other:</option>
					</select>
				</label>

				<label for="medium">
					<select name="medium" id="medium">
						<option value="facebook">Facebook</option>
						<option value="twitter">Twitter</option>
						<option value="email">Email</option>
						<option value="other">Other:</option>
					</select>
				</label>

				<label for="content">
					<input type="text" name="content" id="content">
				</label>

				<label for="campaign">
					<input type="text" name="campaign" id="campaign">
				</label>
				
				<textarea class="code"></textarea>
				
			</div>

		</article><!-- .post -->

	</div>

<?php get_footer(); ?>