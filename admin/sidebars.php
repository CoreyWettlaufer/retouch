<?php

register_sidebar( array(
   'name' => __( 'Page Sidebar'),
   'id' => 'page-sidebar',
   'description' => __( 'This is the sidebar for pages' ),
   'before_widget' => '<div id="%1$s" class="widget">',
   'after_widget' => '</div>',
   'before_title' => '<h4>',
   'after_title' => '</h4>',
) );

register_sidebar( array(
   'name' => __( 'Footer Left Sidebar'),
   'id' => 'footer-left',
   'description' => __( 'This is the left footer sidebar' ),
   'before_widget' => '<div id="%1$s" class="widget">',
   'after_widget' => '</div>',
   'before_title' => '<h5>',
   'after_title' => '</h5>',
) );

register_sidebar( array(
   'name' => __( 'Footer Middle Sidebar'),
   'id' => 'footer-middle',
   'description' => __( 'This is the middle footer sidebar' ),
   'before_widget' => '<div id="%1$s" class="widget">',
   'after_widget' => '</div>',
   'before_title' => '<h5>',
   'after_title' => '</h5>',
) );

register_sidebar( array(
   'name' => __( 'Footer Right Sidebar'),
   'id' => 'footer-right',
   'description' => __( 'This is the right footer sidebar' ),
   'before_widget' => '<div id="%1$s" class="widget">',
   'after_widget' => '</div>',
   'before_title' => '<h5>',
   'after_title' => '</h5>',
) );
