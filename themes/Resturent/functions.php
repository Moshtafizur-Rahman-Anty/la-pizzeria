<?php  

require get_template_directory() . '/inc/database.php';
require get_template_directory() . '/inc/reservations.php';




//  Creates the Menus

function resturent_menu() {

    // Wordpress Function
    
    register_nav_menus(array(

        'main-menu' =>  'Main Menu',
        'social-menu' =>  'social Menu'


    ));
}

// Hooks

add_action('init', 'resturent_menu');


// Add stylesheets and JS FIles

function resturent_scripts() {

    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.1');

    wp_enqueue_style('fluidboxcss', get_template_directory_uri() . '/css/fluidbox.min.css', array(), '6.0.0');


    wp_enqueue_style('google-font', 'https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;0,800;1,400;1,600&family=Raleway:wght@400;600;700;800&display=swap', array(),'1.0.0');

    wp_enqueue_style('slicknavcss', get_template_directory_uri() . '/css/slicknav.min.css', array(),' 1.0.10');

    wp_enqueue_style('fontawesome', get_stylesheet_directory_uri() . '/css/font-awesome.css', array(), '4.7.0');

    wp_enqueue_style('style', get_stylesheet_uri(), array('google-font', 'normalize', 'fontawesome'), filemtime( get_template_directory() . '/style.css' ) , 'all');
    
    // Load JS scripts

    wp_enqueue_script('jquery');

    wp_enqueue_script('slicknavjs', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array('jquery'), '1.0.10', true);

    wp_enqueue_script('fluidboxjs', get_template_directory_uri() . '/js/jquery.fluidbox.min.js', array('jquery'), '1.0.0', true);

    wp_enqueue_script('script', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0', true);

}


add_action('wp_enqueue_scripts', 'resturent_scripts');




// Enable feature Image and other stuff

function resturent_setup() {

    // register new image size
    add_image_size('square', 350, 350, true);
    add_image_size('portrait', 350, 724, true);
    add_image_size('box', 437, 291, true);
    add_image_size('mediumSize', 700, 400, true);
    add_image_size('blog', 966, 644, true);
    add_image_size('menu', 768, 450, true);
    add_image_size('specialty-portrait', 435, 530, true);
    update_option('thumbnail_size_w', 253);
    update_option('thumbnail_size_h', 164);

    // add feature image
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'resturent_setup');


function add_nav_menu_classes($classes, $item)
{
    if (is_post_type_archive('menu') && ($item->title == "Menu")) {
       $classes[] = 'current_page_item';
    }

    return $classes;
}

add_filter('nav_menu_css_class' , 'add_nav_menu_classes' , 10 , 2);