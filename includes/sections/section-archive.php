<?php // START PHP
            if (have_posts() ): while (have_posts() ) : the_post();?>
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="text-center">
                        <h1><?php the_title();?></h1>
                            </div>
                        <?php the_excerpt();?>

                        <a href="<?php the_permalink();?>" class="btn btn-success">Lees meer</a>
                    </div>
                </div>
            </div>

            <?php endwhile; else: endif;?>
