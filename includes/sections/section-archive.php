<div class="row">

    <?php // START PHP
    if (have_posts() ): while (have_posts() ) : the_post();?>

    <div class="col-md-6">
        <div class="card mb-4" id='blog-post'>
            <div class="card-body" id='blog-title'>
                <h1><?php the_title();?></h1>
            </div>

            <div class='card-body' id="blog-image" 
                style="background-image: url(
                    <?php
                    if (has_post_thumbnail()){
                        the_post_thumbnail_url('blog-thumbnail');
                    }
                    else
                        echo "https://storage.pubble.nl/6a98e371/content/2018/4/fb18bd16-7fd1-434f-b5ba-d1bea265cac1_thumb840.jpg"
                    ?>
                    )">
            </div>


            <div class="card-body" id="blog-content">
                <?php the_excerpt();?>
                <a href="<?php the_permalink();?>" class="btn btn-primary">Lees meer</a>
            </div>
        </div>
    </div>
    <?php endwhile; else: endif;?>
</div>


<!-- https://storage.pubble.nl/6a98e371/content/2018/4/fb18bd16-7fd1-434f-b5ba-d1bea265cac1_thumb840.jpg -->