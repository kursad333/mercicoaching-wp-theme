<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php wp_head(); ?>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand brand" href="#">Mercimek<br>Coaching</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'your-theme-slug'); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- <a class="navbar-brand brand" href="#">Mercimek<br>Coaching</a> -->
                    <?php
                    wp_nav_menu(array(
                        'theme_location'    => 'top-menu',
                        'depth'             => 1,
                        'container'         => 'div',
                        'container_class'   => 'collapse navbar-collapse justify-content-end',
                        'container_id'      => 'bs-example-navbar-collapse-1',
                        'menu_class'        => 'navbar-nav p-1 navitems',
                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'            => new WP_Bootstrap_Navwalker(),
                    ));
                    ?>

            </div>
        </nav>
    </header>