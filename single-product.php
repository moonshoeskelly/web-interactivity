<?php get_header(); ?>

    <div class="container">
        <div class="row">
            <main class="twelve columns">
            <?php
            if(have_posts()){
                while(have_posts()){
                    the_post(); ?>

                    <h2 class="entry-title"><?php the_title(); ?></h2>

                    <div class="single-post-featured-image">
                        <?php the_post_thumbnail('large'); ?>
                    </div>

                    <div class="post-text">
                        <p><?php the_content(); ?></p>
                    </div>

                </div>
            <?php
                }//end while loop
            }//end if statement
            ?>
        </div><!--row-->
    </div><!--container-->




<?php get_footer(); ?>
