<?php

// Enqueue Styles and Google Fonts
function custom_styles() {
    // Bootstrap CDN
    wp_enqueue_style('bootstrap_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
    wp_enqueue_style( 'custom_css', get_bloginfo('template_url') . '/main.css');
    wp_enqueue_style( 'Oswald', 'https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700' );
    wp_enqueue_style( 'OpenSansCondensed', 'https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300i,700' );
    wp_enqueue_style( 'Montserrat', 'https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700' );
}
add_action('wp_enqueue_scripts', 'custom_styles');
