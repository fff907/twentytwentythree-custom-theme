<?php get_header(); ?>

<main class="site-main" style="padding: 2rem; max-width: 900px; margin: 0 auto;">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article class="page-content">
      <h1><?php the_title(); ?></h1>
      <div><?php the_content(); ?></div>
    </article>
  <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>