<?php
/*
My Theme funtion
*/

// theme Title
add_theme_support('title-tag');


//theme CSS and JQuery file Calling

function p_css_js_file_calling()
{
  wp_enqueue_style( 'css_style', get_stylesheet_uri());

  wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css',array(),'5.3','all');
  wp_enqueue_style('bootstrap', get_stylesheet_uri());

  wp_register_style('custom_css', get_template_directory_uri().'/css/custom.css',array(),'5.3','all');
  wp_enqueue_style('custom_css', get_stylesheet_uri());

  //JQuery 
  wp_enqueue_script('jquery');
 
  wp_enqueue_script( 'bootstrap', get_template_directory_uri().'/js/bootstrap.css', array(),'5.3', 'true');
  wp_enqueue_script( 'main', get_template_directory_uri().'/js/main.js', array(),'1.0.0', 'true');
}

add_action('wp_enqueue_scripts' ,'p_css_js_file_calling');




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
}



add_action('customize_register', 'p_customizer_register');

