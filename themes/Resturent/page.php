<?php get_header(); ?>

<?php while(have_posts()) {
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
        <main class="text-center content-text clear">
             <p><?php the_content(); ?></p>
        </main>
    </div>

        


    
    <?php

} ?>

<?php get_footer(); ?>