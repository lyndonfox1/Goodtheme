<?php

if (!function_exists('good_theme_widgets_init')):
    function good_theme_widgets_init() {

        register_sidebar(array(
            'name'          => __( 'Sidebar', 'theme_text_domain' ),
            'id'            => 'sidebar-1',    // ID should be LOWERCASE  ! ! !
            'description'   => 'Add widgets here',
             )); 
        
      
    }
endif;

add_action('widgets_init', 'good_theme_widgets_init');
