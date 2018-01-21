<?php
/**
 ** activation theme
 **/
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
 wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

// Close comments on the front-end
add_filter('comments_open', 'df_disable_comments_status', 20, 2);
add_filter('pings_open', 'df_disable_comments_status', 20, 2);
function df_disable_comments_status() {
	return false;
}

// load js for specifi page
add_action('wp_enqueue_scripts', 'load_scripts');
function load_scripts() {
    global $post;

    if( is_page() || is_single() )
    {
        switch($post->post_name) // post_name is the post slug which is more consistent for matching to here
        {
            case 'formation':
                wp_enqueue_script('formation', get_stylesheet_directory_uri() . '/js/isotope.pkgd.min.js', array('jquery'), '', false);
                break;
        }
    } 
}