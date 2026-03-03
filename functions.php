<?php

// Theme Support
add_action('after_setup_theme', 'my_theme_support');
function my_theme_support() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
}

// Enqueue Styles and Scripts
add_action('wp_enqueue_scripts', 'my_enqueue_scripts');
function my_enqueue_scripts() {
    wp_enqueue_style('style', get_stylesheet_uri());
}

// Register Menus
add_action('init', 'my_register_menus');
function my_register_menus() {
    register_nav_menus(array(
        'header-menu' => __('Header Menu'),
        'footer-menu' => __('Footer Menu')
    ));
}

// Add Widget Areas
add_action('widgets_init', 'my_register_sidebar');
function my_register_sidebar() {
    register_sidebar(array(
        'name' => __('Main Sidebar'),
        'id' => 'main-sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}