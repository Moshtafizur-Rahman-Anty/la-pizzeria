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
        <main class="content-text">
        <div class="entry-information clear">
        <div class="date">
                <time>
                    <?php echo the_time('d'); ?>
                    <span><?php echo the_time('M'); ?></span>
                </time>
            </div>
            <p class="author">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <?php the_author(); ?>
                        </p>
                </div>

             <p><?php the_content(); ?></p>
        </main>
    </div>

    
    <?php

} ?>

<div class="container comments">
    <?php comment_form(); ?>
</div>

<div class="container comments-list">
    <ol class="commentList">
        <?php 
        
            $comments   =   get_comments(array(
                'post_id'   =>  $post->ID,
                'status'    =>  'approve'
            ));

            wp_list_comments(array(
                
                'per_page'  =>  10,
                'reverse_top_level' =>  false
            ), $comments);
        
        ?>
    </ol>
</div>

<?php get_footer(); ?>