<?php
/**
 * Template Name: Hollow as a Mountain
 *
 * Description: A full width empty page template
 */

	get_header();

?>

<?php

while (have_posts()) {
	the_post();
	the_content();
}

?>

<?php get_footer(); ?>
