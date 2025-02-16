<?php
/*
    ================================================================
      Include scripts and styles
    ================================================================
*/
function alecaddd_tutorial_theme_enqueue() {

  // CSS (Your styles need to be enqueued after every other styles)
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '5.3.3', 'all');
  wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/alecaddd-tutorial.css', array(), '1.0.0', 'all');

  // JS (Your scripts need to be enqueued after every other scripts)
  wp_enqueue_script('jquery');
  wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '5.3.3', true);
  wp_enqueue_script('customsjs', get_template_directory_uri() . '/js/alecaddd-tutorial.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'alecaddd_tutorial_theme_enqueue');

/*
    ================================================================
      Activate menus
    ================================================================
*/
function alecaddd_tutorial_setup() {
  add_theme_support('menus');

  register_nav_menu('primary', 'Primary Header Navigation');
  register_nav_menu('secondary', 'Footer Navigation');
}

add_action('after_setup_theme', 'alecaddd_tutorial_setup');

/*
    ================================================================
      Theme support functions
    ================================================================
*/
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');

add_theme_support('post-formats', array('aside', 'image', 'video'));

/*
    ================================================================
      Disable the block editor and use the classic editor 
      (for following the tutorial)
    ================================================================
*/
add_filter('use_block_editor_for_post', '__return_false', 10);
