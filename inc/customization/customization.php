<?php


function good_theme_customize_register($wp_customize) {
    
    require_once get_template_directory() . '/inc//customization/contact.php';
}

add_action('customize_register', 'good_theme_customize_register');