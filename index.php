<?php
<<<<<<< HEAD
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define( 'WP_USE_THEMES', true );

/** Loads the WordPress Environment and Template */
require __DIR__ . '/wp-blog-header.php';
=======
/*
* The main template file
*/ 
get_header(); ?>

<section id="body_area">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <?php if (have_posts()) :
                    while (have_posts()) : the_post(); ?>

                    <div class="blog_area">
                        <div class="post_thumb">
                            <a href="<?php the_permalink(); ?>"><?php echo the_post_thumbnail('post-thumbnails'); ?></a>
                        </div>
                        <div class="post_details">
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <?php the_excerpt(); ?>
                        </div>
                    </div>
                <?php endwhile;
                else :
                    _e('No post found');
                endif; ?>
                
                <div id="page_nav">
                    <?php 
                    if (function_exists('pagenav')) {
                        pagenav(); 
                    } else { 
                        next_posts_link('Older Posts');
                        previous_posts_link('Newer Posts');
                    } 
                    ?>
                </div>
            </div>
            <div class="col-md-3">
                <h2>This is sidebar area</h2>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
>>>>>>> origin/main
