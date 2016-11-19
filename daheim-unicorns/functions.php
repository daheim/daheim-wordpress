<?php

add_action('init', 'register_menues');
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');
add_action('customize_register', 'dhm_customize_register');

add_shortcode('dhm_feature', 'dhm_feature_func');
add_shortcode('dhm_awesome_person', 'dhm_shortcode_awesome_person');
add_shortcode('dhm_sitemap', 'dhm_shortcode_sitemap');

add_action( 'wp_head', 'kb_load_open_graph' );


function register_menues () {
  register_nav_menus(
    array(
      'header-menu' => __('Header Menu'),
      'full-menu' => __('Full Menu'),
      'full-menu-secondary' => __('Full Menu Secondary'),
      'sitemap' => __('Sitemap'),
    )
  );
}

function theme_enqueue_styles () {
  wp_enqueue_style('theme_stylesheet', get_stylesheet_directory_uri() . '/style.css', false, filemtime(get_stylesheet_directory() . '/style.css'));
}

function theme_enqueue_scripts () {
  wp_enqueue_script('tweenmax', '//cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js', [], false, true);
  wp_enqueue_script('scrollmagic-gsap', '//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js', ['tweenmax', 'scrollmagic'], false, true);
  wp_enqueue_script('scrollmagic', '//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.js', ['tweenmax'], false, true);

  wp_enqueue_script('scrollmagic-indicators', '//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js', [], false, true);
  wp_enqueue_script('menu', get_stylesheet_directory_uri() . '/js/menu.js', ['jquery', 'scrollmagic', 'tweenmax', 'scrollmagic-indicators'], filemtime(get_stylesheet_directory() . '/js/menu.js'), true);
}

function dhm_customize_register($wp_customize) {
  $wp_customize->add_section('dhm_options', array(
    'title' => __('Daheim Unicorns Options', 'dhm' ),
    'priority' => 35,
    'description' => __('Allows you to customize some settings for Daheim Unicorns theme.', 'dhm'),
  ));

  $wp_customize->add_setting('punchline', array(
    'default' => 'Daheim. Hier sprechen wir mitmenschlich.',
  ));
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'dhm_punchline', array(
    'label' => __('Punchline', 'dhm'),
    'section' => 'dhm_options',
    'settings' => 'punchline',
    'priority' => 10,
  )));

  $wp_customize->add_setting('newsletter_caption', array(
    'default' => 'Daheim startet seinen kostenlosen Service im Frühjahr 2016. Bleibt auf dem Laufenden!',
  ));
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'dhm_newsletter_caption', array(
    'label' => __('Newsletter Caption', 'dhm'),
    'section' => 'dhm_options',
    'settings' => 'newsletter_caption',
    'priority' => 10,
  )));
}

function dhm_feature_func($atts, $content = null) {
  $a = shortcode_atts(array(
    'img' => 'something',
    'side' => 'right',
  ), $atts);

  return '
    <div class="feature ' . esc_attr($a['side']) . '">
      <section>
        <div><img style="width: 300px;" src="' . esc_attr($a['img']) . '" alt="" /></div>
        <div>' . do_shortcode($content) . '</div>
      </section>
    </div>
  ';
}

function dhm_shortcode_awesome_person($atts) {
  $a = shortcode_atts(array(
    'name' => 'Name',
    'title' => 'Title',
    'picture' => 'https://do512blog.files.wordpress.com/2011/09/pirate_tweet.jpg',
    'quote' => 'Daheim 4TW',
  ), $atts);

  return '
    <div class="awesome-person">
      <div class="picture">
        <div style="background-image: url(' . esc_attr($a['picture']) . ')"></div>
      </div>
      <h2 class="name">' . $a['name'] . '</h2>
      <h3 class="title">' . $a['title'] . '</h3>
      <p class="quote">' . $a['quote'] . '</p>
    </div>
  ';
}

function dhm_shortcode_sitemap($atts) {
  return wp_nav_menu(array(
    'theme_location' => 'sitemap',
    'container' => false,
    'echo' => false
  ));
}

/**
 * @src https://blog.kulturbanause.de/2015/01/open-graph-in-wordpress-verwenden/
 */
function kb_load_open_graph() {

	// Standard-Grafik für Seiten ohne Beitragsbild
	$kb_site_logo = get_stylesheet_directory_uri() . '/img/Daheim_Logo_V1_ohne_RGB.png';

	echo '<meta property="og:type"  content="website" />';
	echo '<meta property="og:url"   content="' . get_bloginfo( 'url' ) . '" />';
	echo '<meta property="og:title" content="' . esc_attr( get_bloginfo( 'name' ) ) . '" />';
	echo '<meta property="og:image" content="' . $kb_site_logo . '" />';
	echo '<meta property="og:description" content="' . esc_attr( get_bloginfo( 'description' ) ) . '" />';
}
