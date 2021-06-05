<?php get_header(); ?>

<?php

query_posts("page_id=9");
while(have_posts()) {
    the_post();

    ?>

<div class="hero" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>)">
    <div class="hero-content">
        <div class="hero-text">
            <h1>Blog</h1>
        </div>
    </div>
</div>

<?php } wp_reset_postdata(); ?>


<div class="main-content container">
    <div class="container-grid">
        <main class="content-text">
            
<?php 
                $blog = new WP_Query(array (
                    'post_type' => 'post'
                ));
                while($blog->have_posts()) {
                    $blog->the_post();
                ?>
            <article class="entry">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('menu'); ?>
                </a>

                <header class="entry-header clear">
                    <div class="date">
                        <time>
                            <?php echo the_time('d'); ?>
                            <span><?php echo the_time('M'); ?></span>
                        </time>
                    </div>
                    <div class="entry-title">
                        <?php the_title('<h2>', '</h2>'); ?>
                        <p class="author">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <?php the_author(); ?>
                        </p>
                    </div>
                </header>

                <div class="entry-content">
                    <?php the_excerpt(); ?>
                    <button><a href="<?php the_permalink(); ?>"> <span>Read More</span></a></button>

                </div>

            </article>



<?php } wp_reset_postdata(); ?>


        </main>
       
    </div>

</div>






<?php get_footer(); ?>