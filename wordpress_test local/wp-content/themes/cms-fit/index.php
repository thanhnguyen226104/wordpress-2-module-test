<?php get_header(); ?>

<div class="container">
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part('content'); ?>
        <?php endwhile; ?>
    <?php else : ?>
        <p>Không có bài viết nào.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>