<?php

// theme funtion 
function p_customizer_register($wp_customize) {
    // Header Section
    $wp_customize->add_section('Polash_header_area', array(
        'title'       => __('Header Area', 'thunder'),
        'description' => 'Customize your header area',
    ));

    // Logo Upload Setting
    $wp_customize->add_setting('Polash_logo', array(
        'default'   => get_bloginfo('template_directory') . '/img/logo.png',
        'transport' => 'postMessage',  
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'Polash_logo', array(
        'label'       => __('Logo Upload', 'thunder'),
        'description' => 'Upload your logo here.',
        'section'     => 'Polash_header_area',
        'settings'    => 'Polash_logo',
    )));


    // Custom CSS Setting
    $wp_customize->add_section('Polash_custom_css_section', array(
        'title'       => __('Custom CSS', 'thunder'),
        'description' => 'Add your own custom CSS here',
        'priority'    => 160,
    ));

    $wp_customize->add_setting('Polash_custom_css', array(
        'default'   => '',
        'transport' => 'postMessage',  
        'sanitize_callback' => 'wp_strip_all_tags',  
    ));

    $wp_customize->add_control('Polash_custom_css', array(
        'label'       => __('Custom CSS', 'thunder'),
        'description' => 'Add your custom CSS here.',
        'section'     => 'Polash_custom_css_section',
        'settings'    => 'Polash_custom_css',
        'type'        => 'textarea',
    ));

   // Menu Position Option
  $wp_customize->add_section('menu_option', array(
    'title' => __('Menu Position Option', 'thunder'),
    'description' => 'If you interested to change your menu position you can do it.'
  ));

  $wp_customize->add_setting('menu_position', array(
    'default' => 'right_menu',
  ));

  $wp_customize-> add_control('menu_position', array(
    'label' => 'Menu Position',
    'description' => 'Select your menu position',
    'setting' => 'menu_position',
    'section' => 'menu_option',
    'type' => 'radio',
    'choices' => array(
      'left_menu' => 'Left Menu',
      'right_menu' => 'Right Menu',
      'center_menu' => 'Center Menu',
    ),
  ));

  // Footer Option
  $wp_customize->add_section('footer_option', array(
    'title' => __('Footer Option', 'thunder'),
    'description' => 'If you interested to change or update your footer settings you can do it.'
  ));

  $wp_customize->add_setting('copyright_section', array(
    'default' => '&copy; Copyright 2021 | Procoder BD',
  ));

  $wp_customize-> add_control('copyright_section', array(
    'label' => 'Copyright Text',
    'description' => 'If need you can update your copyright text from here',
    'setting' => 'copyright_section',
    'section' => 'footer_option',
  ));

}

add_action('customize_register', 'p_customizer_register');