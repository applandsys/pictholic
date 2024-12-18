<?php
require_once get_template_directory() . '/inc/theme-supports.php';
require_once get_template_directory() . '/inc/enqueue-scripts.php'; //tm_theme_enqueue_styles()
require_once get_template_directory() . '/inc/custom-logo.php';
require_once get_template_directory() . '/inc/register-menu.php';
require_once get_template_directory() . '/inc/category-list-icon.php';

// Hook the 'my_theme_enqueue_styles' function to 'wp_enqueue_scripts' action
add_action('wp_enqueue_scripts', 'tm_theme_enqueue_styles');
add_action( 'customize_register', 'tm_theme_customize_register' );
add_action('after_setup_theme', 'tm_theme_register_menu');
add_filter('wp_list_categories', 'tm_add_icon_to_category_names');


?>
