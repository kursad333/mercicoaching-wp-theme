<?php


// Load stylesheets
function load_css()
{
    wp_register_style('bootstrapcss', get_template_directory_uri() . '/css/bootstrap/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrapcss');

    wp_register_style('customcss', get_template_directory_uri() . '/css/custom.css', array(), false, 'all');
    wp_enqueue_style('customcss');

    wp_register_style('googlefonts', 'https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap');
    wp_enqueue_style('googlefonts');

    wp_register_style('googleicons', 'https://fonts.googleapis.com/icon?family=Material+Icons');
    wp_enqueue_style('googleicons');

}
add_action('wp_enqueue_scripts', 'load_css');


// Load scripts
function load_js()
{
    wp_enqueue_script('jquery');

    wp_register_script('bootstrapjs§', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true);
    wp_enqueue_script('bootstrapjs');
}
add_action('wp_enqueue_scripts', 'load_js');

// Register custom navigation WALKER
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

// Theme options
add_theme_support('menus');

// Menus
register_nav_menus(
    array(
        'top-menu' => 'Top Menu Location'
    )
);