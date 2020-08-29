<?php get_header();?>

<div class="page-container">
        <div class="container">
            <div class="col-md-12">
                <div class="contentheader">
                    <div class="main-underline-short">
                        <h1>Merve's activiteiten blog</h1>
                    </div>
                        <a>Welkom op de activiteiten blog van Merve's Coaching.
                            Hier vind u tips & tricks rondom opvoeding van kinderen zowel als activiteiten die ik uitvoer met mijn team

                </div>
                </a>
                <hr>
                </div> <!-- END col-md-12 content -->
                <br>
                <br>

                <div class='row'>
                    <?php get_template_part('/includes/sections/section', 'archive');?>
                </div>
               <?php
               global $wp_query;
               $big = 999999999; //need an very unlikely integer
               echo paginate_links( array(
                   'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big) ) ),
                   'format' => '?paged=%#%',
                   'current' => max( 1, get_query_var('paged') ),
                   'total' => $wp_query->max_num_pages
               ));
               ?>




        </div> <!-- END container -->
    </div> <!-- END page-container -->


<?php get_footer();?>