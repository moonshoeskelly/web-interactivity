<?php get_header(); ?>

    <h1><?php bloginfo('description') ?></h1>
    <p>WordPress Site</p>
    <div class="container">
        <div class="row">
            <?php
            if(have_posts()){
                while(have_posts()){
                    the_post(); ?>
                    <div class="col-md-3">

                        <div class="post-featured-image">
                            <?php the_post_thumbnail('medium'); ?>
                        </div>

                        <h3><?php the_title(); ?></h3>

                        <p class="post-info"><?php echo "Published " . get_the_date(); echo " | "; echo "Written by: " . get_the_author(); ?></p>


                        <p><?php the_excerpt(); ?></p>

                        <a class="btn btn-primary btn-sm" href="<?php the_permalink(); ?>">Read more >></a>

                    </div>

            <?php
                }//end while loop
            }//end if statement
            ?>
        </div><!--row-->
    </div><!--container-->




<?php get_footer(); ?>
