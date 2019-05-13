
<?php

/*
God Theme function and definitions
*/


require_once get_template_directory() . '/inc/setup.php';
require_once get_template_directory() . '/inc/enqueue.php';
require_once get_template_directory() . '/inc/custom-post-types.php';
require_once get_template_directory() . '/inc/taxonomies.php';
require_once get_template_directory() . '/inc/custom-meta-box.php';
require_once get_template_directory() . '/inc/widgets.php';
require_once get_template_directory() . '/inc/customization/customization.php';


 
//hook into the init action and call create_book_taxonomies when it fires

 
//create a custom taxonomy name it topics for your posts
 
 // function gt_create_taxonomies() {
 
// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI
 

/* Create one or more meta boxes to be displayed on the post editor screen. */
