<?php get_header(); ?>

<?php

if (have_posts()) :

    while (have_posts()) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <?php the_title('<h1 class="entry-title">', '</h1>'); ?>

            <?php if (has_post_thumbnail()) : ?>

                <?php the_post_thumbnail('thumbnail'); ?>

            <?php endif; ?>

            <small><?php the_category(' '); ?> || <?php the_tags(); ?> || <?php edit_post_link(); ?></small>

            <?php the_content(); ?>

            <hr>

            <div class="row">
                <div class="col-xs-6 text-left"><?php previous_post_link(); ?></div>
                <div class="col-xs-6 text-right"><?php next_post_link(); ?></div>
            </div>

            <?php
            if (comments_open()) {
                comments_template();
            } else {
                echo '<h5 class="text-center">Sorry, Comments are closed!</h5>';
            }

            ?>

        </article>

<?php endwhile;

endif;

?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>