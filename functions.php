
<?php
/*
God Theme function and definitions
*/
if( !function_exists('good_theme_setup')):

function good_theme_setup(){



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

// set the permalink
global $wp_rewrite;
$wp_rewrite->set_permalink_structure('/%postname%/');
}

endif;
add_action('after_setup_theme', 'good_theme_setup');

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



if (!function_exists('good_widgets_init')):
    function good_theme_widgets_init() {

        register_sidebar(array(
            'name'          => __( 'Sidebar', 'theme_text_domain' ),
            'id'            => 'sidebar-1',    // ID should be LOWERCASE  ! ! !
            'description'   => 'Add widgets here',
             )); 
        
      
    }
endif;
add_action('widgets_init', 'good_theme_widgets_init');