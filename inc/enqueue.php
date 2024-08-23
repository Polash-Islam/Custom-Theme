
<?php

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



// Google Fonts Enqueue
function add_google_fonts(){

    wp_enqueue_style('google_fonts', 'https://fonts.googleapis.com/css2?family=Kaisei+Decol&family=Oswald&display=swap', false);
  }
add_action('wp_enqueue_scripts', 'add_google_fonts');