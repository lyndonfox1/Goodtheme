
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




require_once get_template_directory() . '/inc/custom-post-types.php';
require_once get_template_directory() . '/inc/taxonomies.php';
require_once get_template_directory() . '/inc/custom-meta-box.php';
require_once get_template_directory() . '/inc/widgets.php';


 
//hook into the init action and call create_book_taxonomies when it fires

 
//create a custom taxonomy name it topics for your posts
 
 // function good_theme_create_taxonomies() {
 
// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI
 





/* Create one or more meta boxes to be displayed on the post editor screen. */
