<?php
//STYLES connect start
if (!function_exists('dw_styles_setup')) :
    function dw_styles_setup()
    {
        $release_version = '1.0.0';
        wp_enqueue_style('dw-style', get_theme_file_uri('/assets/css/style.min.css'), array(), $release_version);
    }
endif;
add_action('wp_enqueue_scripts', 'dw_styles_setup');

add_filter( 'wp_enqueue_scripts', 'true_dequeue_gutenberg_styles', 999 );
function true_dequeue_gutenberg_styles() {
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'global-styles' ); // глобальные CSS-переменные
}

//STYLES connect end