
</div>

<?php
  $footer_page = get_page_by_path('footer');
  if ($footer_page) echo apply_filters('the_content', $footer_page->post_content);
?>

<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>

<?php wp_footer(); ?>
</body>
</html>
