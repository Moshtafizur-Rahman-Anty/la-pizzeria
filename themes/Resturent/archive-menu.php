<?php get_header(); ?>



<?php

query_posts("page_id=9");

 while(have_posts()) {
    the_post();

    ?>

<div class="hero" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>)">
    <div class="hero-content">
        <div class="hero-text">
            <h1><?php the_title(); ?></h1>
        </div>
    </div>
</div>

<div class="main-content container">
    <main class="text-center content-text">
        <p><?php the_content(); ?></p>
    </main>
</div>

<?php

} 

wp_reset_postdata();

?>


<div class="our-specialties container">

    <h3 class="primary-text">
        pizzas
    </h3>
    <div class="container-grid specialties-content">
        <?php
 
                     $menu = new WP_Query(array(
 
                         'post_type'         =>   'menu',
                         'posts_per_page'    =>  -1,
                         'orderby'           =>  'title',
                         'order'             =>  'ASC',
                         'category_name'     =>  'others'
                         
                     )); 
 
                     ?>

        <?php while($menu->have_posts()) {
                     $menu->the_post();
                     ?>

        <div class="columns2-4">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('menu') ?>
                <h3><?php the_title(); ?><span> <?php the_field('price'); ?></span></h3>
                <?php   the_content(); ?>

        </div>
        </a>



        <?php 
     
         }
 
          wp_reset_postdata();  ?>


        <h3 class="primary-text">
            Others
        </h3>
        <div class="container-grid specialties-content">
            <?php
 
                     $menu = new WP_Query(array(
 
                         'post_type'         =>   'menu',
                         'posts_per_page'    =>  -1,
                         'orderby'           =>  'title',
                         'order'             =>  'ASC',
                         'category_name'     =>  'others'
                         
                     )); 
 
                     ?>

            <?php while($menu->have_posts()) {
                     $menu->the_post();
                     ?>

            <div class="columns2-4">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('menu') ?>
                    <h3><?php the_title(); ?><span> <?php the_field('price'); ?></span></h3>
                    <?php   the_content(); ?>

            </div>
            </a>



            <?php 
     
         }
 
          wp_reset_postdata();
         
         get_footer(); ?>

        </div>
    </div>