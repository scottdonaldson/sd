	</div><!-- #main -->

	<footer class="row">

    	<div class="six columns credits">
        	<p>Design + Code by <a href="http://www.parsleyandsprouts.com" target="_blank" title="Parsley &amp; Sprouts">Parsley &amp; Sprouts</a></p>
        </div>
    
    	<div class="six columns copyright">
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
	<script src="<?php echo bloginfo('template_url'); ?>/js/jquery.fitvids.js"></script>
    <script src="<?php echo bloginfo('template_url'); ?>/js/jquery.animate-colors-min.js"></script>
    <script src="<?php echo bloginfo('template_url'); ?>/js/scott.js"></script>

    <?php if (is_page_template('pg-instagram.php')) { ?>
		<script src="<?php echo bloginfo('template_url'); ?>/js/jquery.instagram.js"></script>
        <script>
        
        $(function(){
            var insta_container = $(".instagram"),
                insta_next_url;
    
            insta_container.instagram({
                userId: '7769924', 
                accessToken: '7769924.2d0dece.2746a5143c9a42359f616f0f9dbd91a5', 
                show: 18, 
                onComplete: function (photos, data) {
                    insta_next_url = data.pagination.next_url
                }
            });
    
            $('button').on('click', function(){
                var button = $(this), 
                text = button.text();
    
                if (button.text() != 'Loading…'){
                    button.text('Loading…');
                    insta_container.instagram({
                        next_url: insta_next_url,
                        show: 18, 
                        onComplete: function(photos, data) {
                            insta_next_url = data.pagination.next_url
                            button.text(text)
                        },
                    })
                }       
            }) 
        });
        
        </script>

    <?php } ?>    
    <script src="<?php echo bloginfo('template_url'); ?>/js/jquery.fittext.js"></script>
    <script>
		$("#blog-title").fitText(0.55);
		var about = $('.about-title'),
			aboutAbout = $('.about-title-about');
		about.fitText(0.54);
		aboutAbout.fitText(0.48);
		$(".categories-title").fitText(0.34);
		$(".category-archive").fitText(1.485);
		$(".projects-title").fitText(0.566);
		$('.category-web100').fitText(0.135)
			.next().fitText(0.21) // Music
			.next().fitText(0.12) // Art
			.next().fitText(0.32) // Personal
			.next().fitText(0.16); // Misc
		$(".recent-title").fitText(0.34);	
	</script>

	<?php if (!is_user_logged_in() ) { ?>    
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
    
  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->    

<?php wp_footer(); ?>
</body>
</html>