<?php

register_nav_menus(array('primary'	=> __('Primary Menu', 'menu'),));

function add_theme_scripts() {
  wp_enqueue_style( 'style', get_stylesheet_uri() );
 
  //wp_enqueue_style( 'slider', get_template_directory_uri() . '/css/slider.css', array(), '1.1', 'all');
  //wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array ( 'jquery' ), 1.1, true);
}

add_action('wp_enqueue_scripts', 'add_theme_scripts');