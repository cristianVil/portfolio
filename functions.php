<?php
function portfolio_theme_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => 'Primary Menu'
    ));
}
add_action('after_setup_theme', 'portfolio_theme_setup');

// Enqueue scripts and styles
function portfolio_scripts() {
    wp_enqueue_style('portfolio-style', get_stylesheet_uri());
    wp_enqueue_script('portfolio-script', get_template_directory_uri() . '/app.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'portfolio_scripts');
?>
