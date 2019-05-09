<?php
if (!function_exists('good_create_post_types')):
    function good_create_post_types() {

register_post_type(
    'job_services',
array(
    'labels' => array(
    'name' => __('services'),
    'singular_name' => __('services'),
),
'public' => true,
'has_achive' => true,
'menu_position' => 5,
'supports' => array('title', 'editor','thumbnail'),
  'taxonomies' => array('topics'),
  //'register_meta_box_cb' => 'good_theme_post_Class_meta_box'
   //'taxonomies' => array('category', 'post_tag')
   
)
);

    }

    endif;
        add_action('init', 'good_create_post_types');
