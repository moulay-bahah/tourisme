<?php

function boilerplate_load_assets()
{

  wp_enqueue_style('ely-nomrmalize-css', get_theme_file_uri('/assets/styles/normalize.css'), array(), '1.5' );
  wp_enqueue_style('ely-style-css', get_theme_file_uri('/assets/styles/style.css'), array(), '2.5', );

  // css lib
  wp_enqueue_style('ely-all-min-css', get_theme_file_uri('/assets/styles/all.min.css'), array(), '1.5');
  //js 
  wp_enqueue_script('ely-all-min-js', get_theme_file_uri('/assets/js/all.min.js'), array(), '1.5', false);
  wp_enqueue_script('ely-script-js', get_theme_file_uri('/assets/js/script.js'), array(), '2.5', true);
  
}

add_action('wp_enqueue_scripts', 'boilerplate_load_assets');

//wp_nav_menu();

function nom_du_theme_registrer_menus() {
  register_nav_menus(
      array(
          'tours' => 'tours',
          'attractions' => 'attractions',
          'footer' => 'footer',
          'footer-tours' => 'footer-tours',
          'footer-attractions' => 'footer-attractions',
          'header-menu' => 'header-menu'
      )
  );
}
add_action('after_setup_theme', 'nom_du_theme_registrer_menus');

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );
// add feature image
//add_theme_support('post-thumnails');
add_theme_support('post-thumbnails');