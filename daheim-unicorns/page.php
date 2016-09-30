<?php get_header(); ?>

<div id="wrapper">

<?php

while (have_posts()) : the_post();
  ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry-content description clearfix">
      <?php the_content(__( 'Read more', 'arcade')); ?>
    </div>
  </article>
  <?php
endwhile;

?>

<?php get_footer(); ?>