<div class="page-container">
        <div class="container">
            <div class="col-md-12 content">
                <div class="contentheader">
                    <div class="main-underline-short">
                        <h1>MERVE COACHING BLOG</h1>
                    </div>
                </div>
                
                <?php // START PHP
if (have_posts() ): while (have_posts() ) : the_post();?>

    <h1><?php the_title();?></h1>

    <?php the_excerpt();?>
    <a href="<?php the_permalink();?>">Read more</a>
<?php endwhile; else: endif;?>

            </div> <!-- END col-md-12 content -->
        </div> <!-- END container -->
    </div> <!-- END page-container -->