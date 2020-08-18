<div class="page-container">
        <div class="container">
            <div class="col-md-9 content">
                <div class="contentheader">
                    <div class="main-underline-short">
                        <h1><?php the_title();?></h1>
                    </div>
                </div>
                
                <?php // START PHP
                if (have_posts() ): while (have_posts() ) : the_post();
                    the_content();
                endwhile; else: endif;
                ?> <!-- END PHP -->

            </div> <!-- END col-md-12 content -->
        </div> <!-- END container -->
    </div> <!-- END page-container -->