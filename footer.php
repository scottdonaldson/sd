	</div><!-- #main -->

	<footer class="clearfix">

    	<div class="credits">
        	<p>Design + Code by <a href="http://www.parsleyandsprouts.com" target="_blank" title="Parsley &amp; Sprouts">Parsley &amp; Sprouts</a></p>
        </div>
    
    	<div class="copyright">
        	<p>&copy; 2008-<?php echo date('Y'); ?> by Scott P. Donaldson</p>
            <div class="social clearfix">
            	<a class="icon-facebook" href="http://www.facebook.com/scottparkerdonaldson" target="_blank" title="Facebook"></a>
                <a class="icon-twitter" href="http://www.twitter.com/scottpdonaldson" target="_blank" title="Twitter"></a>
                <a class="icon-google-plus" href="https://profiles.google.com/scott.p.donaldson" target="_blank"  title="Google Plus"rel="me"></a>
                <a class="icon-linkedin" href="http://www.linkedin.com/profile/view?id=143429515" target="_blank" title="LinkedIn"></a>
                <a class="icon-github" href="https://www.github.com/scottdonaldson" target="_blank" title="GitHub"></a>
                <a class="icon-lastfm" href="http://www.lastfm.com/user/scottdonaldson" target="_blank" title="Last.fm"></a>
                <a class="icon-mail" href="mailto:scott.p.donaldson@gmail.com" title="Email"></a>
            </div>
        </div> 
	</footer>

</div><!-- #page .hfeed .container -->

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo bloginfo('template_url'); ?>/js/vendor/jquery-1.8.0.min.js"><\/script>')</script>
	<script src="<?php echo bloginfo('template_url'); ?>/js/plugins.js"></script>
    <script src="<?php echo bloginfo('template_url'); ?>/js/script.js"></script>

    <?php if (is_page('Social URLs')) { ?>
        <script src="<?php echo bloginfo('template_url'); ?>/js/social.js"></script>
    <?php } elseif (is_page('URL Sourcery')) { ?>
        <script src="<?php echo bloginfo('template_url'); ?>/js/source.js"></script>
    <?php } elseif (is_page('Scrobbler')) { ?>
        <script src="<?php echo bloginfo('template_url'); ?>/js/scrobbler.js"></script>
    <?php } ?>

	<?php 
    // Google analytics: only track visits
    // from those who are not logged in
    if (!is_user_logged_in() ) { ?>    
        <script type="text/javascript">
    	  var _gaq = _gaq || [];
    	  _gaq.push(['_setAccount', 'UA-9215814-2']);
    	  _gaq.push(['_trackPageview']);
    	
    	  (function() {
    		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    	  })();
    	</script>
    <?php } ?>

<?php wp_footer(); ?>
</body>
</html>