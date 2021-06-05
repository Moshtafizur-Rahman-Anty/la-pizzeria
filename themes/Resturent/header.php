<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Making this IOS compatible -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="La Pizzeria Restaurant">
    <link rel="apple-touch-icon" href="<?php get_template_directory_uri() ?>/img/logo.jpg">
    
    <!-- Making this android compatible -->

    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="La Pizzeria Restaurant">
    <link rel="rel" href="<?php get_template_directory_uri() ?>/img/logo.jpg" size="192*192">
    



    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="site-header">
    <div class="container">
    
        <div class="logo">
        
            <a href="<?php echo site_url(); ?>">
            <img src="<?php echo get_theme_file_uri('/img/logo.jpg'); ?>" class="Logoimage">
            </a>
        
        </div><!-- .logo -->
        <div class="header-information">
            <div class="socials">
                <?php 
                
                $args   =   array (

                    'theme_location'    =>  'social-menu',
                    'container'         =>  'nav',
                    'container_class'   =>  'socials',
                    'container_id'      =>  'socials',
                    'link_before'       =>  '<span class="sr-text">',
                    'link_after'        =>  '</span>'

                );

                wp_nav_menu($args);
                
                ?>
            </div><!-- .socials -->
            <div class="address">
                <p>8179 Bay Avenue  Mountain View, CA 94043</p>
                <p>Phone Number: +1-92-456-7890</p>
            </div>
        </div><!-- .header-information -->
        </div><!-- .container -->
    
    </header>

    <div class="main-menu">

    <div class="mobile-menu">
    
    <a href="" class="mobile"><i class="fa fa-bars">Menu</i></a>

    </div>

        <div class="navigation container">

            <?php 
            
                $args   =   array (
                    'theme_location'    =>  'main-menu',
                    'container'         =>  'nav',
                    'container_class'   =>  'site-nav'
                );

                wp_nav_menu($args);
            
            ?>
        </div>
    </div>


    
