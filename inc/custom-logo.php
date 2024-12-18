<?php
// add_theme_support( 'custom-logo' );
function tm_theme_customize_register( $wp_customize ) {
    $wp_customize->add_section( 'logo_section' , array(
        'title'      => __( 'Logo Settings', 'my_theme' ),
        'priority'   => 30,
    ) );

    $wp_customize->add_setting( 'logo_position', array(
        'default'   => 'left',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( 'logo_position_control', array(
        'label'    => __( 'Logo Position', 'my_theme' ),
        'section'  => 'logo_section',
        'settings' => 'logo_position',
        'type'     => 'radio',
        'choices'  => array(
            'left'  => __( 'Left', 'my_theme' ),
            'center' => __( 'Center', 'my_theme' ),
            'right' => __( 'Right', 'my_theme' ),
        ),
    ) );
}