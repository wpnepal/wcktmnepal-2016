<?php

add_action( 'wp_enqueue_scripts', 'wcktmnepal_enqueue_styles' );

function wcktmnepal_enqueue_styles() {
    wp_enqueue_style( 'twentysixteen-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'wcktmnepal-2016-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( 'twentysixteen-style' )
    );

}
