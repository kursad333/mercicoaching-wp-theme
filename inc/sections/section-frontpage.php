<div class="front-page-container">
    <div class="parallax"
         style="background-image: url(
        <?php
         if (!get_theme_mod('merci-front-page-header-image')) {
             $path = bloginfo('template_url') . '/img/parallax-default.jpg';
             echo $path;
         } else {
             echo wp_get_attachment_url(get_theme_mod('merci-front-page-header-image'));
         }
         ?>">
        <div class="jumbotron jumbotron-fluid" id="header">
            <div class="container text-center mt-5">
                <div class="jumbobuttons">
                    <a href="<?php echo get_permalink(get_theme_mod('merci-front-page-section-bone')); ?>">
                        <button type="button"
                                class="btn btn-primary button mr-3 uppercase"><?php echo get_theme_mod('merci-front-page-section-bone-label'); ?></button>
                    </a>
                    <a href="<?php echo get_permalink(get_theme_mod('merci-front-page-section-btwo')); ?>">
                        <button type="button"
                                class="btn btn-primary button uppercase"> <?php echo get_theme_mod('merci-front-page-section-btwo-label'); ?> </button>
                    </a>
                </div>
            </div>
        </div>

        <div class="jumbotron jumbotron-fluid" id="marketing">
            <div class="container text-center marketingintro main-underline-short">
                <h1><?php echo get_theme_mod('merci-front-page-showcase-header') ?></h1>
                <a class="mb-5"> <?php echo get_theme_mod('merci-front-page-showcase-paragraph'); ?></a>
            </div>

            <?php //variable for better readability
            $marketingdefault = bloginfo('template_url') . '/img/marketing-default.jpg';
            ?>

            <div class="container marketing mt-5">
                <div class="row">
                    <div class="col-lg-4 section-underline">
                        <img class="rounded mb-4"
                             src="<?php
                             if (!get_theme_mod('merci-front-page-showcase-image1')) {
                                 echo $marketingdefault;
                             } else {
                                 echo wp_get_attachment_url(get_theme_mod('merci-front-page-showcase-image1'));
                             }
                             ?>"
                             alt="Generic placeholder image" width="200" height="200">
                        <h3><?php echo get_theme_mod('merci-front-page-showcase-image-header1'); ?></h3>
                        <a><?php echo get_theme_mod('merci-front-page-showcase-paragraph1'); ?></a>
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4 section-underline">
                        <img class="rounded mb-4"
                             src="<?php

                             if (!get_theme_mod('merci-front-page-showcase-image2')) {
                                 echo $marketingdefault;
                             } else {
                                 echo wp_get_attachment_url(get_theme_mod('merci-front-page-showcase-image2'));
                             }
                             ?>"
                             alt="Generic placeholder image" width="200" height="200">
                        <h3><?php echo get_theme_mod('merci-front-page-showcase-image-header2'); ?></h3>
                        <a><?php echo get_theme_mod('merci-front-page-showcase-paragraph2'); ?></a>
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4 section-underline">
                        <img class="rounded mb-4"
                             src="<?php
                             if (!get_theme_mod('merci-front-page-showcase-image3')) {
                                 echo $marketingdefault;
                             } else {
                                 echo wp_get_attachment_url(get_theme_mod('merci-front-page-showcase-image3'));
                             }
                             ?>"
                             alt="Generic placeholder image" width="200" height="200">
                        <h3><?php echo get_theme_mod('merci-front-page-showcase-image-header3'); ?></h3>
                        <a><?php echo get_theme_mod('merci-front-page-showcase-paragraph3'); ?></a>
                    </div><!-- /.col-lg-4 -->
                </div>
            </div>
        </div>
    </div>

    <div class="jumbotron jumbotron-fluid" id="aboutme">
        <div class="container">
            <div class="aboutheader uppercase text-center main-underline-short">
                <h1><?php echo get_theme_mod('merci-aboutme-header'); ?></h1>
                <h6><?php echo get_theme_mod('merci-aboutme-bio'); ?></h6>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 column">
                    <div class="aboutme">
                        <a><?php echo get_theme_mod('merci-aboutme-paragraph') ?></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 column aboutme">
                    <img src="<?php
                    if (!get_theme_mod('merci-aboutme-image')) {
                        $path = bloginfo('template_url') . '/img/aboutme-default.jpg';
                        echo $path;
                    } else {
                        echo wp_get_attachment_url(get_theme_mod('merci-aboutme-image'));
                    }
                    ?>"
                         class="img-fluid"
                         width="550" height="400">
                </div>
            </div>
        </div>
    </div>
</div>