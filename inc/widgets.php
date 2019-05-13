<?php

if (!function_exists('gt_widgets_init')):
    function gt_widgets_init() {

        register_sidebar(array(
            'name'          => __( 'Sidebar', 'theme_text_domain' ),
            'id'            => 'sidebar-1',    // ID should be LOWERCASE  ! ! !
            'description'   => 'Add widgets here',
             )); 
        
      
    }
endif;

add_action('widgets_init', 'gt_widgets_init');
