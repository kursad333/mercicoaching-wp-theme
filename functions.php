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

    wp_register_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true);
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
add_theme_support('post-thumbnails');



// Menus
register_nav_menus(
    array(
        'top-menu' => 'Top Menu Location'
    )
);


// Sets the custom excerpt length
add_filter( 'excerpt_length', function($length) {
    return 75;
} );


// Custom image sizes
add_image_size('blog-small', 400, 200, false);
add_image_size('blog-large', 800, 400, false);
add_image_size('blog-thumbnail', 400, 220, true);
add_image_size('front-page-background', 1125, 830, true);


// Add footer callout section to admin appearence customize screen

function merci_footer_section($wp_customize){
    $wp_customize->add_section('merci-footer-section', array(
        'title' => 'Voettekst contact gegevens'
    ));

    $wp_customize->add_setting('merci-footer-section-location', array(
        'default' => 'Evert van Manderstraat 1 <br>1234 AB Amsterdam'
    ));
    $wp_customize->add_setting('merci-footer-section-email', array(
        'default' => 'mijnemail@merci.nl'
    ));
    $wp_customize->add_setting('merci-footer-section-phone', array(
        'default' => '+31 6 12 34 56 78 <br> Ma t/m vr - 10:00 - 18:00'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'merci-footer-section-location-control', array(
        'label' => 'Adres',
        'section' => 'merci-footer-section',
        'settings' => 'merci-footer-section-location'
    )));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'merci-footer-section-email-control', array(
        'label' => 'Email',
        'section' => 'merci-footer-section',
        'settings' => 'merci-footer-section-email'
    )));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'merci-footer-section-phone-control', array(
        'label' => 'Telefoonnummer',
        'section' => 'merci-footer-section',
        'settings' => 'merci-footer-section-phone'
    )));
};

add_action('customize_register', 'merci_footer_section');