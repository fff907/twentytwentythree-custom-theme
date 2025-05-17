<?php get_header(); ?>

<main class="site-main" style="padding: 2rem; max-width: 900px; margin: 0 auto;">
  <h1>最新のお知らせ</h1>

<?php if (have_posts()) : ?>
    <div class="post-list">
        <?php while (have_posts()) : the_post(); ?>
            <article class="post-item" style="margin-bottom: 2rem;">
                <?php if (has_post_thumbnail()) : ?>
                    <div class="post-thumbnail" style="margin-bottom: 1rem;">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('medium'); ?>
                        </a>
                    </div>
                <?php endif; ?>

                <h2 style="margin: 0;">
                    <a href="<?php the_permalink(); ?>" style="text-decoration: none; color: #007BFF;">
                        <?php the_title(); ?>
                    </a>
                </h2>

                <p style="font-size: 0.9rem; color: #666;"><?php the_time('Y年n月j日'); ?></p>
            </article>
        <?php endwhile; ?>
    </div>

    <div class="pagination">
        <?php the_post_pagination(); ?>
    </div>
    <?php else : ?>
        <p>投稿が見つかりませんでした。</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
