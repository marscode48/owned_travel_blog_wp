<?php get_header(); ?>

<div class="container wrapper">
  <main class="main">
    <?php
      if (have_posts()):
        get_template_part('loop');

        if (function_exists("pagination")) {
          pagination($wp_query->max_num_pages);
        }
      endif;
    ?>
  </main>
  
  <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>