<?php




function follow_selahadin_theme_support()
{
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'follow_selahadin_theme_support');

// menus 
function follow_selahadin_menus()
{
    $locations = array(
        "primary" => "Primary Menu Left Sidebar",
        "footer" => "Footer Menue Items"
    );

    register_nav_menus($locations);
}
add_action('init', 'follow_selahadin_menus');

// styles 
function my_basic_theme_enqueue_styles()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('selahadin-fontawesome', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), "4.4.1", "all");
    wp_enqueue_style('selahadin-bootstrap', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), "5.13.0", "all");
    wp_enqueue_style('selahadin-style', get_template_directory_uri() . '/style.css', array('selahadin-bootstrap'), $version, "all");
}
add_action('wp_enqueue_scripts', 'my_basic_theme_enqueue_styles');

// scripts
function my_basic_theme_enqueue_scripts()
{
    // 
    wp_enqueue_script('selahadin-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true);
    wp_enqueue_script('selahadin-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0', true);
    wp_enqueue_script('selahadin-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '4.4.1', true);
    wp_enqueue_script('selahadin-main', get_template_directory_uri() . '/assets/js/main.js', array(), '4.4.1', true);
}
add_action('wp_enqueue_scripts', 'my_basic_theme_enqueue_scripts');
