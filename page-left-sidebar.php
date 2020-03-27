<?php
/*
Template Name: Left Sidebar
Template Post Type: page, post
*/
get_header(); ?>

    <div class="container">
        <div class="row">
            <aside class="col-md-3">
                <?php get_sidebar(); ?>
            </aside>
            <main class="col-md-9">
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
