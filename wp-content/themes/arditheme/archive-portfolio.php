<?php get_header(); ?>

<div class="ardi-homepage">
    <div class="ardi-articles-archive">
        <?php if (have_posts()) : ?>

            <header class="page-header">
                <?php

                the_archive_title('<h1 class="page-title">', '</h1>');
                the_archive_description('<div class="taxonomy-description">', '</div>');

                ?>
            </header>

            <?php while (have_posts()) : the_post(); ?>

                <?php get_template_part('content', 'archive'); ?>

            <?php endwhile; ?>

            <div class="col-xs-12 text-center">
                <?php the_posts_navigation(); ?>
            </div>

        <?php endif; ?>

    </div>
    <?php get_sidebar(); ?>
</div>


<?php get_footer(); ?>