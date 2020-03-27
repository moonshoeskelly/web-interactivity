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

/*===================================

Add menus to out theme

====================================*/

function register_my_menus(){
    register_nav_menus(
        array(
        'top-menu' => __('Top Menu'),
        'footer-left' => __('Left footer menu'),
        'footer-middle' => __('Middle footer menu'),
        'footer-right' => __('Right footer menu'),
        )
    );
}

add_action('init', 'register_my_menus');

/*===================================

Adds widget areas to theme

====================================*/

function blank_widgets_init(){
    register_sidebar (array(
        'name'          => ('Right Header'),
        'id'            => 'right-header',
        'description'   => 'Right widget area in header',
        'before_widget' => '<div class="widget-header">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="header-widget-title">',
        'after_title'   => '</h3>'
    ));

    register_sidebar (array(
        'name'          => ('Hero Image'),
        'id'            => 'hero-image',
        'description'   => 'Hero image on the home page',
        'before_widget' => '<div class="widget-hero-image">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="hero-image-widget-title">',
        'after_title'   => '</h3>'
    ));

    register_sidebar (array(
        'name'          => ('About Us'),
        'id'            => 'about-us',
        'description'   => 'Hone page about us section',
        'before_widget' => '<div class="widget-about-us">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="about-us-widget-title">',
        'after_title'   => '</h3>'
    ));

    register_sidebar (array(
        'name'          => ('Default Sidebar'),
        'id'            => 'default-sidebar',
        'description'   => 'Default sidebar area for template',
        'before_widget' => '<div class="widget-default-sidebar">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="default-sidebar-widget-title">',
        'after_title'   => '</h3>'
    ));

    register_sidebar (array(
        'name'          => ('Right Sidebar'),
        'id'            => 'right-sidebar',
        'description'   => 'Right sidebar area for template',
        'before_widget' => '<div class="widget-right-sidebar">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="right-sidebar-widget-title">',
        'after_title'   => '</h3>'
    ));

    register_sidebar (array(
        'name'          => ('Left Sidebar'),
        'id'            => 'left-sidebar',
        'description'   => 'Left sidebar area for template',
        'before_widget' => '<div class="widget-left-sidebar">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="left-sidebar-widget-title">',
        'after_title'   => '</h3>'
    ));

    register_sidebar (array(
        'name'          => ('Bottom left home page'),
        'id'            => 'bottom-left-home-page',
        'description'   => 'Bottom left section on the home page',
        'before_widget' => '<div class="widget-bottom-left">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="bottom-left-widget-title">',
        'after_title'   => '</h3>'
    ));

    register_sidebar (array(
        'name'          => ('Bottom middle home page'),
        'id'            => 'bottom-middle-home-page',
        'description'   => 'Bottom middle section on the home page',
        'before_widget' => '<div class="widget-bottom-middle">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="bottom-middle-widget-title">',
        'after_title'   => '</h3>'
    ));

    register_sidebar (array(
        'name'          => ('Bottom right home page'),
        'id'            => 'bottom-right-home-page',
        'description'   => 'Bottom right section on the home page',
        'before_widget' => '<div class="widget-bottom-right">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="bottom-right-widget-title">',
        'after_title'   => '</h3>'
    ));

}

add_action('widgets_init', 'blank_widgets_init');


?>
