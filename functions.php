<?php

function load_css()
{
    wp_register_style('bootstrapcss', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrapcss');

    wp_register_style('customcss', get_template_directory_uri() . '/css/custom.css', array(), false, 'all');
    wp_enqueue_style('customcss');

    wp_register_style('googlefonts', 'https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap');
    wp_enqueue_style('googlefonts');

    wp_register_style('googleicons', 'https://fonts.googleapis.com/icon?family=Material+Icons');
    wp_enqueue_style('googleicons');

}

add_action('wp_enqueue_scripts', 'load_css');

function load_js()
{
    wp_enqueue_script('jquery');


    wp_register_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true);
    wp_enqueue_script('bootstrapjs');
}
add_action('wp_enqueue_scripts', 'load_js');