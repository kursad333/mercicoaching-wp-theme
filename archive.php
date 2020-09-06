<?php get_header(); ?>

    <div class="archive-container">
        <div class="container">
            <div class="col-md-12">
                <div class="archive-content-header">
                    <div class="main-underline-long uppercase">
                        <h1><?php echo get_theme_mod('merci-blog-page-header');?></h1>
                    </div>
                    <p><?php echo get_theme_mod('merci-blog-page-bio');?></p>
                    <hr>
                </div>


                <?php get_template_part('/inc/sections/section', 'archive'); ?>

                <hr>
                <div class="text-center">
                    <?php
                    global $wp_query;
                    $big = 999999999; //need an very unlikely integer
                    echo paginate_links(array(
                        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                        'format' => '?paged=%#%',
                        'current' => max(1, get_query_var('paged')),
                        'total' => $wp_query->max_num_pages
                    ));
                    ?>
                </div>
            </div>
        </div>
    </div>


<?php get_footer(); ?>