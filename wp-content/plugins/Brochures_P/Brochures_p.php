<?php
/**
 * Plugin Name: Brochures_P
 * Plugin URI: https://yourwebsite.com
 * Description: A basic custom plugin for WordPress.
 * Version: 1.0
 * Author: MD Polash Islam
 * Author URI: https://yourwebsite.com
 * License: GPL2
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

// Function to register custom post type
function create_brochures_post_type() {
    $labels = array(
        'name'               => 'Brochures',
        'singular_name'      => 'Brochure',
        'menu_name'          => 'Brochures',
        'name_admin_bar'     => 'Brochure',
        'all_items'          => 'All Brochures',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Brochure',
        'new_item'           => 'New Brochure',
        'edit_item'          => 'Edit Brochure',
        'view_item'          => 'View Brochure',
        'search_items'       => 'Search Brochures',
        'not_found'          => 'No Brochures found.',
        'not_found_in_trash' => 'No Brochures found in Trash.',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'brochures'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'supports'           => array('title', 'editor', 'thumbnail'),
    );

    register_post_type('brochures', $args);
}

// Function to register custom taxonomy
function create_brochures_taxonomy() {
    $labels = array(
        'name'              => 'Brochure Categories',
        'singular_name'     => 'Brochure Category',
        'search_items'      => 'Search Brochure Categories',
        'all_items'         => 'All Brochure Categories',
        'parent_item'       => 'Parent Brochure Category',
        'parent_item_colon' => 'Parent Brochure Category:',
        'edit_item'         => 'Edit Brochure Category',
        'update_item'       => 'Update Brochure Category',
        'add_new_item'      => 'Add New Brochure Category',
        'new_item_name'     => 'New Brochure Category Name',
        'menu_name'         => 'Brochure Categories',
    );

    $args = array(
        'hierarchical'      => true, // Set to true for categories (hierarchical taxonomy)
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'brochure-category'),
    );

    register_taxonomy('brochure_category', array('brochures'), $args);

    // Add predefined categories
    if (!term_exists('Advertising brochures', 'brochure_category')) {
        wp_insert_term('Advertising brochures', 'brochure_category');
    }
    if (!term_exists('Promotional brochures', 'brochure_category')) {
        wp_insert_term('Promotional brochures', 'brochure_category');
    }
    if (!term_exists('More brochures', 'brochure_category')) {
        wp_insert_term('More brochures', 'brochure_category');
    }
}

add_action('init', 'create_brochures_post_type');
add_action('init', 'create_brochures_taxonomy');
