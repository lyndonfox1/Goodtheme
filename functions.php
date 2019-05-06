
<?php
/*
God Theme function and definitions
*/
if( !function_exists('good_theme_setup')):

function good_theme_setup(){

 //enqueue styles
    wp_enqueue_style('good-theme', get_stylesheet_uri());
    wp_enqueue_style('good-nav-style', get_template_directory_uri() . '/assets/css/responsive-nav.css');
   //enqueue scripts 
   wp_enqueue_script('good-main', get_template_directory_uri() . '/assets/js/main.js');
   wp_enqueue_script('good-nav-js', get_template_directory_uri() . '/assets/js/responsive-nav.js');

   //add theme support image
   add_theme_support( 'post-thumbnails' ); 
   //custom logo
//    add_theme_support( 'custom-logo' );
   add_theme_support( 'custom-logo', array(
	'height'      => 250,
	'width'       => 250,
	// 'flex-height' => true,
	// 'flex-width'  => true,
    // 'header-text' => array( 'site-title', 'site-description' ),
    

) );
 //register menu
 register_nav_menus(array(
     'primary-menu' => __('Primary'),
     'footer-menu' => __('Footer'),
     'social-menu' => __('Social')
 ));
}

endif;
add_action('after_setup_theme', 'good_theme_setup');