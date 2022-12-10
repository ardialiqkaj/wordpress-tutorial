<?php

function ardi_script_enqueue()
{

    wp_enqueue_style('customstyle', get_template_directory_uri() . './css/ardi.css', array(), '1.0.0', 'all');
    wp_enqueue_script('customjs', get_template_directory_uri() . './js/ardi.js', array(), '1.0.0', true);

    wp_enqueue_script('jquery');
}

add_action('wp_enqueue_scripts', 'ardi_script_enqueue');

function ardi_theme_setup()
{
    add_theme_support('menus');

    register_nav_menu('primary', 'Primary Header Navigation');
    register_nav_menu('secondary', 'Footer Navigation');
}

add_action('init', 'ardi_theme_setup');

add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats', array('gallery', 'quote', 'video', 'aside', 'image', 'link'));
add_theme_support('html5', array('search-form'));

/*
    ===================================
    Sidebar function
    ===================================
*/

function ardi_widget_setup()
{
    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar-1',
        'class' => 'custom',
        'description' => 'Standard sidebar',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>'
    ));
}

add_action('widgets_init', 'ardi_widget_setup');

/*
    ===================================
    Include Walker file
    ===================================
*/

require get_template_directory() . './inc/walker.php';

function ardi_remove_version()
{
    return '';
}
add_filter('the_generator', 'ardi_remove_version');


/*
	==========================================
	 Custom Post Type
	==========================================
*/
function ardi_custom_post_type()
{
    $labels = array(
        'name' => 'Portfolio',
        'singular_name' => 'Portfolio',
        'add_new' => 'Add Item',
        'all_items' => 'All Items',
        'add_new_item' => 'Add Item',
        'edit_item' => 'Edit Item',
        'new_item' => 'New Item',
        'view_item' => 'View Item',
        'search_item' => 'Search Portfolio',
        'not_found' => 'No items found',
        'not_found_in_trash' => 'No items found in trash',
        'parent_item_colon' => 'Parent Item'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'revisions',
        ),
        //'taxonomies' => array('category', 'post_tag'),
        'menu_position' => 5,
        'exclude_from_search' => false
    );
    register_post_type('portfolio', $args);
}

add_action('init', 'ardi_custom_post_type');


function ardi_custom_taxonomies()
{

    //add new taxonomy hierarchical
    $labels = array(
        'name' => 'Types',
        'singular_name' => 'Type',
        'search_items' => 'Search Types',
        'all_items' => 'All Types',
        'parent_item' => 'Parent Type',
        'parent_item_colon' => 'Parent Type:',
        'edit_item' => 'Edit Type',
        'update_item' => 'Update Type',
        'add_new_item' => 'Add New Work Type',
        'new_item_name' => 'New Type Name',
        'menu_name' => 'Types'
    );

    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'type')
    );

    register_taxonomy('type', array('portfolio'), $args);

    //add new taxonomy NOT hierarchical

}

add_action('init', 'ardi_custom_taxonomies');
