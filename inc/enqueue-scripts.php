<?php
// Enqueue scripts and styles
// DOC: https://developer.wordpress.org/reference/functions/wp_enqueue_style/
function tm_theme_enqueue_styles() {
    // Enqueue main theme stylesheet
    wp_enqueue_style('main-style', get_stylesheet_uri());


    $styles = [
        'animate',
        'bootstrap',
        'dl-menu',
        'flaticon',
        'font-awesome',
        'font-awesome',
        'magnific-popup',
        'nice-select',
        'owl.carousel',
        'owl.carousel',
        'responsive',
        'responsive2',
        'responsive3',
        'responsive4',
        'seat',
        'slick',
        'slick-theme',
        'style2',
        'style3',
        'style4',
        'venobox',
    ];

//    foreach ($styles as $style) {
//        wp_enqueue_style($style, get_template_directory_uri() . '/assets/css/'.$style.'.css', array(), null, 'all');
//    }


    // Enqueue custom JavaScript file
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), null, true);

    // You can also enqueue inline styles or scripts here if needed
    // wp_add_inline_script('custom-script', 'console.log("Custom script loaded");');
}
