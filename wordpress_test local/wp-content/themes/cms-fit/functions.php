<?php
function cms_fit_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('cms-fit-featured', 1200, 675, true);
    register_nav_menus(array(
        'primary' => 'Menu chính',
    ));
}
add_action('after_setup_theme', 'cms_fit_setup');

function cms_fit_enqueue_assets()
{
    wp_enqueue_style(
        'bootstrap-css',
        'https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css',
        array(),
        '4.6.2'
    );
    wp_enqueue_style(
        'fontawesome',
        'https://use.fontawesome.com/releases/v5.1.0/css/all.css',
        array(),
        '5.1.0'
    );
    wp_enqueue_style('cms-fit-style', get_stylesheet_uri(), array('bootstrap-css'), '1.0');

    wp_enqueue_script('jquery');
    wp_enqueue_script(
        'bootstrap-js',
        'https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js',
        array('jquery'),
        '4.6.2',
        true
    );
}
add_action('wp_enqueue_scripts', 'cms_fit_enqueue_assets');
