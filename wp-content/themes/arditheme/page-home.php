<?php get_header(); ?>


<?php

$lastBlog = new WP_Query('type=post&posts_per_page=1');

if ($lastBlog->have_posts()) {

    while ($lastBlog->have_posts()) : $lastBlog->the_post();
        get_template_part('content', get_post_format());

    endwhile;
}

wp_reset_postdata();

?>

<?php if (have_posts()) {

    while (have_posts()) : the_post(); ?>
        <?php get_template_part('content', get_post_format()); ?>

<?php endwhile;
}

//PRINT OTHER 2 POSTS NOT THE FIRST ONE

$lastBlog = new WP_Query('type=post&posts_per_page=2&offset=1');

if ($lastBlog->have_posts()) {

    while ($lastBlog->have_posts()) : $lastBlog->the_post();
        get_template_part('content', get_post_format());

    endwhile;
}

wp_reset_postdata();

?>

<?php

//PRINT ONLY ENGLAND CATEGORY
$lastBlog = new WP_Query('type=post&posts_per_page=1&cat=10');
if ($lastBlog->have_posts()) {

    while ($lastBlog->have_posts()) : $lastBlog->the_post();
        get_template_part('content', get_post_format());

    endwhile;
}

wp_reset_postdata();

?>
<hr>

<?php get_sidebar(); ?>
<?php get_footer(); ?>