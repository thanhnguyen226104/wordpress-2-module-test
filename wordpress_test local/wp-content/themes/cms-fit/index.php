<?php get_header(); ?>

<main class="container py-4">
    <div class="row">
        <div class="col-12">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <?php get_template_part('content'); ?>
                <?php endwhile; ?>
            <?php else : ?>
                <p>Không có bài viết nào.</p>
            <?php endif; ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>