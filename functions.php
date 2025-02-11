<?php

function alecaddd_tutorial_theme_enqueue() {

  wp_enqueue_style( 'customstyle', get_stylesheet_uri() . '/css/alecaddd-tutorial.css', array(), '1.0.0' , 'all');
  wp_enqueue_script( 'customscript', get_stylesheet_uri() . '/js/alecaddd-tutorial.js', array(), '1.0.0', true );

}

add_action( 'wp_enqueue_scripts', 'alecaddd_tutorial_theme_enqueue' );