<?php get_header(); ?>

<main class="container py-4">
    <div class="row">
        <div class="col-12">
            <div class="search-results-header rounded">
                <h1 class="search-results-title h2">Results for "<?php echo esc_html(get_search_query()); ?>"</h1>
            </div>

            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <?php get_template_part('content'); ?>
                <?php endwhile; ?>
            <?php else : ?>
                <div class="search-no-results">
                    <p>Sorry, but nothing matched your search terms. Please try again with some different keywords.</p>
                    <?php get_search_form(); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>