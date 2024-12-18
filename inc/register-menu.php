<?php
function tm_theme_register_menu() {
    register_nav_menus(
        array(
            'primary' => __('Primary Menu', 'tm-theme'),
            'footer'  => __('Footer Menu', 'tm-theme')
        )
    );
}