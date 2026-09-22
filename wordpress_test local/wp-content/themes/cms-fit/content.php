<article class="post-list-item row">
    <div class="post-list-date col-3 col-sm-2 col-md-1">
        <span class="day"><?php echo get_the_date('d'); ?></span>
        <span class="month">THÁNG <?php echo get_the_date('m'); ?></span>
    </div>
    <div class="post-list-content col-9 col-sm-10 col-md-11">
        <h2 class="post-list-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>
        <p class="post-list-excerpt">
            <?php echo wp_trim_words(get_the_excerpt(), 30, '[...]'); ?>
        </p>
    </div>
</article>