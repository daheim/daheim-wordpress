<?php
/**
 * Template Name: Hollow as a Mountain
 *
 * Description: A full width empty page template
 */
?>

<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" <?php language_attributes(); ?>><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<!--[if IE]><script src="<?php echo BAVOTASAN_THEME_URL; ?>/library/js/html5.js"></script><![endif]-->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<nav class="top">
		<a class="logo" href="http://daheimapp.de"><span class="house">&#xf015;</span> Daheim</a>
		<?php wp_nav_menu(array(
			'theme_location' => 'header-menu',
			'container' => ''
		)); ?>
	</nav>

	<div class="cover">
		<div class="photo"></div>
		<div class="content">
			<h1><?php echo get_theme_mod('punchline') ?></h1>
			<div>
				<div class="signup">
					<div><?php echo get_theme_mod('newsletter_caption') ?></div>
					<form novalidate action="//daheimapp.us12.list-manage.com/subscribe/post?u=c4d83a63f2e01438e01ffb425&amp;id=8090515741" method="post" target="_blank">
						<input novalidate class="input-email" name="EMAIL" type="email" spellcheck="false" placeholder="E-Mail-Adresse"/>
						<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_c4d83a63f2e01438e01ffb425_8090515741" tabindex="-1" value=""></div>
						<button class="button" type="submit" name="subscribe">Zum Newsletter anmelden</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<div id="page">


		<main>

<?php

while (have_posts()) {
	the_post();
	the_content();
}

?>

<?php get_footer(); ?>
