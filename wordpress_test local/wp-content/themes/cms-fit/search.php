<?php get_header(); ?>

<div class="container">
    <div class="search-results-header">
        <h1 class="search-results-title">Results for "<?php echo get_search_query(); ?>"</h1>
    </div>

    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part('content'); ?>
        <?php endwhile; ?>
    <?php else : ?>
        <div class="search-no-results">
            <p>Sorry, but nothing matched your search terms. Please try again with some different keywords.</p>
            <?php get_search_form(); ?>
        </div>
    <?php endif; ?>
</div>

<?php get_footer(); ?>