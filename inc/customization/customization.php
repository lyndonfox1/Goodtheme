<?php


function gt_customize_register($wp_customize) {
    
    require_once get_template_directory() . '/inc/customization/contact.php';
    require_once get_template_directory() . '/inc/customization/background-image.php';
    require_once get_template_directory() . '/inc/customization/custom-photo.php';
}

add_action('customize_register', 'gt_customize_register');