<?php

function fdd_enqueue_assets() {
        wp_enqueue_style('fdd-style', get_stylesheet_directory_uri() . '/assets/css/style.css', array(), '1.0.0');

    }

add_action('wp_enqueue_scripts', 'fdd_enqueue_assets');

function fdd_enqueue_scripts() {
    wp_enqueue_script('fdd-adjust-header', get_template_directory_uri() . '/assets/js/adjust-header.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'fdd_enqueue_scripts');function fdd_register_nav_menus() {
    register_nav_menus(array(
        'primary_menu' => __('Primary Menu', 'FDD'),
            ));
}

add_action('after_setup_theme', 'fdd_register_nav_menus');

function fdd_theme_support() {
        add_theme_support('title-tag');

        add_theme_support('post-thumbnails');

        add_theme_support('wp-block-styles');

        add_theme_support('align-wide');

        add_theme_support('editor-color-palette', array(
        array(
            'name' => __('Strong Blue', 'FDD'),
            'slug' => 'strong-blue',
            'color' => '#0073aa',
        ),
        array(
            'name' => __('Lighter Blue', 'FDD'),
            'slug' => 'lighter-blue',
            'color' => '#229fd8',
        ),
            ));

        add_theme_support('editor-gradient-presets', array(
        array(
            'name' => __('Vivid cyan blue to vivid purple', 'FDD'),
            'gradient' => 'linear-gradient(135deg, rgba(6,147,227,1) 0%, rgba(155,81,224,1) 100%)',
            'slug' => 'vivid-cyan-blue-to-vivid-purple'
        ),
            ));

        add_theme_support('editor-font-sizes', array(
        array(
            'name' => __('Small', 'FDD'),
            'size' => 12,
            'slug' => 'small'
        ),
        array(
            'name' => __('Normal', 'FDD'),
            'size' => 16,
            'slug' => 'normal'
        ),
    ));
}

add_action('after_setup_theme', 'fdd_theme_support');



function fdd_customize_register( $wp_customize ) {
    // Añadir configuración para el tamaño del logo
    $wp_customize->add_setting( 'logo_size', array(
        'default'   => 100, // Valor predeterminado en píxeles
        'transport' => 'refresh', // O usa 'postMessage' si planeas aplicar los cambios con JavaScript
    ) );

    // Añadir control deslizante para ajustar el tamaño del logo
    $wp_customize->add_control( 'logo_size_control', array(
        'label'    => __( 'Logo Size', 'FDD' ),
        'section'  => 'title_tagline', // Esta es la sección donde normalmente se encuentra el logo, puedes cambiarla según sea necesario
        'settings' => 'logo_size',
        'type'     => 'range', // Tipo de control deslizante
        'input_attrs' => array(
            'min'  => 50, // Tamaño mínimo
            'max'  => 200, // Tamaño máximo
            'step' => 1, // Incremento del deslizador
        ),
    ) );
}

add_action( 'customize_register', 'fdd_customize_register' );
