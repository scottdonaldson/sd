<!doctype html>
<html lang="en">

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">

	<title><?php wp_title(''); ?></title>

	<meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>">

    <link rel="author" href="<?= bloginfo('template_url'); ?>/humans.txt">

    <link rel="stylesheet" href="<?= bloginfo('stylesheet_url'); ?>">
    <link rel="stylesheet" href="<?= bloginfo('template_url'); ?>/assets/css/style.css">

    <meta name="google-site-verification" content="hy4R03lS3g4OIIWVorLsLTuvOCEFCoDKUeQPI1fwSwg" />

	<script src="<?= bloginfo('template_url'); ?>/assets/lib/modernizr-2.8.3.js"></script>

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div id="page">

	<header id="header" class="bg-primary">

		<div class="full-width">
			<nav>
				<ul>
					<li><a href="<?= home_url(); ?>/writing">Writing</a></li>
					<li><a href="<?= home_url(); ?>/works-in-progress">Works in Progress</a></li>
					<li>
						<script>document.write('<a href="mailto:' + 'scott.p.' + 'dona' + 'ldson@gmai' + 'l.com' + '">Email</a>');</script>
					</li>
				</ul>
			</nav>
		</div>

		<div class="abs b0 l0 w100">

			<div class="full-width">

				<?php $tag = is_home() ? 'h1' : 'h3'; ?>
		    	<<?= $tag; ?> id="header-title">
					<a class="bold caps" href="<?= home_url(); ?>" title="Scottland Donaldson" rel="home">Scottland Donaldson</a>
				</<?= $tag; ?>>

			</div>

		</div>

	</header>

	<main>
