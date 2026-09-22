<?php
function cms_fit_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'primary' => 'Menu chính',
    ));
}
add_action('after_setup_theme', 'cms_fit_setup');

function cms_fit_enqueue_assets()
{
    wp_enqueue_style('bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css');
    wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.1.0/css/all.css');
    wp_enqueue_style('cms-fit-style', get_stylesheet_uri());
    wp_enqueue_script('bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'cms_fit_enqueue_assets');
