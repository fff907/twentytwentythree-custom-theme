<?php get_header(); ?>

<main class="site-main" style="padding: 2rem; max-width: 900px; margin: 0 auto;">
    <?php if (have_posts()) : while (have_posts()) :the_post(); ?>
        <article class="single-post">
            <h1><?php the_title(); ?></h1>
            <p style="color: #666;"><?php the_time('Y年n月j日'); ?></p>
            <?php if (has_post_thumbnail()) : ?>
                <div style="margin: 1rem 0;"><?php the_post_thumbnail('large'); ?></div>
            <?php endif?>
            <div><?php the_content(); ?></div>
        </article>
    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>