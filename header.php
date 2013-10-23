<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<title><?php wp_title(''); ?></title>
	<meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
	
    <link rel="author" href="<?php echo bloginfo('template_url'); ?>/humans.txt" />

    <link rel="stylesheet" href="<?php echo bloginfo('stylesheet_url'); ?>" />
    <link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/css/style.css" />
    <link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/css/media.css" />

    <script src="<?php echo bloginfo('template_url'); ?>/js/vendor/modernizr-2.6.1.min.js"></script>
    
    <meta name="google-site-verification" content="hy4R03lS3g4OIIWVorLsLTuvOCEFCoDKUeQPI1fwSwg" />
    
	<?php wp_head(); ?>    
    
</head>

<body <?php body_class('preload'); ?>>

<div id="page" class="hfeed container">
	<header class="clearfix">
		<div id="blog-title">
			<?php if (is_home() ) { ?>
            	<h1 class="league">
            <?php } else { ?>
            	<h3 class="league">
            <?php } ?>
        			<a href="<?php echo home_url(); ?>" title="Scott P. Donaldson" rel="home">scott<span class="grey">p</span>donaldson</a>
        	<?php if (is_home() ) { ?>
        		</h1>
            <?php } else { ?>
        		</h3>
            <?php } ?>
        </div><!-- #blog-title -->
        
        <div class="show-on-phones columns">
        	<?php get_sidebar('cats-mobile'); ?>
        </div>
        
        <div id="search">
        	<?php get_search_form(); ?>
            
            <h2 class="about-title league">
                <?php 
                // Show link 'What about Scott' if not on About page,
                // 'All about Scott' if on About page
                if (!is_page('about')) { ?>
                    <a href="<?php echo home_url(); ?>/about/" title="About" onclick="_gaq.push(['_trackEvent', 'Click', 'Internal Link', 'Header - About']);">
                        <span class="grey">what</span>
                        about
                        <span class="grey">scott</span>
                    </a>
                <?php } else { ?>           
                    <span class="grey">all</span>
                    about
                    <span class="grey">scott</span>
                <?php } ?>
            </h2>       
        </div>
        
        <div id="photos">
	    	<a href="<?php echo home_url(); ?>/photos" title="Instagram Feed | Scott Donaldson" onclick="_gaq.push(['_trackEvent', 'Click', 'Internal Link', 'Header - Instagram Feed']);">
            	<img src="<?php echo bloginfo('template_url'); ?>/images/instagram.jpg" />
            </a>
    	</div>
        
	</header>   
    
	<div id="main" class="clearfix">