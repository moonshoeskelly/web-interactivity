<?php get_header(); ?>

    <h1><?php bloginfo('description') ?></h1>
    <div class="container">
        <div class="row">
            <?php
            if(have_posts()){
                while(have_posts()){
                    the_post(); ?>
                    <div class="col-sm-12 col-md-6 col-lg-4 post-col individual-post">
                        <div class="col-border">
                            <a href="<?php the_permalink(); ?>">
                                <div class="post-featured-image">
                                    <?php the_post_thumbnail('medium'); ?>
                                </div>

                            <h3><?php the_title(); ?></h3></a>

                            <p>Category: <?php the_category(); ?></p>

                            <p class="post-info"><?php echo "<span class='bold'>Published:</span> " . get_the_date(); echo "<br /><span class='bold'>Written by:</span> " . get_the_author(); ?></p>

                            <p class="post-excerpt"><?php the_excerpt(); ?></p>

                            <a class="btn btn-primary btn-sm" href="<?php the_permalink(); ?>">Read more</a>
                        </div>
                    </div>

            <?php
                }//end while loop
            }//end if statement
            ?>
        </div><!--row-->
    </div><!--container-->




<?php get_footer(); ?>
