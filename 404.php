<?php get_header();?>

<section class="page-<?php the_title();?>">
    <h1> 404</h1>
    <a href="<?php get_permalink(get_page_by_path('/'));?>"> go to Home</a>
</section>

<?php get_footer();?>