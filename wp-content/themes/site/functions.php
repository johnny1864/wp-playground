<?php

// LOAD STYLE
function load_css()
{
    wp_register_style("bootstrap", get_template_directory_uri() . "/src/scss/vendor/bootstrap/css/bootstrap.min.css", array(), false, 'all');
    wp_enqueue_style('bootstrap');
    
    wp_register_style("main", get_template_directory_uri() . "/dist/main.css", array(), false, 'all');
    wp_enqueue_style('main');
}

add_action('wp_enqueue_scripts', 'load_css');

// LOAD JS
function load_js()
{
    wp_enqueue_script("jquery");
    wp_register_script("bootstrap", get_template_directory_uri() . "/src/scss/vendor/bootstrap/js/bootstrap.min.js", 'jquery', false, true);
    wp_enqueue_style('bootstrap');
}


add_action('wp_enqueue_scripts', 'load_js');

// THEME OPTIONS
add_theme_support('menus');


// MENUS

register_nav_menus(
    array(
        'top-menu' => 'Top Menu Location',
        'mobile-menu' => 'Mobile Menu Location'
    )
);
