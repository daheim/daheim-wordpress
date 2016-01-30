<?php

add_filter('show_admin_bar', '__return_false');

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
add_shortcode('dhm_feature', 'dhm_feature_func');


function theme_enqueue_styles() {
	wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}


function dhm_feature_func($atts, $content = null) {
	$a = shortcode_atts(array(
		'img' => 'something',
		'side' => 'right',
	), $atts );

	return '
		<div class="feature ' . esc_attr($a['side']) . '">
			<section>
				<div><img style="width: 300px;" src="' . esc_attr($a['img']) . '" alt="" /></div>
				<div>' . do_shortcode($content) . '</div>
			</section>
		</div>
	';
}
