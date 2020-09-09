<div class="row">

    <?php // START PHP
    if (have_posts()): while (have_posts()) : the_post(); ?>

        <div class="col-md-6">
            <div class="card mb-4" id='blog-post'>
                <div class="card-body" id='blog-title'>
                    <h1><?php the_title(); ?></h1>
                </div>

                <div class='card-body' id="blog-image"
                     style="background-image: url(
                     <?php
                     if (has_post_thumbnail()) {
                         the_post_thumbnail_url('blog-thumbnail');
                     } else {
                         $path = bloginfo('template_url') . '/img/blog-default.jpeg';
                         echo $path;
                     }
                     ?>
                             )">
                </div>


                <div class="card-body" id="blog-excerpt">
                    <?php the_excerpt(); ?>
                    <div class="read-more">
                        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Lees meer</a>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; else: endif; ?>
</div>
