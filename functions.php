<?php
/*===================================

Add style sheet and javascript files

====================================*/

    function custom_theme_scripts(){
        //Bootstrap integration
        wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');

        //Main CSS
        wp_enqueue_style('main-styles', get_stylesheet_uri() );

        //Javascript files
        wp_enqueue_style('custom-js', get_template_directory_uri() . '/js/main.js');
        wp_enqueue_style('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js');
    }

    add_action('wp_enqueue_scripts', 'custom_theme_scripts');

/*===================================

Custom header logo

====================================*/

    $custom_image_header = array(
        'width' => 225,
        'height'=> 120,
        'uploads' => true,
);

add_theme_support('custom-header', $custom_image_header);

/*===================================

Get featured image

====================================*/

add_theme_support('post-thumbnails');
?>
