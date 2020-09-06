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
function register_navwalker()
{
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}

add_action('after_setup_theme', 'register_navwalker');

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
add_filter('excerpt_length', function ($length) {
    return 75;
});


// Custom image sizes
add_image_size('blog-small', 400, 200, false);
add_image_size('blog-large', 800, 400, false);
add_image_size('blog-thumbnail', 400, 220, true);
add_image_size('front-page-background', 1125, 830, true);


// WORDPRESS CUSTOMIZER API


//Create the panels for all all customizable sections
function create_frontpage_panels($wp_customize)
{
    $wp_customize->add_panel('frontpage', array(
        // 'priority' => 1,
        'title' => 'Voorpagina'
    ));

    $wp_customize->add_panel('footer', array(
        // 'priority' => 2,
        'title' => 'Voettekst contactgegevens'
    ));

    $wp_customize->add_panel('topnav', array(
        // 'priority' => 3,
        'title' => 'Navigatie menu'
    ));

    $wp_customize->add_panel('showcase', array(
        // 'priority' => 3,
        'title' => 'Marketing onderdeel'
    ));
}

;
add_action('customize_register', 'create_frontpage_panels');


// Section to customize the two buttons on the header of the front page
function merci_front_page_buttons($wp_customize)
{
    $wp_customize->add_section('merci-front-page-buttons', array(
        'title' => 'Header buttons',
        'panel' => 'frontpage'
    ));

    $wp_customize->add_setting('merci-front-page-section-bone');
    $wp_customize->add_setting('merci-front-page-section-btwo');

    $wp_customize->add_setting('merci-front-page-section-bone-label', array(
        'default' => 'COACHING'
    ));
    $wp_customize->add_setting('merci-front-page-section-btwo-label', array(
        'default' => 'CONTACT'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'merci-front-page-section-bone-label-control', array(
        'label' => 'Button one label',
        'section' => 'merci-front-page-buttons',
        'settings' => 'merci-front-page-section-bone-label',
    )));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'merci-front-page-section-bone-control', array(
        'label' => 'Button one',
        'section' => 'merci-front-page-buttons',
        'settings' => 'merci-front-page-section-bone',
        'type' => 'dropdown-pages'

    )));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'merci-front-page-section-btwo-label-control', array(
        'label' => 'Button two label',
        'section' => 'merci-front-page-buttons',
        'settings' => 'merci-front-page-section-btwo-label',
    )));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'merci-front-page-section-btwo-control', array(
        'label' => 'Button two',
        'section' => 'merci-front-page-buttons',
        'settings' => 'merci-front-page-section-btwo',
        'type' => 'dropdown-pages'
    )));
}

;
add_action('customize_register', 'merci_front_page_buttons');


// Section to customize the custom parallax background
function merci_front_page_background_image($wp_customize)
{
    $wp_customize->add_section('merci-front-page-header', array(
        'title' => 'Header achtergrond foto',
        'panel' => 'frontpage'
    ));

    $wp_customize->add_setting('merci-front-page-header-image', array(
        'default' => 'COACHING'
    ));

    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'merci-front-page-header-image-control', array(
        'label' => 'Achtergrond foto',
        'section' => 'merci-front-page-header',
        'settings' => 'merci-front-page-header-image',
        'width' => '1125',
        'height' => '830'
    )));
}

;
add_action('customize_register', 'merci_front_page_background_image');


