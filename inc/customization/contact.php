<?php

    // ****** Contact *******
    $wp_customize->add_section('good_theme_contact', array(
        'title' => __('Contact'),
        'priority' => 1
            ));
        
            $wp_customize->add_setting('good_theme_contact_blurb',array(
                'capability' => 'edit_theme_options',
                'default' => __('we\'d love to hear from you!!!')
            ));
        
            $wp_customize->add_control('good_theme_contact_blurb_control', array(
               'type' => 'textarea' ,
               'section' => 'good_theme_contact',
               'settings' => 'good_theme_contact_blurb',
               'label' => __('Blurb')
            ));