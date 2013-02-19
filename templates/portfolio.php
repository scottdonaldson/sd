<?php 
/*
Template Name: Portfolio
*/
get_header(); the_post(); ?>

    <div class="primary">

        <article <?php post_class(); ?>>
                        
            <h1 class="entry-title visuallyhidden">
                Web Development Portfolio
            </h1>
            
            <div class="author visuallyhidden">By <?php the_author(); ?></div>
            
            <div class="entry-content clearfix">
                <?php
                $items = get_field('items');
                $p = 1;
                
                foreach ($items as $item) { ?>
                    <a class="item p-<?php echo $p; ?>" href="<?php echo $item['link']; ?>" target="_blank">
                        <img src="<?php echo $item['image']; ?>" alt="<?php echo $item['name']; ?>">
                        <div class="description">
                            <h2><?php echo $item['name']; ?></h2>
                            <p><?php echo $item['description']; ?></p>
                        </div>
                        <span class="league">Visit Site</a>
                    </a>                
                <?php 
                $p++;
                } ?>
            </div>

            <a href="<?php echo home_url(); ?>/blog/category/web" class="web league">Read my blog posts on web dev</a>
            
        </article><!-- .post -->
            
    </div>                

<?php get_footer(); ?>