// Section to customize the whole marketing section
function merci_front_page_showcase($wp_customize)
{
    $wp_customize->add_section('merci-front-page-showcase', array(
        'title' => 'Marketing onderdeel',
        'panel' => 'frontpage'
    ));

    //This is the heading of the marketing section
    $wp_customize->add_setting('merci-front-page-showcase-header', array(
        'default' => 'COACHING'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'merci-front-page-showcase-header-control', array(
        'label' => 'Hoofdtekst',
        'section' => 'merci-front-page-showcase',
        'settings' => 'merci-front-page-showcase-header',
    )));

    //This is the short paragraph of the marketing section
    $wp_customize->add_setting('merci-front-page-showcase-paragraph', array(
        'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ullamcorper diam sit amet est pharetra, a pulvinar lacus mattis. Proin tristique volutpat erat, quis efficitur turpis aliquam at. Nunc elementum justo placerat quam pulvinar, eget rhoncus ipsum scelerisque. Nam eu mi a velit scelerisque feugiat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nam faucibus quam non odio vehicula, ut elementum metus posuere. Vestibulum ac metus felis. Mauris dolor ligula, viverra at nunc quis, congue sodales erat. Phasellus blandit vehicula elementum.'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'merci-front-page-showcase-paragraph-control', array(
        'label' => 'Hoofdtekst',
        'section' => 'merci-front-page-showcase',
        'settings' => 'merci-front-page-showcase-paragraph',
        'type' => 'textarea'
    )));


    //START OF THE THREE SMALL COLUMNS//

    //This sets the picture of the column
    $wp_customize->add_setting('merci-front-page-showcase-image1', array(
        'default' => 'COACHING'
    ));
    //Different WP class for the image control with custom image size
    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'merci-front-showcase-image1-control', array(
        'label' => 'Foto van kop 1',
        'section' => 'merci-front-page-showcase',
        'settings' => 'merci-front-page-showcase-image1',
        'width' => '200',
        'height' => '200'
    )));

    //SETS THE SMALL HEADER UNDER THE COLUMN
    $wp_customize->add_setting('merci-front-page-showcase-image-header1', array(
        'default' => 'HEADING'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'merci-front-page-showcase-image-header1-control', array(
        'label' => 'Hoofdtekst van kop 1',
        'section' => 'merci-front-page-showcase',
        'settings' => 'merci-front-page-showcase-image-header1',
    )));

    // SETS THE SMALL PARAGRAPH UNDER THE HEADER OF THE COLUMN
    $wp_customize->add_setting('merci-front-page-showcase-paragraph1', array(
        'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ullamcorper diam sit amet est pharetra, a pulvinar lacus mattis. Proin tristique vol'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'merci-front-page-showcase-header-paragraph1-control', array(
        'label' => 'Tekst van kop 1',
        'section' => 'merci-front-page-showcase',
        'settings' => 'merci-front-page-showcase-paragraph1',
        'type' => 'textarea'
    )));
    //END PICTURE 1//

    //THESE THREE ELEMENTS ARE ALL THE SAME//

    //START PICTURE 2//
    $wp_customize->add_setting('merci-front-page-showcase-image2', array(
        'default' => 'HEADING'
    ));

    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'merci-front-showcase-image2-control', array(
        'label' => 'Foto van kop 2',
        'section' => 'merci-front-page-showcase',
        'settings' => 'merci-front-page-showcase-image2',
        'width' => '200',
        'height' => '200'
    )));

    $wp_customize->add_setting('merci-front-page-showcase-image-header2', array(
        'default' => 'HEADING'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'merci-front-page-showcase-image-header2-control', array(
        'label' => 'Hoofdtekst van kop 2',
        'section' => 'merci-front-page-showcase',
        'settings' => 'merci-front-page-showcase-image-header2',
    )));

    $wp_customize->add_setting('merci-front-page-showcase-paragraph2', array(
        'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ullamcorper diam sit amet est pharetra, a pulvinar lacus mattis. Proin tristique vol'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'merci-front-page-showcase-header-paragraph2-control', array(
        'label' => 'Tekst van kop 2',
        'section' => 'merci-front-page-showcase',
        'settings' => 'merci-front-page-showcase-paragraph2',
        'type' => 'textarea'
    )));
    //END PICTURE 2//

    //START PICTURE 3 //
    $wp_customize->add_setting('merci-front-page-showcase-image3', array(
        'default' => 'COACHING'
    ));

    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'merci-front-showcase-image3-control', array(
        'label' => 'Foto van kop 3',
        'section' => 'merci-front-page-showcase',
        'settings' => 'merci-front-page-showcase-image3',
        'width' => '200',
        'height' => '200'
    )));

    $wp_customize->add_setting('merci-front-page-showcase-image-header3', array(
        'default' => 'HEADING'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'merci-front-page-showcase-image-header3-control', array(
        'label' => 'Hoofdtekst van kop 3',
        'section' => 'merci-front-page-showcase',
        'settings' => 'merci-front-page-showcase-image-header3',
    )));

    $wp_customize->add_setting('merci-front-page-showcase-paragraph3', array(
        'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ullamcorper diam sit amet est pharetra, a pulvinar lacus mattis. Proin tristique vol'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'merci-front-page-showcase-header-paragraph3-control', array(
        'label' => 'Tekst van kop 3',
        'section' => 'merci-front-page-showcase',
        'settings' => 'merci-front-page-showcase-paragraph3',
        'type' => 'textarea'
    )));
}

;
add_action('customize_register', 'merci_front_page_showcase');


function merci_aboutme($wp_customize)
{
    $wp_customize->add_section('merci-aboutme', array(
        'title' => 'Over mij onderdeel',
        'panel' => 'frontpage'
    ));

    //Sets the header of the about me section
    $wp_customize->add_setting('merci-aboutme-header', array(
        'default' => 'OVER MIJ'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'merci-aboutme-header-control', array(
        'label' => 'Hoofdtekst van dit onderdeel',
        'section' => 'merci-aboutme',
        'settings' => 'merci-aboutme-header',
    )));

    //Sets the bio under the header
    $wp_customize->add_setting('merci-aboutme-bio', array(
        'default' => 'Samen kom je verder...'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'merci-aboutme-bio-control', array(
        'label' => 'Biografie van de koptekst',
        'section' => 'merci-aboutme',
        'settings' => 'merci-aboutme-bio',
    )));


    //This is the short paragraph of the about me sction
    $wp_customize->add_setting('merci-aboutme-paragraph', array(
        'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ullamcorper diam sit amet est pharetra, a pulvinar lacus mattis. Proin tristique volutpat erat, quis efficitur turpis aliquam at. Nunc elementum justo placerat quam pulvinar, eget rhoncus ipsum scelerisque. Nam eu mi a velit scelerisque feugiat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nam faucibus quam non odio vehicula, ut elementum metus posuere. Vestibulum ac metus felis. Mauris dolor ligula, viverra at nunc quis, congue sodales erat. Phasellus blandit vehicula elementum.'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'merci-aboutme-paragraph-control', array(
        'label' => 'Tekst van dit onderdeel',
        'section' => 'merci-aboutme',
        'settings' => 'merci-aboutme-paragraph',
        'type' => 'textarea'
    )));


    //Sets the picture for the about me
    $wp_customize->add_setting('merci-aboutme-image', array(
        'default' => 'HEADING'
    ));
    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'merci-aboutme-image-control', array(
        'label' => 'Foto over dit onderdeel',
        'section' => 'merci-aboutme',
        'settings' => 'merci-aboutme-image',
        'width' => '550',
        'height' => '400'
    )));


}

;
add_action('customize_register', 'merci_aboutme');


function merci_footer_section($wp_customize)
{
    $wp_customize->add_section('merci-footer-section', array(
        'title' => 'Voettekst contact gegevens',
        // 'panel' => 'footer'
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
}

;
add_action('customize_register', 'merci_footer_section');
