<?php
function my_simple_theme_setup() {
    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('header-menu', 'my_simple_theme'),
        'footer'  => __('Footer Menu', 'my_simple_theme'),
    ));

    // Add support for widgets
    add_theme_support('widgets');
}

add_action('init', 'my_simple_theme_setup');

// Register widget areas
function my_simple_theme_widgets_init() {
    register_sidebar(array(
        'name'          => __('Footer Widget Area 1', 'my-simple-theme'),
        'id'            => 'footer-1',
        'description'   => __('Add widgets here.', 'my-simple-theme'),
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
    register_sidebar(array(
        'name'          => __('Footer Widget Area 2', 'my-simple-theme'),
        'id'            => 'footer-2',
        'description'   => __('Add widgets here.', 'my-simple-theme'),
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}

add_action('widgets_init', 'my_simple_theme_widgets_init');
