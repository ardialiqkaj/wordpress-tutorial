<?php get_header(); ?>

<div class="row">

    <?php

    if (have_posts()) :

        while (have_posts()) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <?php the_title('<h1 class="entry-title">', '</h1>'); ?>

                <?php if (has_post_thumbnail()) : ?>

                    <div class="pull-right"><?php the_post_thumbnail('thumbnail'); ?></div>

                <?php endif; ?>

                <small><?php echo ardi_get_terms($post->ID, 'field'); ?> ||
                    <?php echo ardi_get_terms($post->ID, 'field'); ?>
                    <?php
                    if (current_user_can('manage_options')) {
                        echo '|| ';
                        edit_post_link();
                    }
                    ?></small>

                <?php the_content(); ?>

                <hr>

                <div class="row">
                    <div class="col-xs-6 text-left"><?php previous_post_link(); ?></div>
                    <div class="col-xs-6 text-right"><?php next_post_link(); ?></div>
                </div>


            </article>

    <?php endwhile;

    endif;

    ?>

    <?php get_sidebar(); ?>


</div>

<?php get_footer(); ?>