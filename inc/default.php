<?php

// Theme Title
add_theme_support('title-tag');

// Thumbnail Image Area
add_theme_support('post-thumbnails', array('page', 'post'));
add_image_size('post-thumbnails', 970, 350, true);

// Excerpt 'Read More' link
function p_excerpt_more($more) {
    return '<br><br><a class="readmore" href="' . get_permalink(get_the_ID()) . '">' . 'Read More' . '</a>';
}
add_filter('excerpt_more', 'p_excerpt_more');

// Excerpt length to 40 words
function p_excerpt_length($length) {
    return 40;
}
add_filter('excerpt_length', 'p_excerpt_length', 999);

// Pagenav Function
function pagenav(){
    global $wp_query, $wp_rewrite;
    $pages ='';
    $max = $wp_query->max_num_pages;
    if(!$current = get_query_var('paged')) $current = 1;
    
    $args = array(
        'base'      => str_replace(999999999, '%#%', get_pagenum_link(999999999)),
        'total'     => $max,
        'current'   => $current,
        'prev_text' => 'Prev',
        'next_text' => 'Next',
    );

    $total = 1;
    
    if ($max > 1) {
        echo '<div class="wp_pagenav">';
        if ($total == 1 && $max > 1) {
            $pages = '<p class="pages"> Page ' . $current . ' <span>of</span> ' . $max . '</p>';
        }
        echo $pages . paginate_links($args);
        echo '</div>';
    }
}
