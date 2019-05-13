<?php

if (!function_exists('good_enqueue_scripts')):
    function good_enqueue_scripts() {
 //enqueue styles
 wp_enqueue_style('good-theme', get_stylesheet_uri());
 wp_enqueue_style('good-nav-style', get_template_directory_uri() . '/assets/css/responsive-nav.css');
//enqueue scripts 
wp_enqueue_script('good-main', get_template_directory_uri() . '/assets/js/main.js');
wp_enqueue_script('good-nav-js', get_template_directory_uri() . '/assets/js/responsive-nav.js');
    }
endif;
add_action('wp_enqueue_scripts', 'good_enqueue_scripts');