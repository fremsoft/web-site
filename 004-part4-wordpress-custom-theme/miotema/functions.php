<?php

/* Adding CSS */
$css_timestamp = filemtime( get_stylesheet_directory().'/css/style.css' );
define( 'CSS_VERSION', $css_timestamp );

function basic_enqueue_styles() {
    wp_register_style( 'styles', get_template_directory_uri() . '/css/style.css', NULL, CSS_VERSION );
    $dependencies = array('styles');
    wp_enqueue_style( 'basic-style', get_stylesheet_uri(), $dependencies, CSS_VERSION );
}
add_action( 'wp_enqueue_scripts', 'basic_enqueue_styles' );

/* Adding JS */
/*
  $js_timestamp = filemtime( get_stylesheet_directory().'/js/controls.js' );
  define( 'JS_VERSION', $js_timestamp );

  function basic_enqueue_scripts() {
    wp_enqueue_script( 'custom-script', get_template_directory_uri() . '/js/controls.js', array( 'jquery' ), JS_VERSION );
  }
  add_action( 'wp_enqueue_scripts', 'basic_enqueue_scripts' );
*/

/* TITLE TAG */
function basic_wp_setup() {
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'basic_wp_setup' );

add_theme_support( 'post-thumbnails' );

/* CUSTOM MENU */
function wp_custom_main_menu() {
    register_nav_menu( 'my-custom-menu', __('My Custom Menu') );
}
add_action( 'init', 'wp_custom_main_menu' );

/* FOOTER MENU */
function wp_custom_footer_menu() {
  register_nav_menu( 'my-footer-menu', __('My Footer Menu') );
}
add_action( 'init', 'wp_custom_footer_menu' );

?>