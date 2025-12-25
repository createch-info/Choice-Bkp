<?php 

add_action( 'wp_enqueue_scripts', 'kurigram_enqueue_styles' );
function kurigram_enqueue_styles() {
    wp_enqueue_style( 'kurigram-parent-style', get_template_directory_uri() . '/style.css' );

}