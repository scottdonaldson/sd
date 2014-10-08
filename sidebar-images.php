<?php 
$images = new WP_Query(array(
    'post_type' => 'image',
    'posts_per_page' => 3
    )
);
if ( $images->have_posts() ) { ?>
    <div class="sidebar images">

        <h3 class="images-title league">Recent Images</h3>
        <?php while ( $images->have_posts() ) : $images->the_post(); ?>

            <img src="<?php the_field('image_link'); ?>" alt="<?php the_title(); ?>" style="margin-bottom: 20px;">

        <?php endwhile; wp_reset_query(); ?>

    </div>
<?php } ?>