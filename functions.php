<?php

function alecaddd_tutorial_theme_enqueue() {

  wp_enqueue_style( 'customstyle', get_template_directory_uri() . '/css/alecaddd-tutorial.css', array(), '1.0.0' , 'all');
  wp_enqueue_script( 'customsjs', get_template_directory_uri() . '/js/alecaddd-tutorial.js', array(), '1.0.0', true );

}

add_action( 'wp_enqueue_scripts', 'alecaddd_tutorial_theme_enqueue' );

function alecaddd_tutorial_setup() {
  add_theme_support( 'menus' );

  register_nav_menu( 'primary', 'Primary Header Navigation' );
  register_nav_menu( 'secondary', 'Footer Navigation' );
}

add_action( 'after_setup_theme', 'alecaddd_tutorial_setup' );

// **** Disable the block editor and use the classic editor for following the tutorial. ****
add_filter('use_block_editor_for_post', '__return_false', 10);
// ****