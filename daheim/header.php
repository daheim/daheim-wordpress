<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <main>
 * and the left sidebar conditional
 *
 * @since 1.0.0
 */
?><!DOCTYPE html>
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

  <?php get_header(); ?>


  <div class="head2">
    <div style="max-width: 960px; margin: 0 auto; display: flex">

      <div style="flex: 0 0 auto; align-self: center;">
        <a class="logo" href="/"><span class="house">&#xf015;</span><span class="logotext"> Daheim</span></a>
        <span class="redenlernenleben">Reden. Lernen. Leben.</span>
      </div>
      <div style="flex: 1 1 auto;"></div>
      <div style="flex: 0 0 auto; margin: 5px; display: flex; flex-direction: column;">
        <div style="flex: 0 0 auto; text-align: right; margin-top: 4px;">
          <a href="https://app.daheimapp.de/" style="display: inline-block; padding: 6px 16px; font-size: 12px; color: darkslateblue; font-weight: 700">Anmelden</a>
          <a href="https://app.daheimapp.de/auth/register" style="display: inline-block; background: darkslateblue; padding: 6px 16px; font-size: 12px; color: white; font-weight: 700">Registrieren</a>
        </div>
        <div style="flex: 1 1 0px"></div>
        <div class="smallmenu" style="flex: 0 0 auto; font-weight: 700; font-size: 12px; margin-top: 10px;">
          <a href="/en">English</a>
          <span class="separat">|</span>
          <a href="/press">Presse</a>
          <span class="separat">|</span>
          <a href="/contact">Kontakt</a>
          <span class="separat">|</span>
          <a href="/newsletter">Newsletter</a>
        </div>

      </div>

    </div>

    <div class="jumbomenu" style="max-width: 960px; margin: 0 auto; display: flex">
      <a href="/idea">Idee</a>
      <a href="/about">Über uns</a>
      <a href="/faq">Fragen?</a>
      <a href="/jobs">Mitmachen</a>
    </div>
  </div>

  <div class="cover2" style="display: flex; align-items: center;">
    <div class="photo"></div>
    <div class="title"><?php if (is_front_page()) { ?>
      <p>Daheim ist eine Videotelefonieplattform für mobiles Lernen & kulturellen Austausch.</p>
      <p style="margin-top: 30px;">Jederzeit. Überall. Kostenlos.</p>
      <?php } else { the_title(); } ?></div>
  </div>

  <div id="page">


    <main>
