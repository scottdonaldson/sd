<?php 
/*
Template Name: Social URLs
*/

function social_css() { ?>
	<link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/css/social.css">
<?php }
add_action('wp_head', 'social_css');

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
				
				<div class="clearfix">
					<h3>Facebook</h3>
					<div class="input">
						
						<label for="link">
							<p>Link:</p>
							<input type="text" id="link" name="link" value="http://www.example.com">
						</label>

						<label for="fb-share">
							<p>Share text:</p>
							<input type="text" id="fb-share" name="fb-share" value="Share on Facebook">
						</label>
					</div>

					<div class="output">
						<p>Facebook link:</p>
						<textarea name="fb-link" id="fb-link" class="code">http://www.facebook.com/sharer/sharer.php?u=</textarea>

						<p>Facebook HTML:</p>
						<textarea name="fb-html" id="fb-html" class="code"><a href="http://www.facebook.com/sharer/sharer.php?u="></a></textarea>
					</div>
				</div>

				<div class="clearfix">
					<h3>Twitter</h3>
					<div class="input">
						<label for="tweet">
							<p>Tweet:</p>
							<input type="text" id="tweet" name="tweet" value="Check out this link: http://www.example.com">
						</label>

						<label for="tw-share">
							<p>Share text:</p>
							<input type="text" id="tw-share" name="tw-share" value="Share on Twitter">
						</label>

					</div>

					<div class="output">

						<p>Twitter link:</p>
						<textarea name="tw-link" id="tw-link" class="code">http://www.twitter.com/intent/tweet?text=</textarea>

						<p>Twitter HTML:</p>
						<textarea name="tw-html" id="tw-html" class="code"><a href="http://www.twitter.com/intent/tweet?text="></a></textarea>

					</div>
				</div>
				
			</div>

		</article><!-- .post -->

	</div>

<?php get_footer(); ?>