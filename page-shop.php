<?php
/** 
* Template Name: Shop template page
*
*/?>

<?php get_header();?>

<section>
    <?php   
        $args = array( 'post_type' => 'product', 'posts_per_page' => 2 );
        $loop = new WP_Query( $args );

        while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?> 
        <?php get_template_part('single', 'product');?>
        <?php endwhile;?>


</section>

<?php get_footer();?>