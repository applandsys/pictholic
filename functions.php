<?php
function tm_theme_enqueue_styles() {
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'tm_theme_enqueue_styles');
?>
