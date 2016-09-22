<?php

function er_enqueue_scripts() {
	
	wp_enqueue_style( 'css', get_template_directory_uri() . '/css/main.css' );
	wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js', 0, 0, 0 );
	wp_enqueue_script( 'js', get_template_directory_uri() . '/js/scripts.js', 0, 0, true );

}
add_action( 'wp_enqueue_scripts', 'er_enqueue_scripts' );


