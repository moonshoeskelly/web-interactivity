<?php get_header(); ?>

    <div class="container">
        <div class="row">
            <main class="col-md-12">
            <?php
            if(have_posts()){
                while(have_posts()){
                    the_post(); ?>

                    <h2 class="entry-title"><?php the_title(); ?></h2>
                    
                    <div class="single-post-featured-image">
                        <?php the_post_thumbnail('large'); ?>
                    </div>

                    <p class="post-information"><?php echo "<span class='bold'>Published</span> " . get_the_date(); echo " | "; echo "<span class='bold'>Written by</span> " . get_the_author(); ?></p>

                    <p><?php the_content(); ?></p>

                </div>
            <?php
                }//end while loop
            }//end if statement
            ?>
        </div><!--row-->
    </div><!--container-->




<?php get_footer(); ?>
