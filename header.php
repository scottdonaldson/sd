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
	
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>" />
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/style.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/media.css" />
    <?php if (is_single() && get_field('custom_stylesheet')) { ?>
    	<link rel="stylesheet" href="<?php the_field('custom_stylesheet'); ?>" />
    <?php } ?>
    
    <meta name="google-site-verification" content="hy4R03lS3g4OIIWVorLsLTuvOCEFCoDKUeQPI1fwSwg" />
    
    <!-- IE Fix for HTML5 Tags -->
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    
	<?php wp_head(); ?>    
    
</head>

<body <?php body_class(); ?>>

<div id="page" class="hfeed container">

	<header class="row">
		
        <div class="seven columns">
			<?php if (is_home() ) { ?>
            	<h1 id="blog-title" class="league"><?php } else { ?>
            	<p id="blog-title" class="league"><?php } ?>
        			<a href="<?php echo home_url(); ?>" title="Scott P. Donaldson" rel="home">scott<span class="grey">p</span>donaldson</a>
        	<?php if (is_home() ) { ?>
        		</h1><?php } else { ?>
        		</p><?php } ?>
        </div>
        
        <div class="show-on-phones columns">
        	<?php get_sidebar('cats-mobile'); ?>
        </div>
        
        <div class="three columns offset-by-one hide-on-phones" id="search">
        	<?php get_search_form(); ?>
            
            <?php if (!is_page('about')) { ?>
                <h2 class="about-title hide-on-phones">
                    <a href="<?php echo home_url(); ?>/about" title="About"><span class="grey">what</span>
                    about
                    <span class="grey">scott</span></a>
                </h2>
            
            <?php } else { ?>    
                
                <h2 class="about-title-about">
                    <span class="grey">all</span>
                    about
                    <span class="grey">scott</span>
                </h2>
                
            <?php } ?>
                   
        </div>
        
        <div id="photos" class="one columns hide-on-phones">
	    	<a href="<?php echo home_url(); ?>/photos" title="Instagram Feed | Scott Donaldson">
            	<img src="<?php echo bloginfo('template_url'); ?>/images/instagram.jpg" />
            </a>
    	</div>
        
	</header>   
    
	<div id="main" class="row">