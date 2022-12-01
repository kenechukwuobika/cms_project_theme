<?php

function kenechukwuobika4840_support() {
    // Add support for more opinionated block styles.
    add_theme_support('wp-block-styles');
    // Enqueue editor styles.
    add_editor_style('style.css');
}

function kenechukwuobika4840_styles() {
    // Main stylesheet
    wp_enqueue_style(
        'kenechukwuobika4840-style',
        get_template_directory_uri() .'/style.css',
        Array(),
        filemtime(get_template_directory() . '/style.css')
    );

    wp_enqueue_style('
        kenechukwuobika4840--google-fonts--raleway',
        'https://fonts.googleapis.com/css2?family=EB+Garamond:wght@700&display=swap'
    );

    wp_enqueue_style('
        kenechukwuobika4840--google-fonts--roboto',
        'https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap'
    );
}

add_editor_style('https://fonts.googleapis.com/css2?family=EB+Garamond:wght@700&display=swap');
add_editor_style('https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap');

add_action( 'wp_enqueue_scripts', 'kenechukwuobika4840_styles' );
add_action('after_setup_theme', 'kenechukwuobika4840_support' );

?>