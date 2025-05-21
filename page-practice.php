<?php

/**
 * Template Name: Practice
 */


 get_header();

 ?>
 <style>
    .border-bottom-1 {
        border-bottom: 1px solid #ccc;
        padding: 3px 0;
    }
 </style>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 10,
                    'meta_key' => 'order',
                    'meta_compare' => '<=',
                    'meta_value' => 5,
                    'orderby' => 'meta_value',
                    'order' => 'ASC',
                );
                $query = new WP_Query($args);
                if($query->have_posts()) :
                    while($query->have_posts()) : $query->the_post();
            ?>
                        <div class="post">
                            <h2 class="border-bottom-1"><?php the_title(); ?></h2>
                        </div>
            <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    echo '<p>No posts found</p>';
                endif;
            ?>
        </div>
    </div>
</div>


<?php get_footer(); ?>