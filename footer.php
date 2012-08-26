	</div><!-- #main -->

	<footer class="clearfix">

    	<div class="credits">
        	<p>Design + Code by <a href="http://www.parsleyandsprouts.com" target="_blank" title="Parsley &amp; Sprouts">Parsley &amp; Sprouts</a></p>
        </div>
    
    	<div class="copyright">
        	<p>&copy; 2008-<?php echo date('Y'); ?> by Scott P. Donaldson</p>
            <div class="social">
            	<a href="http://www.facebook.com/scottparkerdonaldson" target="_blank">
                	<img src="<?php echo bloginfo('template_url'); ?>/images/facebook.png" height="20" width="20" />
                </a>
                <a href="http://www.twitter.com/scottpdonaldson" target="_blank">
                	<img src="<?php echo bloginfo('template_url'); ?>/images/twitter.png" />
                </a>
                <a href="https://profiles.google.com/scott.p.donaldson" target="_blank" rel="me">
                	<img src="<?php echo bloginfo('template_url'); ?>/images/google.png" height="20" width="20" />
                </a>
                <a href="http://www.linkedin.com/profile/view?id=143429515" target="_blank">
	                <img src="<?php echo bloginfo('template_url'); ?>/images/linkedin.png" />
    			</a>
                <a href="mailto:scott.p.donaldson@gmail.com">
	                <img src="<?php echo bloginfo('template_url'); ?>/images/email.png" />
    			</a>
            </div>
        </div> 
	</footer>

</div><!-- #page .hfeed .container -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="<?php echo bloginfo('template_url'); ?>/js/plugins.js"></script>
    <script src="<?php echo bloginfo('template_url'); ?>/js/script.js"></script>  

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