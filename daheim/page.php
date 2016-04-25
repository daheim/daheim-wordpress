<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @since 1.0.0
 */
get_header();
?>

<?php
while (have_posts()) : the_post();
  ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry-content description clearfix">
      <?php the_content( __( 'Read more', 'arcade') ); ?>
    </div>
  </article>

  <?php
endwhile;
?>

<?php get_footer(); ?>