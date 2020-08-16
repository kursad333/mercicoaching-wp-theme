<div class="page-container">
        <div class="container">
            <div class="col-md-12 content">
                <div class="contentheader">
                    <div class="main-underline-short">
                        <h1><?php the_title();?></h1>
                    </div>
                </div>
                <?php if (have_posts() ): while (have_posts() ) : the_post();?>
                <?php the_content();?>
                <?php endwhile; else: endif;?>
            </div>
        </div>
    </div>