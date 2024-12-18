<?php
// Enqueue scripts and styles
// DOC: https://developer.wordpress.org/reference/functions/wp_enqueue_style/
function tm_theme_enqueue_styles() {
    $theme_version = filemtime(get_template_directory() . '/style.css');
    // Enqueue main theme stylesheet
    wp_enqueue_style('main-style', get_stylesheet_uri());


    $styles = [
        'animate',
        'bootstrap',
        'font-awesome',
        'fonts',
        'flaticon',
        'owl.carousel',
        'owl.theme.default',
        'dl-menu',
        'nice-select',
        'magnific-popup',
        'venobox',
        'responsive'
    ];

    foreach ($styles as $style) {
        wp_enqueue_style($style, get_template_directory_uri() . '/assets/css/'.$style.'.css', array(), $theme_version , 'all');
    }


    $sliderStyles = [
        'layers',
        'navigation',
        'settings'
    ];

   foreach ( $sliderStyles as  $sliderStyle) {
       wp_enqueue_style($sliderStyle, get_template_directory_uri() . '/assets/js/plugin/rs_slider/'.$sliderStyle.'.css', array(), $theme_version , 'all');
   }

    $scripts = [
        'modernizr',
        'bootstrap',
        'owl.carousel',
        'jquery.dlmenu',
        'jquery.sticky',
        'jquery.nice-select.min',
        'jquery.magnific-popup',
        'jquery.bxslider.min',
        'venobox.min',
        'smothscroll_part1.',
        'smothscroll_part2'

    ];
    // Enqueue custom JavaScript file
    foreach($scripts as $script) {
        wp_enqueue_script($script, get_template_directory_uri().'/assets/js/'.$script.'.js', array('jquery'), $theme_version , true);
    }

    $pluginScripts = [
        'jquery.themepunch.revolution.min',
        'jquery.themepunch.tools.min',
        'revolution.addon.snow.min',
        'revolution.extension.actions.min',
        'revolution.extension.carousel.min',
        'revolution.extension.kenburn.min',
        'revolution.extension.layeranimation.min',
        'revolution.extension.migration.min',
        'revolution.extension.navigation.min',
        'revolution.extension.parallax.min',
        'revolution.extension.slideanims.min',
        'revolution.extension.video.min',
    ];

    foreach($pluginScripts as $pluginScript) {
        wp_enqueue_script($pluginScript, get_template_directory_uri().'/assets/js/plugin/rs_slider/'.$pluginScript.'.js', array(), $theme_version , true);
    }

    wp_enqueue_script('custom-js', get_template_directory_uri().'/assets/js/custom.js', array(), $theme_version , true);
    // You can also enqueue inline styles or scripts here if needed
    //   wp_add_inline_script('custom-script', 'console.log("Custom script loaded");');
}
