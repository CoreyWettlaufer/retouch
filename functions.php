<?php
define("THEME_DIR", get_template_directory_uri() . '/');

include(dirname(TEMPLATEPATH).'/custom/admin/theme-setup.php');
include(dirname(TEMPLATEPATH).'/custom/admin/header-mast.php');
include(dirname(TEMPLATEPATH).'/custom/admin/enqueue-styles.php');
include(dirname(TEMPLATEPATH).'/custom/admin/enqueue-scripts.php');
include(dirname(TEMPLATEPATH).'/custom/admin/sidebars.php');
include(dirname(TEMPLATEPATH).'/custom/admin/menus.php');
include(dirname(TEMPLATEPATH).'/custom/admin/custom-shortcodes.php');

// Custom Excerpt Length and Read More Tag
function new_excerpt_more($more) {
    global $post;
    return '<a class="moretag read-more-btn" href="'. get_permalink($post->ID) . '">Read More</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

/*
 * CUSTOM EXCERPT LENGTH
*/
function new_excerpt_length($length) {
    return 50;
}
add_filter('excerpt_length', 'new_excerpt_length', 199);

/*
 * MOVE YOAST TO BOTTOM
 */
function yoasttobottom() {
    return 'low';
}
add_filter( 'wpseo_metabox_prio', 'yoasttobottom');

remove_filter( 'the_content', 'wpautop' );
add_filter( 'the_content', 'wpautop' , 12);