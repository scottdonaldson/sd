<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<title><?php wp_title(''); ?></title>
	<meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />

    <link rel="author" href="<?= bloginfo('template_url'); ?>/humans.txt">

    <link rel="stylesheet" href="<?= bloginfo('stylesheet_url'); ?>">
    <link rel="stylesheet" href="<?= bloginfo('template_url'); ?>/css/style.css">

    <script src="<?= bloginfo('template_url'); ?>/js/lib/modernizr-2.8.3.js"></script>

    <meta name="google-site-verification" content="hy4R03lS3g4OIIWVorLsLTuvOCEFCoDKUeQPI1fwSwg" />

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div id="page">

	<header class="clearfix">

		<?php $tag = is_home() ? 'h1' : 'h3'; ?>
    	<<?= $tag; ?>>
			<a href="<?= home_url(); ?>" title="Scottland Donaldson" rel="home">Scottland Donaldson</a>
		</<?= $tag; ?>>

	</header>

	<main>
