<?php
  $wp_customize->add_section( 'gt_custom_photo' , array(
    'title'      => __( 'Post Custom Photo', 'gt' ),
    'description' => 'Upload a logo to replace the post custom photo image',
    'priority'   => 30,
));

$wp_customize->add_setting('gt_custom_photo_image',array(
    'capability' => 'edit_theme_options',
    'default' => __('we\'d love to hear from you!!!')
));

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'gt_custom_photo', array(
    'label'      => __( 'Post  Image', 'gt' ),
    'section'    => 'gt_custom_photo',
    'settings'   => 'gt_custom_photo_image',
)));


    
    
    
     

?>
<div>

</div>




