<?php 
/*
Template Name: Social URLs
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
				<p>Paste in the links you want to share. For Twitter, include the text for the tweet (including the link).</p>

				<label for="link">
					<input type="text" id="link" name="link">
				</label>

				<label for="tweet">
					<input type="text" id="tweet" name="tweet">
				</label>

				<p>Facebook link:</p>
				<textarea name="fb-link" id="fb-link">http://www.facebook.com/sharer/sharer.php?u=</textarea>
				
				<p>Facebook HTML:</p>
				<textarea name="fb-html" id="fb-html"><a href="http://www.facebook.com/sharer/sharer.php?u=">Share on Facebook</a></textarea>

				<p>Twitter link:</p>
				<textarea name="tw-link" id="tw-link">http://www.twitter.com/intent/tweet?text=</textarea>

				<p>Twitter HTML:</p>
				<textarea name="tw-html" id="tw-html"><a href="http://www.twitter.com/intent/tweet?text=">Share on Twitter</a></textarea>
				
			</div>

		</article><!-- .post -->

	</div>

<script src="<?php echo bloginfo('template_url'); ?>/js/social.js"></script>

<?php get_footer(); ?>