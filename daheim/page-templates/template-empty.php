<?php
/**
 * Template Name: Empty
 *
 * Description: A full width empty page template
 */
?>

<?php get_header(); ?>

<?php

while (have_posts()) {
	the_post();
	the_content();
}

?>

<?php get_footer(); ?>
