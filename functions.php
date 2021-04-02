<?php

function add_styles() {
  wp_enqueue_style( 'default_styles', get_template_directory_uri().'/assets/css/styles.css?d='.rand() );
}
add_action( 'wp_enqueue_scripts', 'add_styles' );

function output_title() {
  add_theme_support('title-tag');
}
add_action('after_setup_theme', 'output_title');