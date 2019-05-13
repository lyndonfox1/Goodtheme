<?php

    // ****** Contact *******
    $wp_customize->add_section('gt_contact', array(
        'title' => __('Contact'),
        'priority' => 1
            ));
        
            $wp_customize->add_setting('gt_contact_blurb',array(
                'capability' => 'edit_theme_options',
                'default' => __('we\'d love to hear from you!!!')
            ));
        
            $wp_customize->add_control('gt_contact_blurb_control', array(
               'type' => 'textarea' ,
               'section' => 'gt_contact',
               'settings' => 'gt_contact_blurb',
               'label' => __('Blurb')
            ));