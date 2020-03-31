<?php /*Template Name: Checkout Page Template */ ?>

<?php get_header(); ?>

    <div class="container">
        <div class="row">
            <main class="col-md-12">
                <?php
                if(have_posts()){
                    while(have_posts()){
                        the_post(); ?>
                        <?php the_post_thumbnail('large'); ?>

                        <h2 class="entry-title"><?php the_title(); ?></h2>

                        <p><?php the_content(); ?></p>

                <?php
                    }//end while loop
                }//end if statement
                ?>
            </main>
        </div><!--row-->
    </div><!--container-->




<?php get_footer(); ?>
