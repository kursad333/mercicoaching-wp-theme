<div class="page-container">
        <div class="container">
            <div class="col-md-12 content">
                <div class="page-content-header">
                    <div class="main-underline-short">
                        <h1><?php the_title();?></h1>
                        
                            <?php if(has_post_thumbnail()):?>
                                <h1>THIS HAS A THUMBNAIL PICTURE</h1>
                            <?php endif;?>
                    </div>
                    <div class='authorblock'>
                        <p> 
                            Door

                            <?php
                            //Prints out the name of the author
                            $name = the_author_meta('display_name', $post->post_author);
                            echo $name;
                            ?>

                            op

                            <?php
                            //Prints out the date the post was published
                            $date = get_the_date();
                            echo $date
                            ?>

                            om

                            <?php
                            //Prints out the exact time the post was published
                            $time = the_time();
                            echo $time;
                            ?>
                        </p>
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