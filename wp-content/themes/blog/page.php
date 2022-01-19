<?php get_header(); ?>

<div class="container wrapper">
  <main class="main">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <article class="main__article">
        <h1 class="main__title">
          <?php the_title(); ?>
        </h1>
        <?php the_post_thumbnail(); ?>
        <div class="main__text"><?php the_content(); ?></div>
      </article>
    <?php endwhile;endif; ?>
  </main>

  <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>