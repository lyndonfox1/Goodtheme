<?php
  $wp_customize->add_section( 'gt_hero' , array(
    'title'      => __( 'Post Box Background', 'gt' ),
    'description' => 'Upload a logo to replace the post box background image',
    'priority'   => 30,
));

$wp_customize->add_setting('gt_hero_image',array(
    'capability' => 'edit_theme_options',
    'default' => __('we\'d love to hear from you!!!')
));

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'gt_hero', array(
    'label'      => __( 'Post Box Image', 'gt' ),
    'section'    => 'gt_hero',
    'settings'   => 'gt_hero_image',
)));


    
    
    
     

?>
<div>

</div>




