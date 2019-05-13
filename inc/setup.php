<?php
function create_page($title){
    $new_page_title = $title;
    // $new_page_content = 'This is the page content';
    $new_page_template = ''; 

    $page_check = get_page_by_title($new_page_title);
    $new_page = array(
        'post_type' => 'page',
        'post_title' => $new_page_title,
       
        'post_status' => 'publish',
        'post_author' => 1,
    );
    if(!isset($page_check->ID)){
        $new_page_id = wp_insert_post($new_page);
        if(!empty($new_page_template)){
            update_post_meta($new_page_id, '_wp_page_template', $new_page_template);
        }
    }
  
}

if( !function_exists('gt_setup')):

function gt_setup(){
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

// create page
if (isset($_GET['activated']) && is_admin()){
    $pages = array(
        array('title' => 'Home') ,
        array('title' => 'About') ,
        array('title' => 'Random') ,
        array('title' => ' My News') ,
    );
    foreach($pages as $page){
        create_page($page['title']);
    }
      
    }
    
endif;
add_action('after_setup_theme', 'gt_setup');
