<?php get_header(); ?>

<main class="container py-4">
    <div class="row justify-content-center">
        <article class="col-12 col-lg-9">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <header class="mb-4">
                        <p class="text-muted mb-2">
                            <?php echo esc_html(get_the_date()); ?>
                        </p>
                        <h1 class="h2 mb-3"><?php the_title(); ?></h1>
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="mb-4">
                                <?php the_post_thumbnail('cms-fit-featured', array('class' => 'img-fluid rounded')); ?>
                            </div>
                        <?php endif; ?>
                    </header>

                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>

                    <?php
                    wp_link_pages(array(
                        'before' => '<nav class="mt-4" aria-label="Các trang bài viết">',
                        'after' => '</nav>',
                    ));
                    ?>
            <?php endwhile;
            endif; ?>
        </article>
    </div>
</main>

<?php get_footer(); ?>