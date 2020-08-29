<?php // START PHP
            if (have_posts() ): while (have_posts() ) : the_post();?>
            <div class="col-md-6">
                <div class="card mb-4" id='blog-post'>
                    <div class="card-body" id='blog-title'>
                    <h1><?php the_title();?></h1>
                    </div>

                    <div class='card-body' id="blog-image" style="background-image: url(https://www.me-to-we.nl/wp-content/uploads/2016/02/Basisschool.jpg)">
                    </div>

                    <div class="card-body" id="blog-content">
                        <?php the_excerpt();?>

                        <a href="<?php the_permalink();?>" class="btn btn-primary">Lees meer</a>
                    </div>
                </div>
            </div>



            <?php endwhile; else: endif;?>
