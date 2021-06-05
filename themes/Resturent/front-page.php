<?php get_header(); ?>

<?php while(have_posts()) {
    the_post();

    ?>

    <div class="hero" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>)">
        <div class="hero-content">
            <div class="hero-text">
                 <h1><?php echo esc_html(get_option('blogdescription'));?></h1>
                 <?php the_content(); ?>
                 <?php $url = get_page_by_title('About Us'); ?>
                 <a class="button secondary" href="<?php echo get_permalink($url->ID); ?>">More Info</a>

            </div>
        </div>
    </div>
  
 <?php  } ?>


    <div class="main-content container">
        <main class="container-grid clear">
            <h2 class="primary-text text-center">Our Specialties!</h2>

            <?php 
            $specialties = new WP_Query(array (

                'post_type' => 'menu',
                'posts_per_page'  => 3,
                'category_name' =>  'pizza',
                'orderby'   =>  'rand'

            ));

            while($specialties->have_posts()) {
                $specialties->the_post(); ?>

                <div class="specialty columns1-3">
                    <div class="specialty-content">
                        <?php                 
                            the_post_thumbnail('specialty-portrait');       
                        ?>
                        <div class="information">
                            <?php the_title('<h3>', '</h3>'); ?>
                            <?php the_content(); ?>
                            <p class="price"><?php the_field('price'); ?></p>
                            <a href="<?php the_permalink(); ?>" class="button primary">read more</a>
                        </div>
                    </div>
                </div>
            <?php 
        } wp_reset_postdata();
            ?>
        </main>
    </div>


    <section class="ingredients">
        <div class="container">
            <div class="container-grid">
                <?php while(have_posts()) {
                    the_Post();
                    ?>
                    <div class="columns2-4">
                        <h3><?php the_field('ingredients'); ?></h3>
                        <p><?php the_field('ingredients_text') ?></p>
                        <?php $url = get_page_by_title('About Us'); ?>
                        <a class="button primary" href="<?php echo get_permalink($url->ID); ?>">Read more</a>
                    </div>
                    <div class="columns2-4">
                       <img src="<?php the_field('image') ?>" alt="Fresh Ingredients">
                    </div>
                    <?php
                } ?>
            </div>
        </div>
    </section>


<div class="main-content container reservation">
    <main class="content-text clear">
    <div class="reservation-info">
            <form class="reservation-form" method="post" action="">
                <h2>Make a reservation</h2>
                <div class="field">
                    <input type="text" name="name" placeholder="Name" required >
                </div>
                <div class="field">
                    <input type="datetime-local" name="date" placeholder="Date" required >
                </div>
                <div class="field">
                    <input type="email" name="email" placeholder="E-Mail" required >
                </div>
                <div class="field">
                    <input type="tel" name="Phone" placeholder="Phone Number" required >
                </div>
                <div class="field">
                   <textarea name="message" placeholder="message" required ></textarea>
                </div>
                <input type="submit" name="submit" class="button" value="Send">
                <input type="hidden" name="hidden" value="1">
            </form>
</div>
    </main>
</div>


    
    


<?php get_footer(); ?>