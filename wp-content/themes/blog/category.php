<?php get_header(); ?>

<div class="container wrapper">
  <main class="main">
    <?php
      $cat = get_the_category();
      $catname = $cat[0]->cat_name;
    ?>
    <h1 class="main__page-title"><?php echo $catname; ?>一覧</h1>

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