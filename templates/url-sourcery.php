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
					<h3>Base URL:</h3>
					<input type="text" id="base" name="base" value="http://www.example.com">
				</label>

				<label for="source">
					<h3>Source</h3>
					<select name="source" id="source">
						<option value="DNC">DNC</option>
						<option value="DWS">DWS</option>
						<option value="other">Other:</option>
					</select>
				</label>
				<input type="text" name="source-other" id="source-other" style="display: none;">

				<label for="medium">
					<h3>Medium</h3>
					<select name="medium" id="medium">
						<option value="email">Email</option>
						<option value="facebook">Facebook</option>
						<option value="twitter">Twitter</option>
						<option value="blog">Blog</option>
						<option value="other">Other:</option>
					</select>
				</label>
				<input type="text" name="medium-other" id="medium-other" style="display: none;">

				<label for="content">
					<h3>Content</h3>
					<input type="text" name="content" id="content">
				</label>

				<label for="campaign">
					<h3>Campaign</h3>
					<input type="text" name="campaign" id="campaign">
				</label>

				<label for="bsd_source">
					<h3>Source (BSD only)</h3>
					<input type="text" name="bsd_source" id="bsd_source">
				</label>
				
				<h3>Result</h3>
				<textarea class="code"></textarea>
				
			</div>

		</article><!-- .post -->

	</div>

<?php get_footer(); ?>